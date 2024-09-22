<?php

namespace model;

interface WebinarSpeakerInterface
{
    function getNextWebinars(): array;
    function openWebinar(): void;
}