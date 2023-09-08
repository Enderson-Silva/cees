<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Interativo extends Page{
	public static function getInterativo(){
		$content = View::render("pages/interativo", [
		]);

		return parent::getPage("titulo", $content);
	}
}