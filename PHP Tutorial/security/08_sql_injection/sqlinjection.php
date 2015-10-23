<?php
    $db = new PDO('mysql:host=127.0.0.1; dbname=website', 'root', 'root');
    
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        
//         $user = $db->query("SELECT *FROM users WHERE email = '{$email}'");
        /**
         * Start Protected sqlinjection
         * if attacker do the form field input text typed ';DROP TABLE forum_topics;--
         * then inject database
         */
        $user = $db->prepare("SELECT * FROM users WHERE email = :email");
        $user->execute(['email' => $email]);
        /**
         * end Protected sqlinjection
         */
        if($user->rowCount()){
            die('Send Email');
        }
    }
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>Reset password</title>
    </head>
    <body>
        <form action="sqlinjection.php" method="post" autocomplete="off">
            <label for="email">Email Address</label>
            <input type="text" name="email" id="email" />
            <input type="submit" value="Recover" />
        </form>
    </body>
</html>