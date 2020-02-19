<?php
class loginController extends controller {

	public function __contruct()
	{
		parent::__contruct();

	}

	public function index() {
		
        $array = array();
        $this->loadTemplate('login',$array);

	}

}