<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Language" content="en-us" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>jQuery Example 3</title>
		
	<script type="text/javascript" language="javascript" src="Scripts/jquery-1.2.6.js"></script>
	<script type="text/javascript" language="javascript" src="Scripts/jquery.validate.js"></script>
	<script type="text/javascript" language="javascript">
$(function()
  {
    
   function validateDonotSelect(value,element,param)
    {
        if(value == param)
        {
          return false;
        }
        else
        {
            return true;
        }      
    }
    jQuery.validator.addMethod("do_not_select",validateDonotSelect,"Please select an option");
    
    $('#myform').validate(
      {
      rules: 
        { 
          color:
          {
            do_not_select:'sel'  
          }
        },
        messages:
        {
          color:
          {
            do_not_select:"Please select a Color"
          }
        }
      });    
  });
	</script>
		
	<style type="text/css">
body
{
  font-family: Arial, Sans-serif;
}
.error
{
color:red;
font-family:verdana, Helvetica;
}
	</style>
</head>

<body>
<form id="myform" action="#">
  

<p class='container'>
 <label for='color'> Color: </label> 
 <select class='productinfo' name='color' size='1'>
 <option value='sel' >Select</option>
 <option value='Red' >Red</option>
 <option value='Green' >Green</option>
 <option value='Blue' >Blue</option>
 </select>
</p>
  
<input type="submit" name="submit" value="Submit">
  
</form>
</body>
</html>
