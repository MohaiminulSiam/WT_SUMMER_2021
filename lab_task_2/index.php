<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDATION FORM</title>
</head>
<body>
    
    <form action="validation.php" method="post">
        Name            : <input type="text" name="fname"> <br>
        E-mail          : <input type="text" name="email"> <br>
        Password        : <input type="text" name="password"> <br>
        Comment        :  <textarea name="comment"></textarea> <br>
        <fieldset>
            <legend>Gender</legend>    
            <input name="gender" type="radio" value="Male">Male
            <input name="gender" type="radio" value="Female">Female
            <input name="gender" type="radio" value="Other">Other
        </fieldset>
        <fieldset>
            <legend>Select Hobby</legend>
            <input type="checkbox" name="hobby" value="Riding">Riding   
            <input type="checkbox" name="hobby" value="Drawing">Drawing 
            <input type="checkbox" name="hobby" value="Coding">Coding 
        </fieldset>
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>