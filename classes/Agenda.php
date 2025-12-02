<?php

include('Contact.php');

class Agenda {
    private array $contacts;

    const REMOVE_MSG  = "Contact to remove?(select contact index number)";

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

    public function removeContact(): void {
        $this->showContacts();
        $contactId = readline(self::REMOVE_MSG.PHP_EOL);
        if($this->isValidContactId($contactId)) {
            unset($this->contacts[$contactId]);
            $this->contacts = array_values($this->contacts);
        }
        
    }

    private function isValidContactId(int $contactId): bool {
        return ($contactId > 0) && ($contactId < count($this->contacts));
    }

}

?>