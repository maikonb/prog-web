<?php
   session_start();
   if( isset( $_SESSION['counter'] ) )
   {
      $_SESSION['counter'] += 1;
   }
   else
   {
      $_SESSION['counter'] = 1;
   }
   $msg = "Voce visitiou esse site ".  $_SESSION['counter'];
   $msg .= " vezes nesta sessao.";
?>
<html>
    <head>
        <title> Contador de visitas </title>
    </head>
<body>
    <?php  echo ( $msg ); ?>
</body>
</html>
