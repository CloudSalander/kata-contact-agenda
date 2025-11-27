<?php

include('Contact.php');

class Agenda {
    private array $contacts;

    public function __construct() {
        $this->contacts = [];
    }

    public function createContact(): bool {
       $this->contacts[] = new Contact();
    }

}

?>