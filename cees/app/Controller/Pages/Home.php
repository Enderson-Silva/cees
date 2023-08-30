<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page {
	public static function getHome(){
		$objOrganization = new Organization();
		$content = View::render('pages/home', [
			"name" => $objOrganization->name
		]);

		return parent::getPage("Titulo para teste meu deeeeus", $content);
	}
}