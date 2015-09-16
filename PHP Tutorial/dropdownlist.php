<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 9/17/2015
 * Time: 12:37 AM
 */
/**
 * Dropdown List in HTML using PHP and Submit Onchange Event
 */

$selected = '';

function get_options($selected)
{
    $countries = array('Bangladesh' => 1, 'India' => 2, 'USA' => 3, 'China' => 4);
    $options = '';
    while (list($k, $v) = each($countries)) {
        if ($selected == $v) {
            $options .= '<option value="' . $v . '" selected >' . $k . '</option>';
        } else {
            $options .= '<option value="' . $v . '">' . $k . '</option>';
        }

    }
    return $options;
}
    if(isset($_POST['country']))
    {
        $selected = $_POST['country'];
        echo $selected;
    }
?>
<!DOCTYPE html>
<html>
<head><title>DropDown List</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <select name="country" onchange="this.form.submit();">
        <?php echo get_options($selected);?>
    </select>
</form>
</body>
</html>