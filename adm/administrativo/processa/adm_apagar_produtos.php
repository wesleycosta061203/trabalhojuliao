<?php
	include_once("../../conexao/conexao.php");
	$id = $_GET['id'];
	
	$result_produtos = "DELETE FROM produtos WHERE id = '$id'";
	$resultado_produtos = mysqli_query($conn, $result_produtos);	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/loja/adm/administrativo.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Produto apagado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/loja/adm/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Produto não foi apagado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>