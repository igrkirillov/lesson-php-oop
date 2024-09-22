<?php

namespace model;

class Manager extends Employee implements WebinarSpeakerInterface
{

    function getNextWebinars(): array
    {
        // TODO: Implement getNextWebinars() method.
        return [];
    }

    function openWebinar(): void
    {
        // TODO: Implement openWebinar() method.
        echo "Менеджер $this->name начнёт вебинар через 5 минут!" . PHP_EOL;
    }
}