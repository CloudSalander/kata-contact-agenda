<?php

include('Agenda.php');

class Menu {
    const OPTIONS = ['Add Contact','Show Contacts','Delete Contact','Search Contact','Export Contacts','Exit'];

    public function showOptions(): void {
        foreach(self::OPTIONS as $index => $option) {
            echo $index." - ".$option.PHP_EOL;
        }
    }

    public function doAction(int $option): void {
        //TODO: Enum for options?
        match ($option) {
            0 => $agenda->createContact()
        }
    }
}

?>