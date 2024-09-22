<?php

namespace model;

interface ApplicationCreatorInterface
{
    function assignTask(int $taskId): void;
    function getCurrentStatusOfTask(): string;
}