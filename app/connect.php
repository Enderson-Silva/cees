<?php

require_once("../config/config.php");

$con = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USERNAME, PASSWORD);
