<?php

include('Contact.php');

class Agenda {
    private array $contacts;

    public function __construct() {
        $this->contacts = [];
    }

    public function createContact(): void {
       $this->contacts[] = new Contact();
    }

    public function showContacts(): void {
        foreach($this->contacts as $index => $contact) {
            echo $index.": ".$contact;
        }
    }

}

?>