<?php
session_start();
header('Content-Type: application/json');




//Function to check if the request is an AJAX request
function is_ajax() {

	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}



if (is_ajax()) {

	if($_SESSION["synctoken"] != $_POST["token"]){

		notallowed();
	}else{

		contactSend();
	}

}
function contactSend(){
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$mensagem = $_POST["mensagem"];
	$body = <<<EOF
	Nome.........: $nome
	Email........: $email
	Telefone.....: $telefone
	Mensagem.....: $mensagem
EOF;
	$subject = "Contato via Site";
	// echo json_encode($body);
	sendmail($body, $subject);
}

function sendmail($body, $subject){
	$headers = "From: $_POST[email]\r\n";
	$headers .= "Bcc: barrocal.rodrigo@gmail.com" . "\r\n";
	$headers .= 'Reply-To: '. $_POST["email"] . "\r\n";
	$headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
	$to = "spa@exitoadm.com.br";

	// $body = wordwrap($body, 70);
	$send = mail($to,$subject,$body,$headers);
	if($send){
		$data = array('message' => 'Mensagem Enviada', 'code' => 0, 'send' => $send);
	}else{
		$data = array('message' => 'Erro ao envia sua mensagem, desculpe, entre em contato pelo telefone', 'code' => 1, 'send' => $send);
	}
	$result = array('result' => $data);
	echo json_encode($result);
}
function notallowed(){
	$data = array('message' => "Not Allowed", 'code' => 1);
	$result = array('result' => $data);
	echo json_encode($result);
}
?>