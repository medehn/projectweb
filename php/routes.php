<?php
/**
 * Created by PhpStorm.
 * User: robertfitzko
 * Date: 13.06.17
 * Time: 20:02
 */

//Routen kennzeichen von den Seiten
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/profile'] = array('controller' => 'ProfileController', 'uniqueName' => 'profile');

$route['/events'] = array('controller' => 'EventsController', 'uniqueName' => 'events');