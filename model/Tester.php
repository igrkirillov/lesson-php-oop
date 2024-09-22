<?php

namespace model;

class Tester extends Employee implements WebinarSpeakerInterface, ApplicationCreatorInterface
{
    private int $currentTaskId;

    function assignTask(int $taskId): void
    {
        // TODO: Implement assignTask() method.
        $this->currentTaskId = $taskId;
        echo "Тестеру $this->name назначена задача " . $this->currentTaskId . "\n";
    }

    function getCurrentStatusOfTask(): string
    {
        // TODO: Implement getCurrentStatusOfTask() method.
        return "Задача тестера " . $this->currentTaskId . " в статусе \"opened\"";
    }

    function getNextWebinars(): array
    {
        // TODO: Implement getNextWebinars() method.
        return [];
    }

    function openWebinar(): void
    {
        // TODO: Implement openWebinar() method.
        echo "Вебинар тестировщика $this->name открыт в отдельном окне!" . PHP_EOL;
    }
}