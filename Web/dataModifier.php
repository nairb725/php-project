<?php

class dataBasePDO {

    private $userdb;
    private $user;
    private $pass;

    function __construct(string $user, string $pass, string $host, string $dbname) {
        $userdb = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
        $this->userdb = $userdb;
    }
    
    function request(string $SQLrequest) {
        $userdb = $this->userdb;
        $stmt = $userdb->prepare(':request');
        $stmt->bindParam(':request', $SQLrequest);
        $stmt->execute();
    }

//     public function addData($array, string $table) {
//         $userdb = $this->userdb;
//         $userVariable = implode(',', array_keys($array));
//         $userValue = implode(',', array_values($array));
//         $request = $userdb->prepare ("INSERT INTO {$table} (:variable) VALUES (:value)");
//         $request->bindParam(':variable',$userVariable); 
//         $request->bindParam(':value', $userValue);
//         $request->execute();
//     }

//     public function removeData($line, string $table) {
//         $userdb = $this->userdb;
//         $request = $userdb->prepare ("DELETE FROM {$table} WHERE :line"); 
//         $request->bindParam(':line', $line);
//         $request->execute();
//     }

//     public function updateData($column, $value, $line, string $table) {
        
//         $userdb = $this->userdb;
//         $request = $userdb->prepare ("UPDATE {$table} SET :column = :value WHERE :line");
//         $request->bindParam(':line', $line);
//         $request->bindParam(':column', $column); 
//         $request->bindParam(':value', $value);
//         $request->execute();
//     }

 }






?> 