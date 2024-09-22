<?php

namespace model;

class Director extends Employee implements LeadInterface
{
    private array $team = [];

    function getTeamMembers(): array
    {
        // TODO: Implement getTeamMembers() method.
        return $this->team;
    }

    function addMemberToTeam(Employee $member): void
    {
        // TODO: Implement addMemberToTeam() method.
        $this->team[] = $member;
    }
}