<?php

require_once "libs/mustangostang_spyc/Spyc.php";
require_once "core/Core.php";
require_once "core/Url.php";
require_once "core/Site.php";
require_once "core/Page.php";

$page = new Page();
$url = new Url();
$site = new Site();
$core = new Core();

include $core->render();