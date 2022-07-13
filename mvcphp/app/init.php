<?php

require_once 'routes/App.php';
require_once 'routes/Controller.php';
require_once 'routes/Database.php';
require_once 'routes/popMessage.php';

require_once 'config/config.php';

// spl_autoload_register(function($class){
//     // App\Product\User = ["App", "Product", "User"]
//     $class = explode('\\', $class);
//     $class = end($class);
//     require_once __DIR__ . '/controllers/' . $class . '.php';
// });

// spl_autoload_register(function($class){
//     // App\Service\User = ["App", "Service", "User"]
//     $class = explode('\\', $class);
//     $class = end($class);
//     require_once __DIR__ . '/models/' . $class . '.php';
// });

// spl_autoload_register(function($class){
//     // App\Service\User = ["App", "Service", "User"]
//     $class = explode('\\', $class);
//     $class = end($class);
//     require_once __DIR__ . '/routes/' . $class . '.php';
// });

// spl_autoload_register(function($class){
//     // App\Service\User = ["App", "Service", "User"]
//     $class = explode('\\', $class);
//     $class = end($class);
//     require_once __DIR__ . '/views/' . $class . '.php';
// });