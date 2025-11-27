<?php
include('classes/Menu.php');

define('EXIT_CODE',5);
define('INPUT_MSG', "Please, enter your option(0 to 5)");

$menu = new Menu();

$option = 0;

while($option != EXIT_CODE) {
    $menu->showOptions();
    $option = readline(INPUT_MSG);
    $menu->doOption(intval($option));
}

?>