<?php
    /* ------- Object Oriented Programming ------- */

    /*
        From PHP5 onwards you can write PHP in either a procedural
        or object oriented way. OOP consists of classes that can
        hold "properties" and "methods". Objects can be created
        from classes.
    */
     class User {
        // Propertites are attributes that belong to a class

        // Access Modifiers: public, private, protected
        // public - can be accessed from anywhere
        // private - can only be accessed from inside the class
        // protected - can only be accessed from inside the class and by inheriting classes
        public $name;
        public $email;
        public $password;

        // A constructor is a method that runs when a object is created

        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        // Method is a function that belong to a class
        // setter
        function set_name($name) {
            $this->name = $name;
        }

        // getter
        function get_name() {
            return $this->name;
        }
     }

     // Instatiate a user object
    //  $user1 = new User();
    //  $user2 = new User();

    //  $user1->set_name('Tito');
    //  $user2->set_name('Muto');

    //  echo $user1->get_name();
    //  echo $user2->get_name();

    //  $user1->name = 'Tito'; it works when the modifier is set to public

    //  var_dump($user1);
    //  var_dump($user2);

    // $user1 = new User('Tito', 'tito@gmail.com', '123');
    // $user2 = new User('Muto', 'muto@gmail.com', '143');

    // echo $user1->email;
    // echo $user2->name;

    // Inheritence
    class Employee extends User {
        public function __construct($name, $email, $password, $title)
        {
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }

        public function get_title() {
            return $this->title;
        }
    }

    $employee1 = new Employee('Sara', 'sara@gmail.com', '1eewew', 'Manager');

    echo $employee1->get_title();