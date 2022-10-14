<?php
// app/Traits/ExtraModelMethods.php
namespace App\Traits;

use CodeIgniter\Database\Exceptions\DataException;
use InvalidArgumentException;
use ReflectionException;
use stdClass;

trait ExtraModelMethods
{
    /**
     * Insert on duplicate key update
     *
     * @param array|object $data Data
     * @param bool $escape Escape
     * @throws ReflectionException
     */
    public function insertOnDuplicateUpdate($data, ?bool $escape = null): bool
    {
        if (! empty($data)) {
            $data = $this->transformAllDataToArray($data, 'update');
        }

        // Validate data before saving.
        if (! $this->skipValidation && ! $this->cleanRules(true)->validate($data)) {
            return false;
        }

        // Must be called first so we don't
        // strip out updated_at values.
        $data = $this->doProtectFields($data);

        // doProtectFields() can further remove elements from
        // $data so we need to check for empty dataset again
        if (empty($data)) {
            throw DataException::forEmptyDataset('update');
        }

        // Set created_at and updated_at with same time
//        $date = $this->setDate();
//
//        if ($this->useTimestamps && $this->createdField && ! array_key_exists($this->createdField, $data)) {
//            $data[$this->createdField] = $date;
//        }
//
//        if ($this->useTimestamps && $this->updatedField) {
//            $data[$this->updatedField] = $date;
//        }

        $builder = $this->builder();
        $insert  = $builder->set($data, '', $escape)->getCompiledInsert();

        // Remove created_at field in case of update query
        if ($data[$this->createdField]) {
            unset($data[$this->createdField]);
        }
        $update = $builder->set($data, '', $escape)->getCompiledUpdate();
        $update = preg_replace('/UPDATE[\s\S]+? SET /', '', $update);

        // Prepare event
        $eventData = [
            'id'     => $this->getIdValue($data),
            'data'   => $data,
            'result' => $builder->db()->query(sprintf('%s ON DUPLICATE KEY UPDATE %s', $insert, $update)),
        ];

        if ($this->tempAllowCallbacks) {
            $this->trigger('afterUpdate', $eventData);
        }

        $this->tempAllowCallbacks = $this->allowCallbacks;

        return $eventData['result'];
    }

    /**
     * Transform data to array
     *
     * @param array|object|null $data Data
     * @param string            $type Type of data (insert|update)
     *
     * @throws DataException
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    protected function transformAllDataToArray($data, string $type): array
    {
        if (! in_array($type, ['insert', 'update'], true)) {
            throw new InvalidArgumentException(sprintf('Invalid type "%s" used upon transforming data to array.', $type));
        }

        if (empty($data)) {
            throw DataException::forEmptyDataset($type);
        }

        // If $data is using a custom class with public or protected
        // properties representing the collection elements, we need to grab
        // them as an array.
        if (is_object($data) && ! $data instanceof stdClass) {
            $data = $this->objectToArray($data, false, true);
        }

        // If it's still a stdClass, go ahead and convert to
        // an array so doProtectFields and other model methods
        // don't have to do special checks.
        if (is_object($data)) {
            $data = (array) $data;
        }

        // If it's still empty here, means $data is no change or is empty object
        if (empty($data)) {
            throw DataException::forEmptyDataset($type);
        }

        return $data;
    }
}
