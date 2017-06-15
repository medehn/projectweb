<?php

/**
 * Created by PhpStorm.
 * User: robertfitzko
 * Date: 13.06.17
 * Time: 15:14
 */
class LogoutController extends Controller
{
    protected $viewFileName = "logout"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = 'Logout';

        $this->user->logout();
        $this->user = null;
    }


}