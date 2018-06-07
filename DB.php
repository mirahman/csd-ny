<?php

Class DB {

    public $dbtype;
    public static $instance;

    private function __construct() {
        $this->dbtype = "mysql";
    }

    static function getInstance()
    {
        if(self::$instance == null) {
            self::$instance = new DB;
        }
        return self::$instance;
    }

    private function __clone() {

    }

    private function __sleep(){

    }

    private function __wakeup() {

    }

    public function query() {

    }

}



    
echo "<br> using instance version </br>";

/*
for($i = 0;$i<10;$i++){
    $obj1 = DB::getInstance();
    var_dump($obj1);
}


$obj1->query("select * from employees");

for($i = 0;$i<10;$i++){
    $db{$i} = new DB;
    var_dump($db{$i});
}
*/

$obj1 = DB::getInstance();
var_dump($obj1);


$obj2 = clone $obj1;
var_dump($obj2);
