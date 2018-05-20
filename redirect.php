<!--temporary page for redirect results-->
<?php

    require 'config.php';

    session_start();

    echo "Getting Responses! Please wait! ";
    echo "Malinda Chamal presents";

?>


<?php

  

  if(isset($_GET['code']))
  {
    //get Access token and store it inside $result variable
    $result = get_auth_code(518177288578918, "https://localhost/OAuth/redirect.php", $_GET['code'], "NTE4MTc3Mjg4NTc4OTE4OjhlZTVmMDI0ZTQwODEwZWQ1Nzg4ODhjNzQzZGM2NmI4");
    
    //jason array to fetch token
    $token_json = json_decode($result);
    

    //set cookie including access token
    if(!isset($_COOKIE['access_token']))
    {
      echo "cookie setting! Please Wait!";
      setcookie("access_token",$token_json->access_token,time()+3600,"/","localhost");
      echo '<script> window.location.assign("https://localhost/OAuth/server.php") </script>';
    }

    echo '<script> window.location.assign("https://localhost/OAuth/server.php") </script>';

    

    

    
  }



?>