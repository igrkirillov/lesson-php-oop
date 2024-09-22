<?php

require_once (__DIR__ . '/autoload.php');
spl_autoload_register("autoload");

use model\Programmer as Programmer;
use model\Manager as Manager;
use model\Tester as Tester;
use model\Director as Director;
use model\ApplicationCreatorInterface as ApplicationCreatorInterface;
use model\LeadInterface as LeadInterface;
use model\WebinarSpeakerInterface as WebinarSpeakerInterface;

$ivan = new Programmer("Иван", "Иванов", 35, 5000);
$piter = new Programmer("Пётр", "Петров", 30, 4500);
$mumu = new Manager("Герасим", "Муму", 20, 5500);
$luno = new Director("Луно", "Имбазге", 44, 10000);
$mona = new Tester("Мона", "Бланш", 18, 3000);

$team = array($ivan, $piter, $mumu, $luno, $mona);

$teamSalary = 0;
foreach ($team as $member) {
    if ($member instanceof ApplicationCreatorInterface) {
        $member->assignTask(random_int(1, 100));
        echo $member->getCurrentStatusOfTask() . PHP_EOL;
    }
    if ($member instanceof LeadInterface) {
        $member->addMemberToTeam($ivan);
        $member->addMemberToTeam($piter);
        $member->addMemberToTeam($mona);
        echo "Члены команды товарища $member: " . implode(", ", $member->getTeamMembers()) . PHP_EOL;
    }
    if ($member instanceof WebinarSpeakerInterface) {
        $member->openWebinar();
    }
    $teamSalary += $member->getSalary();
}
echo "Общая ЗП у всех сотрудников $teamSalary" . PHP_EOL;

spl_autoload_unregister("autoload");