<?php


//para executar o script automaticamente, seguir passos do seguinte tutorial:
//http://www.vivaolinux.com.br/dica/Agendando-execucao-de-scripts-PHP
//se ainda assim tiver duvidas, enviar e-mail para leeo.rocco@gmail.com

$conn = odbc_connect('DB','sltbib','XXXXXXXXXXX');

$conectabd = mysql_connect("localhost", "root", "sismba2011") or die (mysql_error());
mysql_select_db("bibdb2");

mysql_query('TRUNCATE TABLE biblio') or die(mysql_error());

if ($conn){
	
	$sql = "SELECT DISTINCT OB_TITULO, VSA_SITUACAO, VSA_QUEM, MV_TOMBO FROM BIBLIOT.V_SIT_ATUAL ORDER BY MV_TOMBO";
	$sel = odbc_exec($conn, $sql);	
		
		while($row = odbc_fetch_array($sel)){
			$msql = "INSERT INTO biblio (tmb , tit, sit) VALUES ('" . $row['MV_TOMBO'] . "', '" . $row['OB_TITULO'] . "','" . $row['VSA_SITUACAO'] . "') ";
			mysql_query($msql) or die("Error! " . mysql_error());
		}
			$data = date('d/m/Y - h:i');
			mysql_query("INSERT INTO `atualizacoes`(`update`) VALUES ('atualizado em ".$data."')");
			odbc_close($conn);
}

?>
