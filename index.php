<?php
require "vendor/autoload.php";

var_export((new \WilokeUnit\Controllers\PostController())->validation(['title' => 'This is title', 'content' =>
	'dad']));
die;
