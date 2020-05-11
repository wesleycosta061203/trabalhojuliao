<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos = "SELECT * FROM produtos WHERE id = '$id' LIMIT 1";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	$row_produtos = mysqli_fetch_assoc($resultado_produtos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Visualizar Usuário</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=14">
				<button type='button' class='btn btn-sm btn-success'>Listar</button>
			</a>
			
			<a href="administrativo.php?link=16&id=<?php echo $row_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-warning">
					Editar
				</button>
			</a>
			
			<a href="administrativo/processa/adm_apagar_produtos.php?id=<?php echo $row_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-danger">
					Apagar
				</button>
			</a>
		</div>
	</div>
	<dl class="dl-horizontal">		
		<dt>Id: </dt>
		<dd><?php echo $row_produtos['id']; ?></dd>
		<dt>Nome: </dt>
		<dd><?php echo $row_produtos['nome']; ?></dd>
		<dt>Quantidade: </dt>
		<dd><?php echo $row_produtos['quantidade']; ?></dd>
		<dt>Preço: </dt>
		<dd><?php echo $row_produtos['preco']; ?></dd>
		<dt>Categoria do Produto: </dt>
		<dd><?php 
			$categorias_produto_id = $row_produtos['categorias_produto_id'];
			$result_categorias_produtos = "SELECT * FROM categorias_produtos WHERE id = '$categorias_produto_id'";
			$result_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
			$row_categorias_produtos = mysqli_fetch_assoc($result_categorias_produtos);
			echo $row_categorias_produtos['nome']; ?>
		</dd>
		<dt>Situação do Produto: </dt>
		<dd><?php 
			$situacoes_produto_id = $row_produtos['situacoes_produto_id'];
			$result_situacoes_produtos = "SELECT * FROM situacoes_produtos WHERE id = '$situacoes_produto_id'";
			$result_situacoes_produtos = mysqli_query($conn, $result_situacoes_produtos);
			$row_situacoes_produtos = mysqli_fetch_assoc($result_situacoes_produtos);
			echo $row_situacoes_produtos['nome']; ?>
		</dd>
		<dt>Inserido: </dt>
		<dd><?php 
			if(isset($row_produtos['created'])){
				$inserido = $row_produtos['created'];
				echo date('d/m/Y H:i:s', strtotime($inserido)); 
			}?>
		</dd>
		<dt>Alterado: </dt>
		<dd><?php 
			if(isset($row_produtos['modified'])){				
				echo date('d/m/Y H:i:s',strtotime($row_produtos['modified'])); 
			} ?>
		</dd>
	</dl>
</div>