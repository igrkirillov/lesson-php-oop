<?php

namespace model;

interface LeadInterface
{
    function getTeamMembers(): array;
    function addMemberToTeam(Employee $member): void;
}