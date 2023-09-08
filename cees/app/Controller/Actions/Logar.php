<?php

namespace App\Controller\Actions;

use App\Http\Request;

class Logar {
	private $name;
	private $senha;
	private $request;

	public function __construct(){
		$this->request = new Request();
		$this->name = $this->request->getPostVars()["name"];
		$this->senha = $this->request->getPostVars()['password'];
		var_dump($this);
	}
}