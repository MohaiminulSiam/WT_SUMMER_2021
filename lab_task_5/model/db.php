<?php
class db
{

    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "mydb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        return $conn;
    }

    function CheckUser($conn, $table, $username, $password)
    {
        $result = $conn->query("SELECT * FROM " . $table . " WHERE username='" . $username . "' AND password='" . $password . "'");
        return $result;
    }


    function AddProduct($conn, $table, $pname, $pdesc, $pcate, $pprice, $pimage)
    {
        $result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcate',$pprice,'$pimage')");
        return $result;
    }


    function ShowAll($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }

    function ShowSingle($conn, $table, $data)
    {
        $result = $conn->query("SELECT * FROM  $table WHERE id = '$data'");
        return $result;
    }

    function UpdateProduct($conn, $table, $data)
    {
        $sql = "UPDATE $table SET P_Name='" . $data['P_Name'] . "', P_Desc='" . $data['P_Desc'] . "', 
                P_Category='" . $data['P_Category'] . "',P_Price='" . $data['P_Price'] . "'P_Picture='" . $data['P_Picture'] . 
                " WHERE P_id='" . $data['P_id'] . "'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }


    function UpdateUser($conn, $table, $username, $firstname, $email, $gender, $dob)
    {
        $sql = "UPDATE $table SET firstname='$firstname', email='$email', gender='$gender',dob='$dob' WHERE username='$username'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function CloseCon($conn)
    {
        $conn->close();
    }
}
