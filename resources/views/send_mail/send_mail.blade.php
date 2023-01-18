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
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  echo "Olá " . $_POST["name"] . " email: " . $_POST["email"] . $_POST["phone"] . ")<br><br>";
  echo "Sua mensagem: " . $_POST["msg"];
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>