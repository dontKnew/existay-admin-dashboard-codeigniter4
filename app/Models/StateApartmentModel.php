<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Traits\ExtraModelMethods;


class StateApartmentModel extends Model
{
    use ExtraModelMethods;
    protected $DBGroup          = 'default';
    protected $table            = 'state_apartments';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'meta_description',
        'meta_keywords',
        "title",
        'url_title',
        "short_description",
        "state",
        "state_area",
        "stars",
        "overview_title",
        "guest_no",
        "bed_no",
        "bathroom_no",
        "overview_description",
        "apartment_price",
        "apartment_image",
        "state_area_map",
        "house_rules",
        "guest_no",
        "bathroom_no",
        "bed_no",
        "hot_new_price",
        "hot_old_price",
        "hot_deal_text1",
        "hot_deal_text2",
        "best_new_price",
        "best_old_price",
        "best_text1",
        "best_text2",
        "privacy"
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
