<?php

session_start();

//echo $_SESSION['autenticado'];

if (!isset($_SESSION['autenticado']) OR $_SESSION['autenticado'] !='SIM'){
  header ('Loction: index.php?login=erro2');
}

?>