<?php 
include 'applicationLoader.php';
include 'libaryLoader.php';

spl_autoload_register(array(new LibaryLoader, 'loadClass'));
spl_autoload_register(array(new ApplicationLoader, 'loadClass'));

new MyLib;
new App; 
new Pessoa;
