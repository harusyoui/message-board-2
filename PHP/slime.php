<?php

namespace TechAcademy\RPG\Characters;

require_once 'character.php';

class Slime extends Character {
    public static $type = 'スライム';

    public $suffix = '';

    function __construct($suffix){
        parent::__construct(10,3);
        $this->suffix = $suffix;
    }

    function name(){
        return parent::name().$this->suffix;
    }

    static function description(){
        print self::$type.'は最弱のモンスターだ！'.PHP_EOL;
    }
}

?>