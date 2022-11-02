<?php
include "applicationLoader.php";

$al = new ApplicationLoader;
$al->register();

new App;
new Pessoa;

