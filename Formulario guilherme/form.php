<?php
$Nome=$_POST["nome"];
$Endereco=$_POST["endereço"];
$Data=$_POST["data"];
$Email=$_POST ["email"];
$Sexo=$_POST["sexo"];

echo 'Nome: ' ($_POST["nome"] ?? ''); "<br>";
echo 'Endereço: ' ($_POST["endereço"] ?? ''); "<br>"
echo 'Sexo: ' ($_POST["sexo"] ?? '');  "<br>"
 
 if (Email ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio de E-Mail!</b>"; } 
 ;
 ;


?>
