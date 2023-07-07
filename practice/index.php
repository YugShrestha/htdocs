<?php

Class Database{

    private $server ='localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'login_form';

    private $table ='users';

    public function InsertSportTable($name,$password)
    {
      $conn= new mysqli(
        $this->server,
        $this->user,
        $this->pass,


        $this->dbname
      );

      if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);}
    
        
        $sql="INSERT INTO $this->table(name , password ) VALUES ('$name ','$password')";
        
        if ($conn->query($sql)===TRUE){
            echo"NEW record created sucessfully";}
            
        
        else{
            echo"ERROR".$sql."<br>".$conn->error;
        }
        $conn->close();
      }
      


    }
    $sport=new Database;
    $name= 'user';
    $password= 'pass';

    $sport->InsertSportTable($name,$password);

  


?>