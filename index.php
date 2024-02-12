<?php
    class myclas {
        // Properties
        public $name;
        public $age;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function set_age($age) {
            $this->age = $age;
        }
        function get_age() {
            return $this->age;
        }

    }


        $person1 = new myclas();
        $person1->set_name('alvin');
        $person1->set_age(20);

        echo $name = "Name: " . $person1->get_name();
        echo "<br>";
        echo $age = "Age: " . $person1->get_age();

        echo "<br>";

        if ( $age < 21){
            echo "minor";
        }else{
            echo "You are Adult";
        }