<?php
/**
 * Created by PhpStorm.
 * User: Colum
 * Date: 26/01/2017
 * Time: 16:28
 */

namespace System\Libraries\UWebAdmin\Pages\Dashboard;


use System\Libraries\UWebAdmin\Pages\Dashboard\Routes\DashboardHome_Route;
use Untitled\PageBuilder\Page;

class Dashboard_Page extends Page
{

    public function __construct()
    {
        parent::__construct();

        $this->AddRoute(new DashboardHome_Route());
    }

}