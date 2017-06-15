<?php

/**
 * Created by PhpStorm.
 * User: robertfitzko
 * Date: 13.06.17
 * Time: 20:08
 */
class EventsController
{
    protected $viewFileName = "events"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Events";
        $this->view->username = $this->user->username;

        //$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }
}