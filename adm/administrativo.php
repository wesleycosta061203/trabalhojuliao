<?php
	session_start();
	include_once("seguranca.php");
	include_once("conexao/conexao.php");
	seguranca_adm();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="imagens/favicon.ico">

		<title>Administrativo</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
	</head>

	<body role="document">
	
		<?php include_once("administrativo/menu_adm.php"); 			
			
			$pag[1] = "administrativo/adm_home.php";
			$pag[2] = "administrativo/listar/adm_listar_usuario.php";
			$pag[3] = "administrativo/cadastro/adm_cad_usuario.php";
			$pag[4] = "administrativo/editar/adm_editar_usuario.php";
			$pag[5] = "administrativo/visualizar/adm_visual_usuario.php";
			$pag[6] = "administrativo/listar/adm_listar_nivel_acesso.php";
			$pag[7] = "administrativo/cadastro/adm_cad_nivel_acesso.php";			
			$pag[8] = "administrativo/editar/adm_editar_nivel_acesso.php";
			$pag[9] = "administrativo/visualizar/adm_visual_nivel_acesso.php";			
			$pag[10] = "administrativo/listar/adm_listar_situacoes.php";
			$pag[11] = "administrativo/cadastro/adm_cad_situacoes.php";			
			$pag[12] = "administrativo/editar/adm_editar_situacoes.php";
			$pag[13] = "administrativo/visualizar/adm_visual_situacoes.php";						
			$pag[14] = "administrativo/listar/adm_listar_produto.php";
			$pag[15] = "administrativo/cadastro/adm_cad_produto.php";			
			$pag[16] = "administrativo/editar/adm_editar_produto.php";
			$pag[17] = "administrativo/visualizar/adm_visual_produto.php";			
			$pag[18] = "administrativo/listar/adm_listar_cat_produto.php";
			$pag[19] = "administrativo/cadastro/adm_cad_cat_produto.php";			
			$pag[20] = "administrativo/editar/adm_editar_cat_produto.php";
			$pag[21] = "administrativo/visualizar/adm_visual_cat_produto.php";					
			$pag[22] = "administrativo/listar/adm_listar_situ_produto.php";
			$pag[23] = "administrativo/cadastro/adm_cad_situ_produto.php";			
			$pag[24] = "administrativo/editar/adm_editar_situ_produto.php";
			$pag[25] = "administrativo/visualizar/adm_visual_situ_produto.php";	
			$pag[26] = "administrativo/listar/adm_listar_situ_venda.php";
			$pag[27] = "administrativo/cadastro/adm_cad_situ_venda.php";			
			$pag[28] = "administrativo/editar/adm_editar_situ_venda.php";
			$pag[29] = "administrativo/visualizar/adm_visual_situ_venda.php";
			$pag[30] = "administrativo/listar/adm_listar_venda.php";
			$pag[31] = "administrativo/cadastro/adm_cad_venda.php";			
			$pag[32] = "administrativo/editar/adm_editar_venda.php";
			$pag[33] = "administrativo/visualizar/adm_visual_venda.php";
			
			
			$pag[34] = "administrativo/listar/adm_listar_alt_venda.php";
			$pag[35] = "administrativo/cadastro/adm_cad_alt_venda.php";			
			$pag[36] = "administrativo/editar/adm_editar_alt_venda.php";
			$pag[37] = "administrativo/visualizar/adm_visual_alt_venda.php";
			
			if(!empty($_GET["link"])){
				$link = $_GET["link"];
				if(file_exists($pag[$link])){
					include $pag[$link];
				}else{
					include "administrativo/adm_home.php";
				}				
			}else{
				include "administrativo/adm_home.php";
			}
		
		?>	
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
