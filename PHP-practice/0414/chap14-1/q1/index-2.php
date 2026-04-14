<?php
class Employee {
    private string $lastName;
    private string $firstName;
    public function __construct($lastName,$firstName) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
    }
    public function getFullName() : string {
        return $this->lastName . ' ' . $this->firstName;
    }
}

$yamada = new Employee('山田','太郎');
echo $yamada->getFullName();
// echo $yamada->lastName;//privateには外部から触れない