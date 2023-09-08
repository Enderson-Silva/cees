<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Login {
	public static function getLogin(){
		return View::render('pages/login');
	}
}