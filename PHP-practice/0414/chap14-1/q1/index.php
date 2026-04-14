<?php
class Employee {
    public function __construct(
        //1
        private string $lastName,
        private string $firstName

        //2
        // $this->lastName = $lastName;
        // $this->firstName = $firstName;

        //3
        // $lastName = $this->lastName;
        // $firstName = $this->firstName;

        //4
        // $this->lastName, $this->firstName
    ) {}
    public function getFullName() : string {
        return $this->lastName . ' ' . $this->firstName;
    }
}

$yamada = new Employee('山田','太郎');
echo $yamada->getFullName();