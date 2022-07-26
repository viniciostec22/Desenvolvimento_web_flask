<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DIF - distrito irrigação formoso</title>
    </head>
    <body>
        <?php
         $nome = $_POST [ 'nome' ];
         $email = $_POST [ 'email' ];
         $assunto = $_POST [ 'assunto' ];
         $mensagem = $_POST [ 'mensagem' ];
         $data_envio = date( 'd/m/Y' );
         $hora_envio = date( 'H:i:s' );

         $arquivo = "
            <html>
              <p><b>Nome: </b> $nome </p>
              <p><b>E-mail: </b> $email </p>
              <p><b>Assunto: </b> $assunto </p>
              <p><b>Mensagem: </b> $mensagem </p>
              <p>Este e-mail foi enviado em <b> $data_envio </b> às <b> $hora_envio </b></p>
            </html>
          ";
          //echo $arquivo;
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        require './lib/vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {
 

            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.office365.com';             //  smtp host 
            $mail->SMTPAuth = true;
            $mail->Username = 'vinicios471matheus@outlook.com';   //  sender username 
            $mail->Password = '#D3us 3 B0m;';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls 
            $mail->Port = 587;                          // port - 587/465RT 
            $mail->setFrom('vinicios471matheus@outlook.com');
            $mail->FromName = "E-mail enviado pelo site"; // Seu nome 

            $mail->addAddress('vinicios471matheus@outlook.com'); 
            
            $mail->isHTML(true);                                
            $mail->Subject = $assunto;
            $mail->Body = $arquivo;
           // $mail->AltBody = "Olá Cesar, Sua solicitação sobre o curso de PHP Developer.\nTexto da segunda linha.";

            $mail->send();
            
            echo 'E-mail enviado com sucesso!<br>';
            echo "<meta http-equiv='refresh' content='3;URL=../index.html'>";
        } catch (Exception $e) {
            echo "Erro: E-mail não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
            //echo "Erro: E-mail não enviado com sucesso.<br>";
        }
        ?>
    </body>
</html>
