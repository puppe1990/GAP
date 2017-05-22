<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url("css/main.css") ?>">

	<title>Produtos</title>
</head>
<body>
	<div class="container">

		<!-- login -->

	<!-- 	<div class="login-page">
		  <div class="form">
		    <form class="register-form">
		      <input type="text" placeholder="CPF"/>
		      <input type="password" placeholder="senha"/>
		      <input type="text" placeholder="email address"/>
		      <button>create</button>
		      <p class="message">Already registered? <a href="#">Sign In</a></p>
		    </form>
		    <form class="login-form">
		      <input type="text" placeholder="CPF"/>
		      <input type="password" placeholder="senha"/>
		      <button>login</button>
		      <p class="message">Not registered? <a href="#">Create an account</a></p>
		    </form>
		  </div>
		</div> -->

		<!-- login -->

		<p class="alert-success">
			<?= $this->session->flashdata("success") ?>
		</p>

		<p class="alert-danger">
			<?= $this->session->flashdata("danger") ?>
		</p>

		

		<?php if($this->session->userdata("usuario_logado")) :?>

			<h2>Produtos</h2>
		<table class="table table-striped" style="background-color: #ccc">
			<?php foreach($produtos as $produto) : ?>
				<tr>
					<td><?php echo $produto["nome"] ?></td>
					<td><?php echo numeroEmReais($produto["valor"]) ?></td>
				</tr>
			<?php endforeach ?>	
		</table>


			<?= anchor('produtos/formulario', 'Novo Produto', array("class" => "btn btn-primary")) ?>
			<?= anchor('login/logout', 'Logout', array("class" => "btn btn-primary")) ?>

		<?php else: ?>	

		<h1>Login</h1>
		<?php echo form_open("login/autenticar"); 

		?>

			<div class="login-page">
		  <div class="form">
		    <form class="register-form">


		<?php 

		echo form_input(array(
			"name" => "cpf",
			"id" => "cpf",
			"class" => "form-control",
			"maxlength" => "32"	,
			"placeholder" => "CPF"
			));

		echo form_password(array(
			"name" => "senha",
			"id" =>"senha",
			"class" => "form-control",
			"maxlength" => "32",
			"placeholder" => "Senha"
			));

		echo form_button(array(
		"class" => "btn btn-primary",
		"content" =>"Login",
		"type" =>"submit"
		));

		echo form_close();
		?>

		</form>
		
</div>
		</div>


		<h1>Cadastro</h1>
		<?php 
			echo form_open("usuarios/novo");
		    
		    ?>

			<div class="login-page">
		  <div class="form">
		    <form class="register-form">


		<?php 

			echo form_input(array(
				"name" => "nomeUsuario",
				"id" =>"nomeUsuario",
				"class" => "form-control",
				"maxlength" => "32",
				"placeholder" => "Nome"	
				));

			echo form_input(array(
				"name" => "cpf",
				"id" => "cpf",
				"class" => "form-control",
				"maxlength" => "32",
				"placeholder" => "CPF"
				));

			echo form_password(array(
				"name" => "senha",
				"id" =>"senha",
				"class" => "form-control",
				"maxlength" => "32",
				"placeholder" => "Senha"
				));



			echo form_input(array(
				"name" => "telefone",
				"id" => "telefone",
				"class" => "form-control",
				"maxlength" => "32",
				"placeholder" => "Telefone"
				));

			echo form_input(array(
				"name" => "dataAdmissao",
				"id" => "dataAdmissao",
				"class" => "form-control",
				"maxlength" => "32",
				"placeholder" => "Data Admissão"
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


	<?php endif ?>
		
	</div>

</body>
</html>