<?php
/**
 * Created by PhpStorm.
 * User: Colum
 * Date: 26/01/2017
 * Time: 17:16
 */

namespace System\Libraries\UWebAdmin\Pages\Dashboard\Routes;


use System\Libraries\UWebAdmin\DataProcesses\Admin_DataProcess;
use System\Libraries\UWebAdmin\RouteGuards\AuthenticatedUser_Guard;
use System\PageBuilder\RouteGuard;
use Untitled\Libraries\Session\Session;
use Untitled\PageBuilder\Route;

class DashboardHome_Route extends Route
{

    /**
     * DashboardHome_Route constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->Request = "dashboard";
        $this->RenderView = true;
        $this->ViewFilePath = "UWA/Dashboard/index.html";
        $this->DataProcess = new Admin_DataProcess();

        $this->RouteGuard = new AuthenticatedUser_Guard();
    }

    /**
     * Run data process
     */
    public function RunDataProcess()
    {
        // TODO: Implement RunDataProcess() method.
    }

}