<?php

namespace model;

class Programmer extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    private int $currentTask;

    function assignTask(int $taskId): void
    {
        // TODO: Implement assignTask() method.
        $this->currentTask = $taskId;
        echo "Программисту $this->name назначена задача " . $this->currentTaskId . "\n";
    }

    function getCurrentStatusOfTask(): string
    {
        // TODO: Implement getCurrentStatusOfTask() method.
        return "Задача " . $this->currentTask . " в статусе \"inprogress\"";
    }

    function getNextWebinars(): array
    {
        // TODO: Implement getNextWebinars() method.
        return [];
    }

    function openWebinar(): void
    {
        // TODO: Implement openWebinar() method.
        echo "Программист $this->name занят, пока не может вести вебинар!" . PHP_EOL;
    }
}