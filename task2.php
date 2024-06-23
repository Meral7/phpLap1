<?php
// constant($SERVER_NAME );
// constant($SERVER_ADDR );
// constant($SERVER_PORT );
define('path' ,$_SERVER['PATH']);
define('SCRIPT_NAME' ,$_SERVER['SCRIPT_NAME'] );

 echo (SCRIPT_NAME);
 echo ("<br>");
echo (path);

?>