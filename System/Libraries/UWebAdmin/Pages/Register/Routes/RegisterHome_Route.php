<?php
/**
 * Created by PhpStorm.
 * User: Colum
 * Date: 26/01/2017
 * Time: 16:57
 */

namespace System\Libraries\UWebAdmin\Pages\Register\Routes;


use System\Libraries\UWebAdmin\DataProcesses\Register_DataProcess;
use System\Libraries\UWebAdmin\Models\API\Api;
use Untitled\PageBuilder\Route;

class RegisterHome_Route extends Route
{

    /**
     * RegisterHome_Route constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->Request = "register";
        $this->RequestView = true;
        $this->ViewFilePath = "UWA/Register/index.html";
        $this->DataProcess = new Register_DataProcess();
    }

    /**
     * Run the data process
     */
    public function RunDataProcess()
    {
        $Roles = [];
        foreach(Api::GetRoles() as $role){
            $Roles[] = get_object_vars($role);
        }
        $this->ViewData = ["roles" => $Roles];
    }

}