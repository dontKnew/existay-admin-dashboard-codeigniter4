<?php

namespace App\Controllers;

use App\Models\StateModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ["text", 'inflector'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    protected function getState(){
        $state = new StateModel();
        return $state->where("privacy", "public")->orderBy("state", "asc")->findAll();
    }

    protected  function userFriendlyUrl($title){
        $title  = humanize($title, '-,&,^,$,#,!,~,`,},?,[,*,;,%,>,.,|,<,:,|,+,=,@,{');
        $title  = humanize($title, ']');
        $title = str_replace('/','',$title);
        $title = stripslashes($title);
        $title = humanize($title, "'");
        $title = humanize($title, '"');
        $title = trim($title);
        $title = underscore($title);
        $title = dasherize($title);
        return $title;
    }

}
