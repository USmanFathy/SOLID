<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

//srp
 use SOLID\SRP\Restaurant;
 use SOLID\SRP\Owner;
 use SOLID\SRP\Employee;
 use SOLID\SRP\Item ;

 $owner = new Owner('usman ahmed' ,25,01553524657,'damietta','usmanahmedfathy@gmail.com');
 $employee1 = new Employee('employee' ,28,12345678,'damietta','empolyee@gmail.com','chef');
 $employee3 = new Employee('employee' ,28,12345678,'damietta','empolyee@gmail.com','cashier');
 $employee2 = new Employee('employee' ,28,12345678,'damietta','empolyee@gmail.com','supervisor');
 $item1 = new Item('beef burger' ,5,850.6);
 $item2 = new Item('beef burger' ,4,650.6);
 $item3 = new Item('beef burger' ,3,550.6);
 $restaurant = new Restaurant($owner);
 $restaurant->setNumberOftables(50);
 $restaurant->setemployees([$employee1,$employee2,$employee3]);
 $restaurant->setmenu([$item1]);
 var_dump($restaurant);

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

//use SOLID\LSP\EncryptSubType;
//
//$encrypt = new EncryptSubType();
//$encrypt->setString('usman');
//
//echo $encrypt->encrypt();