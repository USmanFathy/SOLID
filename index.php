<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

//srp
// use solid\srp\restaurant;
// use solid\srp\owner;
// use solid\srp\employee;
// use solid\srp\item ;

// $owner = new owner('usman ahmed' ,25,01553524657,'damietta','usmanahmedfathy@gmail.com');
// $employee1 = new employee('employee' ,28,12345678,'damietta','empolyee@gmail.com','chef');
// $employee3 = new employee('employee' ,28,12345678,'damietta','empolyee@gmail.com','cashier');
// $employee2 = new employee('employee' ,28,12345678,'damietta','empolyee@gmail.com','supervisor');
// $item1 = new item('beef burger' ,5,850.6);
// $item2 = new item('beef burger' ,4,650.6);
// $item3 = new item('beef burger' ,3,550.6);
// $restaurant = new restaurant($owner);
// $restaurant->setnumberoftables(50);
// $restaurant->setemployees($employee1);
// $restaurant->setemployees($employee2);
// $restaurant->setemployees($employee3);
// $restaurant->setmenu($item1);
// $restaurant->setmenu($item2);
// $restaurant->setmenu($item3);
// var_dump($restaurant);

//ocp

//use solid\ocp\client;
//use solid\ocp\buyingcash;
//use solid\ocp\buyingdebit;
//use solid\ocp\male;
//use solid\ocp\female;
//
//$female = new female('amira' ,'cairo',123456789 , new buyingcash());
//$male   = new male('usman' ,'damietta',225611,new buyingdebit());
//
//
//$client = new client($male , '300 meter');
//
//echo $client->buy();

//lsp

//use SOLID\LSP\LspViolationSubType;
//use SOLID\LSP\LspViolationType;
//use SOLID\LSP\LspViolation;
//
//$violation = new LspViolationSubType();
//$violationExample = new LspViolation();
//$violation->setSalary(500);
//
//echo $violationExample->calculateSalary($violation,16);
