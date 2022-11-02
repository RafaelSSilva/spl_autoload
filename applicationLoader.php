<?php
class ApplicationLoader {
    public static function loadClass($class) {
        if (file_exists("app/{$class}.php")) {
            require_once "app/{$class}.php";
            return true;
        }
    }

    public function register() {
        spl_autoload_register(array($this, 'loadClass'));
    }
}