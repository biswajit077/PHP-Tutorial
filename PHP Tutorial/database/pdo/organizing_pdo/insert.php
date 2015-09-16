// <?php 
// require 'functions.php';
// $conn = connect($config);
// if ($conn)
// {
//     $users = get('users',$conn);
// }
// else 
// {
//     die("Could not connect to the db.");
// }
// ?>
<!DOCTYPE html>
<html>
    <head><title></title></head>
    <body>
    <form action="insert.php" method="post">
        <label for="name">Name</label><br/>
        <input type="text" id="name" name="name" /><br/><br/>
        <label for="dob">Date of Birth</label><br/>
        <input type="date" id="dob" name="dob" />
        <input type="submit" value="Submit" name="submit" /> 
    </form>
    </body>
</html>