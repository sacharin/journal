<?php

require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
require_once 'core/Route.php';

$settings = require_once 'core/settings.php';

Route::start($settings); // запускаем маршрутизатор

?>
