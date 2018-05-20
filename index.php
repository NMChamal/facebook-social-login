<?php 
   require 'config.php';

   session_start();

      

?>


<!DOCTYPE html>
<html>
<head>
<title> Facebook Login </title>

<script type="text/javascript" src="config.js"> </script>

<style>

body {
    width:100px;
	height:100px;
  background: -webkit-linear-gradient(90deg, #158cdb 10%, #28cc6a 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #158cdb 10%, #28cc6a 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #158cdb 10%, #28cc6a 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #158cdb 10%, #28cc6a 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #158cdb 10%, #28cc6a 90%); /* W3C */
font-family: 'Raleway', sans-serif;
}



</style>




</head>
<body>






            <a href="<?php echo AUTH_URL("518177288578918","https%3A%2F%2Flocalhost%2FOAuth%2Fredirect.php"); ?>" onclick="return getCount();"><img src="fb.png" width="200" heigt="100"/></a><br/><br/>
            

            
                <form method="POST" action="server.php" >

                    <div><input type="hidden" id="csToken" name="CSR"/></div>

                </form>
            



<?php

?>


                





</body>
</html>