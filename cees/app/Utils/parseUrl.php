<?php

namespace App\Utils;

class parseUrl {
	public static function parseUrl(){
		return explode("/", rtrim($_GET['url']));
	}
}