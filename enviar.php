<?php


$name=$_POST['name'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$msg=$_POST['msg'];
$data_envio=date('d/m/Y');
$hora_envio=date('H:i:s');

//variáveis
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

//Estamos utilizando o namespace pra poder acessar a pasta (o name espace do aqruivo phpMailer é PHPMAILER\PHPMAILER)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail= new PHPMailer(true);
//O true habilita o modo debug então conseguimos ver os logs de emails
//para capturar erro
try{
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	//para autenticar (o gmail obriga a autenticação e estamos falando q utilizaremos o protocolo smtp
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	//modo smpt auth - cliente habilitado:
	$mail->SMPTAuth='true';
	$mail->Username='fefeelimelek@gmail.com';
	$mail->Password='6hjw454d';
	$mail->Port = 587;

	$mail->setFrom('$email');
	$mail->addAdress('fefeelimelek@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = '$assunto';
	$mail->Body = '$msg';
	
	if($mail->send()){
		echo 'Email enviado com sucesso';
	}
	else{
		echo 'Email não enviado';
	}	

} catch(Exception $e){
	echo "Erro ao enviar: {$mail->ErrorInfo}";
}

//header('location: ../../index.php?i=contato');


//corpo do e-mail
$arquivo= "
	<html>
		<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
			<tr>
				<td>
					<tr>
						<td width='500'> Nome: &name</td>
					</tr>
					<tr>
						<td width='500'> E-mail: &email</td>
					</tr>
					<tr>
						<td width='500'> Assunto: &assunto</td>
					</tr>
					<tr>
						<td width='500'> Mensagem: &msg</td>
					</tr>
				</td>
			</tr>
			<tr> 
				<td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
			</tr>
		</table>
	</html>
";
//enviar

//email para o qual a msg será enviada
$emailenviar='fernanda.elimelek@usp.br';
$destino=$emailenviar;
$assunto=$assunto ."- Contato pelo site";

//indicamos o formato do email como html
$headers='MIME-version: 1.0' ."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .='From: &name <$email>';

/*$enviaremail=mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
	echo("EMAIL ENVIADO COM SUCESSO! <br>O link será enviado para o email indicado no formulário");
	//atualiza a página com 10 segundos de delay
	echo "<meta http-equiv='refresh' content='10;URL=contato.php'>";
} else{
	echo("ERRO AO ENVIAR EMAIL");
	echo"";
}*/
?>