<?php 

class Contact {
    //todo: EMAIL AND PHONE validations
    const INPUT_NAME = "Enter name";
    const INPUT_SURNAME = "Enter surname";
    const INPUT_EMAIL = "Enter email";
    const INPUT_PHONE = "Enter phone number";

    private string $name;
    private string $surname;
    private string $email;
    private string $phone;

    public function __construct() {
        $this->name = readline(self::INPUT_NAME);
        $this->surname = readline(self::INPUT_SURNAME);
        $this->email = readline(self::INPUT_EMAIL);
        $this->phone = readline(self::INPUT_PHONE);
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSurname(): string {
        return $this->surname;
    }


    public function getEmail(): string {
        return $this->email;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function __toString() {
        return $this->surname.",".$this->name."  📞 ".$this->phone." ✉️  ".$this->email.PHP_EOL;
    }
}
?>