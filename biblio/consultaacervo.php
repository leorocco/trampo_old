<?php




echo"

<html>
	<head>
		<title>Biblioteca - IFSP/SLT</title>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<script src='js/bootstrap.min.js' type='text/javascript'></script>
		<script src='js/jquery-1.8.3.min.js' type='text/javascript'></script>
		<script src='js/bootstrap.js' type='text/javascript'></script>
		<script src='js/default.js' type='text/javascript'></script>
		<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
		<link href='biblio.css' type='text/css' rel='stylesheet'>
		<link href='css/bootstrap-responsive.min.css' rel='stylesheet' type='text/css'>
		<link href='css/default.css' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		
		
		<header>	
		<div id='msg'>
		<div id='nav'>
			<div class='navbar navbar-top'>
			  <div class='navbar-inner'>
				<div class='container-fluid'>
				  <a class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				  </a>
				  <a class='brand' href='#'>Biblioteca - IFSP/SLT</a>
				  <div class='nav-collapse collapse'>
					<ul class='nav'>
					  <li><a href='index.html'>Home</a></li>
					  <li class='active'><a href='consultaacervo.php'>Consulta ao Acervo</a></li>
					  <li><a href='#contact'>Hor&aacute;rio de Funcionamento</a></li>
					  <li><a href='#contact'>Regulamento</a></li>
					  <li><a href='#contact'>Contato</a></li>
					</ul>
				  </div><!--/.nav-collapse -->
				</div>
			  </div>
			</div>
		</div>
			
		
		
		
			<br><br>
		<h1>Seja bem-vindo a p&aacute;gina da biblioteca do IFSP/SLT</h1>
		<h2>Para consultar o acervo, clique no bot&atilde;o abaixo:</h2>
		<button class='btn btn-large btn-success' type='button' onclick='window.location = 'consultaacervo.php''>Consulta ao acervo</button>
		<br><br>
	</div>
	
	</header>
		<br>
		<div id='consulta'>
			<h1>Consulta ao acervo</h1>
			<br>
			<div id='alerta'>
				<div class='alert alert-success'>
				<b>Aten&ccedil;&atilde;o: </b>Essa base de dados &eacute; atualizada somente uma vez por dia.
				</div>
			</div>
			
		
	<h3>Busca por t&iacute;tulos</h3>
	<p>Obs.: O sistema &eacute; apenas para consulta. Para locar um livro ser&aacute; necess&aacuterio ir at&eacute; a biblioteca e efetuar a retirada.</p>
	<hr>
	</div>	
	
		<table class='table table-striped' id='livros_tb'>
		<thead>
				<tr>			
				 <input class='input-xxlarge' type='text' id='inputPesq' name='inputPesq' placeholder='Insira aqui o texto para pesquisa'>
				</tr>
		</thead>
		<tbody>
		<br>
		<tr>
			<td>#</td>
			<td>Titulo</td>
			<td>Situa&ccedil;&atilde;o</td>
		</tr>";
		
		
		//$conn = odbc_connect('DB','sltbib','90876');
		$conn = mysql_connect("localhost", "root", "sismba2011") or die (mysql_error());
		mysql_select_db("bibdb2");

if ($conn){
	
	$sql = "SELECT * FROM biblio ORDER BY tit";
	$sel = mysql_query($sql);
	$i = 1; 
	
		while($row = mysql_fetch_array($sel)){
			echo "<tr>
				<td>".$row['tmb']."</td>
				<td class='tit'>".$row['tit']."</td>
				<td>".$row['sit']."</td>
			</tr>
			";
			$i = $i+1;
		}
		
			mysql_close($conn);
}else{
	echo "<script>alert('Erro ao conectar no banco de dados!')</script>";
}
			
		echo "</tbody>
		</table>
		
		
					<br>
					<br>
					<br>
					<br>
  
					<div id='rodape'>  
						<div id='logo'>
						<img src='img/ifspsalto.png' alt='logo'>
						</div>
						<div id='rodtexto'>
							<address>
							  <strong>Instituto Federal de Educa&ccedil;&atilde;o, Ci&ecirc;ncia e Tecnologia de S&atilde;o Paulo - IFSP <em>campus</em> Salto</strong><br>
							  Rua Rio Branco, 1780 - Vila Teixeira<br>
							  Salto, SP - CEP 13320-271<br>
							  <a href='http://slt.ifsp.edu.br' target='_blank'>http://slt.ifsp.edu.br</a><br>
							  <abbr title='Telefone'>Fone:</abbr> (11) 4602-9191
							  | Fax: (11) 4602-9191							 
							</address>
							
							<address>
							  <strong>e-Mail:</strong><br>
							  <a href='mailto:#' target='_blank'>salto@ifsp.edu.br</a>
							</address>
						</div>
					</div><!-- /#rodape -->  
					
						
	</body>";

echo "</html>";

?>




