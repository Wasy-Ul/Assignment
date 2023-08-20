<?php

        class Animal {
            public  function Sound() {
                echo "Sound";
            }
        }

        class Fox extends Animal {
            public function Sound() {
                echo "Fox Fox...<br>";
            }
        }

        class Cat extends Animal {
            public function Sound() {
                echo "Cat Cat...<br>";
            }
        }

        class Owl extends Animal {
            public function Sound() {
                echo "Owl Owl...<br>";
            }
        }
       
        $obj1 = new Fox();
        $obj2 = new Cat();
        $obj3 = new Owl();

        $obj1->Sound();
        $obj2->Sound();
        $obj3->Sound();        
?>