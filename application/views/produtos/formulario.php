<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url("css/main.css") ?>">

	<title>Produtos</title>
</head>
<body>
	<div class="container">
		<h1>Cadastro de Produto</h1>
<?php 
echo form_open("produtos/novo");

?>

			<div class="login-page">
		  <div class="form">
		    <form class="register-form">


		<?php 

echo form_input(array(
	"name" => "nome",
	"id" => "nome",
	"class" => "form-control",
	"maxlength" => "32",
	"placeholder" => "Nome"
));

echo form_input(array(
	"name" => "valor",
	"id" => "valor",
	"class" => "form-control",
	"maxlength" => "32"	,
	"type" => "number",
	"placeholder" => "Valor"
));

echo form_input(array(
	"name" => "modelo",
	"id" => "modelo",
	"class" => "form-control",
	"maxlength" => "32",
	"placeholder" => "Modelo"
));

echo form_input(array(
	"name" => "categoria",
	"id" => "categoria",
	"class" => "form-control",
	"maxlength" => "32",
	"placeholder" => "Categoria"
));

echo form_input(array(
	"name" => "quantidade",
	"id" => "quantidade",
	"class" => "form-control",
	"maxlength" => "32",
	"placeholder" => "Quantidade"
));

echo form_button(array(
"class" => "btn btn-primary",
"content" =>"Cadastrar",
"type" =>"submit"
));


echo form_close();

 ?>

 </form>
		  </div>
		</div>
	</div> 
</body>
</html>