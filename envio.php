<?php


$para      = 'mejora.continua@d-sso.pe';
$titulo    = $_POST['subject'];
$mensaje   = $_POST['message'];
$cabeceras = 'From: '. $_POST['email'] . "\r\n" .
    'Reply-To: mejora.continua@d-sso.pe' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($para, $titulo, $mensaje, $cabeceras)){
  echo 1;
}else{
  echo 2;
}

?>
