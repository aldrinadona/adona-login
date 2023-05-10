<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="container">
            <div class="form-group">
                <span>
                    <ul>
                        <li>Atleast 8 characters</li>
                        <li>Must not exceed 15 characters</li>
                        <li>Atleast 1 number</li>
                        <li>Atleast 1 uppercase </li>
                    </ul>
                </span>
                <div>
                    <input type="password" name="pass" placeholder="Enter your password">
                    <input type="submit" value="submit">
                </div>
            </div>
        </div>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $pass = $_POST["pass"];

            if((strlen($pass) >= 8 && strlen($pass) <= 15) && (preg_match('/[A-Z]/', $pass) && preg_match('/[0-9]/', $pass))){
                echo"<p>$pass is a Valid hole.</p>";
            }
            else{
                echo"<p>$pass is Invalid hole.</p>";
            }
            if(strlen($pass) < 8){
                echo"<p>Atleast 8 characters</p>";
            }
            if(strlen($pass) > 15){
                echo"<p>Must not exceed 15 characters</p>";
            }
            if(preg_match('/[A-Z]/', $pass) == false){
                echo"<p>Atleast 1 Uppercase</p>";
            }
            if(preg_match('/[0-9]/', $pass) == false){
                echo"<p>Atleast 1 number</p>";
            }
        }
    ?>
</body>
</html>