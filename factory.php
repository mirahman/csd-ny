<?php


Class TechEmployee {

    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
}


Class Student {

    public function __construct()
    {

    }

}

Class Factory 
{

    static function create($name, $firstName, $lastName, $age) {

        if($name == "employee") {
            return new TechEmployee($firstName, $lastName, $age);
        }

    }

}



Class ImportEmployee
{

    function doImport() {
        for($i = 0;$i<100;$i++) {
            $employee[$i] =  Factory::create('employee', 'abc','def','10');
        }

    }

}
