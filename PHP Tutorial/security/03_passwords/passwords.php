<?php
/**
 * Using md5()
 * Calculate the md5 hash of a string
 * string md5 ( string $str [, bool $raw_output = false ] )
 * raw_output
 * If the optional raw_output is set to TRUE, then the md5 digest is instead returned in raw binary format with a length of 16.
 * Returns the hash as a 32-character hexadecimal number.
 */
echo "MD5 Hash Password\n";
echo md5("hello");
echo md5("hello", true );
echo md5("hello", false);

//Verify password
$storePassword = '5d41402abc4b2a76b9719d911017c592'; //from database
$submittedPassword = 'hello';
if(md5($submittedPassword) == $storePassword){/*return true;*/ }else {/*return false;*/}

/**
 * Using Hash()
 * Generate a hash value (message digest)
 * string hash ( string $algo , string $data [, bool $raw_output = false ] )
 * algo - Name of selected hashing algorithm (e.g. "md5", "sha256", "haval160,4","ripemd160", etc..)
 * data - Message to be hashed.
 * raw_output - When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.
 */
 echo "\nHash Password\n";
$hashed_password = hash('ripemd160', 'mypassword');
$submittedPassword = hash('ripemd160', 'mypassword');
if($submittedPassword === $hashed_password){$result = true;}else {$result = false;}
var_dump( $result);

/**
 * Using sha1()
 * Calculate the sha1 hash of a string
 * string sha1 ( string $str [, bool $raw_output = false ] )
 * raw_output - If the optional raw_output is set to TRUE, then the sha1 digest is instead returned in raw binary format with a length of 20, otherwise the returned value is a 40-character hexadecimal number.
 */
echo "\nSha1 Hash Password\n";
$str = 'apple';

if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
    echo "Would you like a green or red apple?";
}

/**
 * Using crypt() no longer use
 * string crypt ( string $str [, string $salt ] )
 * crypt() will return a hashed string using the standard Unix DES-based algorithm or alternative algorithms that may be available on the system.
 * The salt parameter is optional. However, crypt() creates a weak password without the salt. PHP 5.6 or later raise an E_NOTICE error without it. Make sure to specify a strong enough salt for better security.
 * salts - CRYPT_STD_DES, CRYPT_EXT_DES , CRYPT_MD5, CRYPT_BLOWFISH , CRYPT_SHA256 , CRYPT_SHA512 
 */
echo "\nCrypto Hash Password\n";
$password = 'mypassword';

// Get the hash, letting the salt be automatically generated
$hashed_password = crypt($password);
echo $hashed_password;
$user_input = 'mypassword';
// if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
//     echo "Password verified!";
// }

$expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$incorrect = crypt('apple',  '$2a$07$usesomesillystringforsalt$');

/**
 * Using password_hash() - The best process for hashing
 * string password_hash ( string $password , integer $algo [, array $options ] )
 * The following algorithms are currently supported:
 * PASSWORD_DEFAULT - Use the bcrypt algorithm (default as of PHP 5.5.0). Note that this constant is designed to change over time as new and stronger algorithms are added to PHP. For that reason, the length of the result from using this identifier can change over time. Therefore, it is recommended to store the result in a database column that can expand beyond 60 characters (255 characters would be a good choice).
 * PASSWORD_BCRYPT - Use the CRYPT_BLOWFISH algorithm to create the hash. This will produce a standard crypt() compatible hash using the "$2y$" identifier. The result will always be a 60 character string, or FALSE on failure. 
 * Supported Options:
 * salt - to manually provide a salt to use when hashing the password. Note that this will override and prevent a salt from being automatically generated.
 * cost - which denotes the algorithmic cost that should be used. Examples of these values can be found on the crypt() page.
 */
 echo "\npassword_hash Hash Password\n";
 echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n";
 
 $options = [
         'cost' => 12,
 ];
 echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."\n";
 
 $options = [
         'cost' => 11,
         'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
 ];
 echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."\n";
 
 /**
  * Verify password
  */
 // See the password_hash() example to see where this came from.
 $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
 
 if (password_verify('rasmuslerdorf', $hash)) {
     echo 'Password is valid!';
 } else {
     echo 'Invalid password.';
 }
 
 //The hash_equals() function should be used to mitigate timing attacks; for instance, when testing crypt() password hashes.
 $expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
 $correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
 $incorrect = crypt('apple',  '$2a$07$usesomesillystringforsalt$');
 
 var_dump(hash_equals($expected, $correct));
 var_dump(hash_equals($expected, $incorrect));