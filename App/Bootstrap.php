<?php

define('BASE_PATH', realpath(__DIR__ . '/../') . '/');
define('BASE_URl', config('app.url'));

require_once 'Core/BaseModel.php';
require_once 'Core/Core.php';
require_once 'Core/Controller.php';