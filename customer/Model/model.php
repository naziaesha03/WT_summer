<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="bookshop";

        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    function InsertData($fname, $gender, $email, $address, $pass, $tablename, $conn)
    {
        $sqlstr="INSERT INTO $tablename (fname, gender, mail, adres, pass) 
        VALUES ('$fname','$gender','$email','$address','$pass')";
        if($conn->query($sqlstr)===TRUE)
        {
            header("location: ../../Login/View/buyerlogin.php");
        }
        else
        {
            echo "Insertation failed ".$conn->error;
        }
    }
    function CheckUser($email,$pass,$tablename,$conn)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE mail='$email' AND pass='$pass'");
        return $result;
    }
    function closecon($conn)
    {
        $conn->close();
    }
}
?>