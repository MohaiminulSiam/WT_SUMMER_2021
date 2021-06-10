<?php
// ©Name blank rakha jabena... name er length 4/5 character hobe must
// ©password 6/8 character hoite hobe
// ©comment box o minimum 15/20 character hote hobe
// ©checkbox minimum ekta mark kortei hobe
// ©radio button o choose kortei hobe
$result="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name               = $_POST['fname'];
    $email              = $_POST['email'];
    $password           = $_POST['password'];
    $comment            = $_POST['comment'];

    if(empty($name) || empty($email) || empty($password) || empty($_POST['hobby']) || empty($_POST['gender'])){
        echo "PLEASE INSERT ALL INFORMATION";
    }
    else{
        // EMAIL VERIFICATION
        $email_array = str_split($email);
        $emailCode = 0;
        foreach($email_array as $email_char){
            if($email_char >= 'a' || $email_char <= 'z' || $email_char == '@' || $email_char == '.'){
                $emailCode++;
            }
        }
        if($emailCode == strlen($email)){
            echo "Email : " . $email . "<br>";
        }

        // NAME VERIFICATION
        $validNameCode = 0;
        if(isset($name) && str_word_count($name) >= 5){
            $name_array = str_split($name);
            foreach($name_array as $name_char){
                if($name_char >= 'a' || $name_char <= 'z' || $name_char >= 'A' || $name_char <= 'Z' || $name_char == '-' || $name_char == '.'){
                    $valid++;
                }
            }
            if($valid == strlen($name)){
                echo "Name : " . $name . "<br>";
            }   
        }

        // PASSWORD VALIDATION
        $validPasswordCode = 0;
        if(strlen($password) >= 8){
            echo "Password : " . $password . "<br>";
        }

        // GENDER VALIDATION
        $validGenderCode = 0;
        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            echo "Gender : " . $_POST['gender'] . "<br>";
        }

        // HOBBY VALIDATION
        $validHobbyCode = 0;
        if(isset($_POST['hobby']) && !empty($_POST['hobby']) ){
            echo "Hobby : " . $_POST['hobby'] . "<br>";
        } 

        // COMMENT VALIDATION
        $validCommentCode = 0;
        if(isset($comment) || !empty($comment)){
            echo "Comment : " . $comment . "<br>";
        }

    }
}

?>