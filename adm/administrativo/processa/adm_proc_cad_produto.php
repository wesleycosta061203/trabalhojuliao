<?php
	include_once("../../conexao/conexao.php");
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$quantidade = mysqli_real_escape_string($conn, $_POST['quantidade']);
	$preco = mysqli_real_escape_string($conn, $_POST['preco']);
	$categorias_produto_id = mysqli_real_escape_string($conn, $_POST['categorias_produto_id']);
	$situacoes_produto_id = mysqli_real_escape_string($conn, $_POST['situacoes_produto_id']);
	
	$result_produtos = "INSERT INTO produtos (nome, quantidade, preco, categorias_produto_id, situacoes_produto_id, created) VALUES ('$nome', '$quantidade', '$preco', '$categorias_produto_id', '$situacoes_produto_id', NOW())";
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
					alert(\"Produto cadastrado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/loja/adm/administrativo.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Produto não foi cadastrado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>