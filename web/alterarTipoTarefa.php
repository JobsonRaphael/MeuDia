<!DOCTYPE html>
<html>
<head>

<?php session_start(); ?>
<title>Alterar Tipo de Tarefa</title>
<?php include '../import/tipoTarefas.html';?>	

</head>
<body>

<?php include 'menu.php';?>

<!-- Pag -->
<main class="page-content">
    <div class="container-fluid">
    	<?php include '../php/erroAlterarTipoTarefa.php';?>
		<?php include '../php/alterarTipoTarefa.php';?>
 
	</div>

</body>
</html>