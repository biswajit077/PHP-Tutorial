<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Language" content="en-us" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>jQuery Example 3</title>
		
	<script type="text/javascript" language="javascript" src="Scripts/jquery-1.2.6.js"></script>
	<script type="text/javascript" language="javascript" src="Scripts/jquery.validate.js"></script>
	<script type="text/javascript" language="javascript">
        jQuery.validator.addMethod("postalDE",function(value,element,param)
{
  if(this.optional(element))
    {//This is not a 'required' element and the input is empty
      return true;
    }
  if(/^[0-9]{5}$/.test(value))
    {
      return true;
    }
    return false;
},"Please enter a valid German Postal code");

$(function()
  {
    $('#myform').validate(
      {
      rules:
        { 
          postal:{ required:true, postalDE:true }
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
  
 <p>
   <label for='postal'> Postal Code: </label><input type='text' name='postal' />
  </p>
  
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
