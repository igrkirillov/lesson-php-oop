<?php

namespace model;

abstract class Employee
{
    protected string $name;
    protected string $surname;
    protected int $age;
    protected int $salary;

    public function __construct(string $name, string $surname, int $age, int $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * Получить полное ФИО
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    /**
     * Получить ЗП
     *
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getFullName();
    }
}