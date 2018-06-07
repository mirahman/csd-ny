<?php

Class MyParent 
{

    public function __construct()
    {

    }

    public function showMeSomething()
    {
        echo "Show me Something - Parent";
    }

}

Class MyChild extends MyParent 
{
    public function __construct()
    {

    }

    public function showMeSomething()
    {
        parent::showMeSomething();
        echo "Show me Something - child";
    }

}

$obj = new MyChild;
$obj->showMeSomething();