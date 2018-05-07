<?php

//start session - server
session_start();

//create key for CSRF token
if(empty($_SESSION['key']))
{
    $_SESSION['key']=bin2hex(random_bytes(32));
    
}

//generate CSRF token
$token = hash_hmac('sha256',"This is token:cli.php",$_SESSION['key']);

$_SESSION['CSRF'] = $token; //store CSRF token in session variable

ob_start(); // start of outer buffer function

echo $token;


if(isset($_POST['sbmt']))
{
    ob_end_clean(); //clean previous displayed echoed  --End of Outer Buffer--
    
    //validate the logins
    loginvalidate($_POST['CSR'],$_COOKIE['session_id'],$_POST['user_name'],$_POST['user_pswd']);

}


//function to validate Login
function loginvalidate($user_CSRF,$user_sessionID, $username, $password)
{
    if($username=="admin" && $password=="12345" && $user_sessionID==session_id()  &&    $user_CSRF==$_SESSION['CSRF'])
    {
        echo "<script> alert('Login Sucess') </script>"; 
        echo "Welcome Admin"."<br/>"; 
        // need blog and github link
        apc_delete('CSRF_token');
    }
    else
    {
        header('Location: redirect.php');   
    }
}


?>
