<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        echo $this->url->getBaseUri();
    }
    public function addUserAction()
    {

    }
    public function addUserManuallyAction()
    {
    echo $this->url->getBaseUri();
    }
}

