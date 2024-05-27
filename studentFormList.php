<style>
    body{
        padding:10px;
        max-width: 700px;
        margin:auto;
    }
    *{
        margin:0;
        padding:0;
    }
    #results{
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:10px;
    }
    #student-card{
        margin-top:10px;
        border:1px solid #ccc;
        height:100%;
        border-radius:10px;
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
    }
    #student-card .data{
        padding:10px;
    }
    .flex{
        display: flex;
        justify-content:space-between;
    }
    
</style>
<?php
    $servername = 'localhost';
     $username = 'root';
     $password = '';
     $loading=true;
    $server_info=$_SERVER['PHP_SELF'];
    if($server_info=="/studentFormList.php"){
        try{
             //connecting server with mysql using mysqli class
             //handling exception $servername
           $connection=new mysqli($servername,$username,$password,'studentsinfo');
           if($connection->connect_error){
               die('Connection Failed!!!');
           }
           $sql = "SELECT id,fullname,age,gender,rollno,email FROM studentsinfo";
           $result = $connection->query($sql);
           $loading=false;
        }
        catch(e){
           echo "Error!!!";
        }
        finally{
           $loading=false;
        }
    }
   
   
?>
<div class="flex">
    <h2>Students</h2>
    <button onclick="window.location.href='/studentForm.php'">ADD NEW</button>
</div>
<div id="results">
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div id='student-card'>
                        <div class='data'>
                            <span class='name__text'>
                            " ."Name: ". $row['fullname'] ."
                            </span><br/>
                            <span class='name__text'>
                            " ."Age: ". $row['age'] . "<br/>" ."Gender:  ". $row['gender']."<br/>" ."RollNO:  ". $row['rollno'] . "<br/>". "Email: ". $row['email'] . "
                            </span>
                        </div>
                 </div>";
                }
            } else {
                
                    echo "0 results";
         }
    ?>
</div>