<!DOCTYPE html>
<html lang="en">
  <head>
	<base href="<?php echo base_url(); ?>"> 
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php 
		echo "<h1>Hola mundo</h1> <br>";
		echo "Hoy es: ".date("d-m-y");
		echo "<h2>Bienvenido: </h2>".$nombre;
		echo "<h2>SaveWalterWhite</h2><br>";
	?>
	<a href="index.php/prueba/opcion1">opcion 1</a><!--Es el inicio, el controlador que se va a utilizar y 
	la vista que se plantea abrir-->
	<a href="index.php/prueba/opcion2">opcion 2</a>
	<a href="index.php/prueba/opcion3">opcion 3</a>
	<a href="http://www.itcolima.edu.mx">Tec De Colima xD</a>
	<?php 
	 ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

