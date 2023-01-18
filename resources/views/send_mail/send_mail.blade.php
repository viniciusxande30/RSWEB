<?php
//Variáveis

$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$mensagem = $_POST['msg'];
  
  $emailenviar = "comercial@rsweb.com.br";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= "Olá ". $_POST["name"] . " email: " . $_POST["email"] . $_POST["phone"] . ")<br><br>"."Mensagem para Você: " . $_POST["msg"];;
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $headers);
  if($enviaremail){
          echo "Enviado com Sucesso";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>