<?php

/**
 * Created by PhpStorm.
 * User: robertfitzko
 * Date: 13.06.17
 * Time: 15:09
 */
class IndexController extends Controller
{
    protected $viewFileName = "index"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Übersicht";
        $this->view->username = $this->user->username;

        $this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}