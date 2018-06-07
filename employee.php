<?php

interface Employee
{

    function createEmployee();
}

interface EmployeeAccount
{
    function createSalaryAccount();
}

Class FullTimeEmployee implements Employee, EmployeeAccount
{
    function createEmployee()
    {

    }
    
    function createSalaryAccount()
    {

    }
}

Class PartimeEmployee implements Employee
{
    function createEmployee()
    {

    }
    
}