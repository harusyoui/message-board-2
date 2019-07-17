<?php

namespace TechAcademy\RPG;

require_once 'slime.php';
require_once 'hero.php';

use TechAcademy\RPG\Characters\Hero;

class game {
    static function start(){
        $hero = new Hero;
        $slime_A = new \TechAcademy\RPG\Characters\Slime('A');

        $slime_A->attack($hero);
        $hero->attack($slime_A);

        Hero::description();
        Characters\Slime::description();
    }
}

Game::start();

?>