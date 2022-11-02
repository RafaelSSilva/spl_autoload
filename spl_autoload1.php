<?php
spl_autoload_register(function($class){
    if (file_exists("app/{$class}.php")) {
      require_once "app/{$class}.php";
      return TRUE;
    }
});

new Pessoa; 