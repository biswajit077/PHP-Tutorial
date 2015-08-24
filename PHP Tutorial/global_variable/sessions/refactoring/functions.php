<?php
function is_logged_in()
{
	return isset($_SESSION['UserName']);
}

function validate_user_credential($username, $password)
{
	return ($username === USERNAME && $password === PASSWORD);
}