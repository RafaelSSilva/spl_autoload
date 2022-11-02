<?php
class LibaryLoader {
    public static function loadClass($class) {
        if (file_exists("lib/{$class}.php")) {
            require_once "lib/{$class}.php";
            return true;
        }
    }
}