<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
  
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //echo $nome, $email, $assunto, $mensagem;

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Assunto: </b>$assunto</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  echo $arquivo;
  //Emails para quem será enviado o formulário
  $destino = "vinicios.tec22@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0 \n";
  $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
  $headers .= "From: $nome <$email">;

  //Enviar
  if(mail($destino, $assunto, $arquivo, $headers)){
    echo "email enviado com sucesso";
  }else{
    echo"falha no envio";
  }
  //mail($destino, $assunto, $arquivo, $headers);
  
  //echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
  
?>