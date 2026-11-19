<?php

namespace Models;

class User
{
    protected string $name;
    protected int $age;

    function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getAge(): int
    {
        return $this->age;
    }

    function getDetails(): void
    {
        echo "This is the user details:\n";
        echo "Name: {$this->getName()}\n";
        echo "Age: {$this->getAge()}\n";
    }
}
