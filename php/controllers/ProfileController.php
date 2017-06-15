<?php

/**
 * Created by PhpStorm.
 * User: robertfitzko
 * Date: 13.06.17
 * Time: 20:09
 */
class ProfileController
{
    protected $viewFileName = "profile"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Profil";
        $this->view->username = $this->user->username;

        //$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }
}