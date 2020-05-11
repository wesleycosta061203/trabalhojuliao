<?php
	include_once("../../conexao/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$quantidade = mysqli_real_escape_string($conn, $_POST['quantidade']);
	$preco = mysqli_real_escape_string($conn, $_POST['preco']);
	$categorias_produto_id = mysqli_real_escape_string($conn, $_POST['categorias_produto_id']);
	$situacoes_produto_id = mysqli_real_escape_string($conn, $_POST['situacoes_produto_id']);
	
	$result_usuario = "UPDATE produtos SET nome='$nome', quantidade = '$quantidade', preco = '$preco', categorias_produto_id= '$categorias_produto_id', situacoes_produto_id = '$situacoes_produto_id', modified =  NOW() WHERE id = '$id'";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
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
					alert(\"Produto alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/loja/adm/administrativo.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Produto não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>