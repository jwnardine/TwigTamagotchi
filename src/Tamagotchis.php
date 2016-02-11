<?php
class Tama
{
    private $tamagotchiName;
    private $tamagotchiFood;
    //private $tamagotchiPlay;
    //private $tamagotchiSleep;


    function __construct($name, $food=100)
        {
            $this->name = $name;
            $this->food = $food;
            // $this->play = $play;
            // $this->sleep = $sleep
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function setFood($new_food)
        {
            $this->food = (string) $new_food;
        }

        // function setPlay($new_play)
        // {
        //     $this->play = (string) $new_play;
        // }
        //
        // function setSleep($new_sleep)
        // {
        //     $this->sleep = (string) $new_sleep;
        // }

        function getName()
        {
            return $this->name;
        }

        function getFood()
        {
            return $this->food;
        }

        // function getPlay()
        // {
        //     return $this->play;
        // }
        //
        // function getSleep()
        // {
        //     return $this->sleep;
        // }

        // function feedTamagotchi() {
        //   return $this->getFood() + 10;
        // }


        function save()
        {
        array_push($_SESSION['list_of_tamagotchis'], $this);
        }

        static function getAll()
        {
        return $_SESSION['list_of_tamagotchis'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_tamagotchis'] = array();
        }
    }
    ?>
