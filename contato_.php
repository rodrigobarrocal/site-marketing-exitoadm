<?
session_start(); //Inicializa a sessão
// *********  ATENCAO, ALTERE AS VARIAVEIS ABAIXO CONFORME SUA NECESSIDADE  ********
// E-mail de destino
$mf_mail = "spa@exitoadm.com.br";
// Assunto do email
$mf_assunto = "Contato - Site Êxito";
// modo de envio:  html ou texto
$mf_modo = "html";
// *********  NAO ALTERE O SCRIPT DAQUI PARA BAIXO *********************************

// verifica se tem a chave de envio:
if($_SESSION["synctoken"] != $_POST["token"]){
echo "Erro : Dados aceitos somente enviados pela página autorizada";
exit;
}



$mf_method=$_SERVER['REQUEST_METHOD'];
$mf_date=date ("d/m/Y");
$mf_time=date("H:i");
$mf_ip=$_SERVER['REMOTE_ADDR'];

if($_POST[Email] == ""){
$_POST[Email] = $mf_mail;
}


if($mf_method!="POST"){ // se o metodo nao for post, para tudo
	echo "Erro : Dados aceitos somente pelo metodo POST e enviados pela página autorizada";
	exit();
}else{


	if($mf_modo == "html"){
	$mf_body.="<HTML><body><p><font face=\"Arial, Helvetica, sans-serif\" size=\"2\" color=\"#424242\"><b>Dados do Formulário</font></p>";
	$mf_body.="<table width=\"100%\">";
	foreach ($_POST as $varname => $varvalue){
		if(!($varname=="Submit") AND !($varname=="token") AND !($varname=="imageField_x") AND !($varname=="imageField_y") ){
			$post[$varname] = $varvalue;
			$varname=explode("_",$varname) ;
			$i=0;
			while($varname[$i]){
				$splitvar.="$varname[$i] ";
				 $i++;
			}
			$mf_body.="<tr>";
			$mf_body.="<td bgcolor=\"#FAFAFA\" width=\"18%\" height=\"25\" color=\"#424242\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">$splitvar &nbsp;</font> </td>";
                                                $varvalue = nl2br($varvalue);
			$mf_body.="<td bgcolor=\"#EEEEEE\" width=\"82%\" height=\"25\" color=\"#424242\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">$varvalue &nbsp; </font></td> </tr>";
			unset($splitvar);
         }
	}
			//data
			$mf_body.="<tr><td bgcolor=\"#FAFAFA\" width=\"18%\" height=\"25\" color=\"#424242\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> Data &nbsp; </font> </td>";
			$mf_body.="<td bgcolor=\"#EEEEEE\" width=\"82%\" height=\"25\" color=\"#424242\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> $mf_date , $mf_time</font></td> </tr>";

			//IP
			//$mf_body.="<tr><td bgcolor=\"#FAFAFA\" width=\"18%\" height=\"25\" color=\"#424242\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> Endereço IP &nbsp; </font> </td>";
			//$mf_body.="<td bgcolor=\"#EEEEEE\" width=\"82%\" height=\"25\" color=\"#424242\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> $mf_ip </font></td> </tr>";

			$mf_body.="</table></body></html>";

		$mf_headers  = "MIME-Version: 1.0\n";
		$mf_headers .= "Content-type: text/html; charset=iso-8859-1\n";
	} // end if mf_modo = "html"



	if($mf_modo == "texto"){
	$mf_body.="Dados do Formulário\r";
	$mf_body.="------------------------------------\r";
	foreach ($_POST as $varname => $varvalue){
		if(!($varname=="Submit")){
			$post[$varname] = $varvalue;
			$varname=explode("_",$varname) ;
			$i=0;
			while($varname[$i]){
				$splitvar.="$varname[$i] ";
				 $i++;
			}
			$mf_body.="$splitvar: $varvalue\r";
			unset($splitvar);
         }
	}

	$mf_body.="Data: $mf_date , $mf_time\r";
	$mf_body.="Endereço: $mf_ip\r";



	} // end if mf_modo = "texto"


// envia o e-mail:
$mf_headers .= "From: $_POST[Email]\n";
$mf_headers .= "Reply-To: $_POST[Email]\n";
$mf_envio = mail($mf_mail, $mf_assunto, $mf_body, $mf_headers);

if($mf_envio){
	echo "<script>alert('Mensagem enviada!')</script>";
	echo "<script>window.location.href='$_SERVER[HTTP_REFERER]'</script>";
	exit;
}else{
	echo "<script>alert('Erro no envio!')</script>";
	echo "<script>window.location.href='$_SERVER[HTTP_REFERER]'</script>";
	exit();
}


} // end method == POST
?>
