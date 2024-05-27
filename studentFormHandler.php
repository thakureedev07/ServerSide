<?php 
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email']; 
    //mysql connectivity credentials
    $servername='localhost';
    $username = 'root';
    $password = '';
    //connecting server with mysql using mysqli class
    $connection=new mysqli('localhost',$username,$password);
    if($connection->connect_error){
        die('Connection Failed!!!');
    }
    // echo 'Connected successfully' . '<br/>';
    //query to create a new db 
    $sql = 'CREATE DATABASE IF NOT EXISTS studentsinfo';
    //actual connection starts here
    if($connection->query($sql) == true){
        echo "DATABASE CREATED SUCCESSFULLY!!";
    }
    else{
        echo "FAILED TO CREATE DATABASE!!";
    }
    //mysql config to create table
    $connection1 = new mysqli($servername, $username, $password,"studentsinfo" );//students is db 
    //creating new table inside a db
    $table_sql = "CREATE TABLE IF NOT EXISTS studentsinfo (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(30) NOT NULL,
        age INT(6) NOT NULL,
        gender VARCHAR(10),
        rollno INT(10),
        email VARCHAR(20)
        )";
    if($connection1->query($table_sql) == true){
        $addition_sql=" INSERT INTO studentsinfo (fullname,age,gender,rollno,email) VALUES ('$fullname','$age','$gender','$rollno','$email')";
        
        $myfile = fopen("./student.txt", "r") or die("Unable to open file!");

        $prev=fread($myfile,filesize("./student.txt"));

        $myfile = fopen("./student.txt", "w") or die("Unable to open file!");

        $newText=$prev.'<br/>'.$fullname.' '.$age.' '.$gender.' '.$rollno.' '.$email;

        fwrite($myfile,$newText);

        if($connection1->query($addition_sql) == true){
            header("Location: /studentFormList.php");
        }
        else{
            echo "FAILED TO ADD VALUES TO  TABLE!!";
        }
    }
    else{
        echo "FAILED TO CREATE TABLE!!";
    }

   
?>