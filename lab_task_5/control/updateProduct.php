<?php
include('../model/db.php');


$error = "";
$data  = null;
if (isset($_POST['update'])) {	
    if (empty($_POST['P_Name']) || empty($_POST['P_Desc']) || empty($_POST['P_Category']) || 
        empty($_POST['P_Price']) || empty($_POST['P_id'])) {
        
            $error = "input given is invalid";
    } 
    else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $data = array(
            "P_id"          => $_POST['P_id'],
            "P_Name"        => $_POST['P_Name'],
            "P_Desc"        => $_POST['P_Desc'],
            "P_Category"    => $_POST['P_Category'],
            "P_Price"       => $_POST['P_Price'],
            "P_Picture"     => $_FILES["P_Picture"]['name'],
        );
        $userQuery = $connection->UpdateProduct($conobj, "product", $data);
        var_dump($data);
        if ($userQuery == TRUE) {
            $imageLocation="../files/". $_FILES["P_Picture"]["name"];
            if (move_uploaded_file($_FILES["P_Picture"]["tmp_name"], $imageLocation)) {
                echo "file uploaded.<br>";
            } else {
                echo "Sorry, data was not uploaded.";
            }
            echo "update successful";
        } else {
            echo "could not update";
        }
        $connection->CloseCon($conobj);
        // header('location: ../view/pageone.php');
    }
    
}
