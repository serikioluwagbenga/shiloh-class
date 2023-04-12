<?php 

    trait Database {

    }
    trait Payment {

    }
    class students {
        use Database, Payment;
        public $fullname;    
        public $class;
        public $age;
        const private_key_payment = "dkdkdkdk";
       function __construct($fullname, $class, $age) {
        // How to access and modify normal property
        $this->fullname = $fullname;
        $this->class = $class;
        $this->age = $age;
        // how to constant propertices
        self::private_key_payment;
       }

       public function pay_school_fess(){

       }

    //    this is an example of static function
       static public function set_age(){
            echo "this is a static method/function";
       }

       function __destruct() {
        // $this->private_key_payment = null;
       }       
    }

    class teacher extends students {
        public $subject;
        public $attendance;
        public $position;
        
    }

    // $g = new students("seriki gbenga", "jss 3", "20");
    // echo $g->fullname;
    // echo $g->age;
    
    // this is how to call a static method 
    students::set_age();

    // static function or property allows u to call a function/method 
    // or property without initialzing the object.
