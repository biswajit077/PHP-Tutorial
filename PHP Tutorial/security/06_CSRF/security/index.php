<?php
require 'app/bootstrap.php';

/**
 * CSRF (Cross-site Request Forgery)
 * if attacker know action file name and function name they show or link the any post request behind the request process
 * example attacker upload a file csrf.php front of the user display if youer load or event any action could be happened.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>
    <body>
        <form action="delete.php" method="post">
            <input type="submit" value="Delete my Account" />
            <!--  start protect of CSRF -->
            <input type="hidden" name="_token" value="<?php echo $_SESSION['_token'];?>" />
            <!-- end protect of CSRF  -->
        </form>
    </body>
</html>