<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Font Awesone -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
    <title>Exámen M2 UF1</title>
  </head>
  <body>
    
  <div class="container-fluid">
	<div class="row bg-primary text-white p-5 shadow">
		<h1 class="col-12">Exámen M2 UF1</h1>
		<ul>
			<li>Escribir 2 números</li>
			<li>Escribir los resultados de los ejercicios siguientes al hacer el submit del formulario</li>
		</ul>
	</div>	
	
	
		
		<form class="m-5" action="index.php" method="post">
		  <div class="form-row">
			 <div class="form-group col-1">
				<label for="frase1">Nº1</label>
				<input type="text" class="form-control" id="num1" name="num1" placeholder="Num 1">
			  </div>
		 
			 <div class="form-group col-1">
				<label for="frase2">Nº2</label>
				<input type="text" class="form-control" id="num2" name="num2" placeholder="Num 2">
			  </div>
			  
			  <div class="form-group col-3">
				<label for="frase1">Frase</label>
				<input type="text" class="form-control" id="frase1" name="frase1" placeholder="Primera Frase">
			  </div>

		  </div>
		  <button type="submit" class="btn btn-primary">Calcular</button>		  
 	  
		</form>
		
<hr />
<?php
$numero1 = 0;
$numero2 = 0;
$frase = "";


if ($_SERVER['REQUEST_METHOD']=="POST"){

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$frase = $_POST['frase1'];

?>




<div class="row mb-5 border shadow pb-5">
<h5 class="col-12 text-center bg-secondary text-white p-3"> Hacer los cálculos con los números introducidos</h5>
<div class="col text-center"> suma: <?php echo $numero1+$numero2;?></div>
<div class="col text-center"> resta:  </div>
<div class="col text-center"> multiplicación: </div>
<div class="col text-center"> división: </div>
</div>	
<div class="row mb-5 border shadow pb-5">
<h5 class="col-12 text-center bg-secondary text-white p-3"> Hacer las operaciones siguientes con las frases</h5>

<div class="col-12">
	<div class="row">
		<h5 class="col text-center"> </h5>
		<h5 class="col text-center"> Frase </h5>
	</div>
</div>
<div class="col-12">
	<div class="row">
		<h5 class="col text-right"> Poner en mayúsculas </h5>
		<div class="col text-center border-bottom">  </div>
	</div>
</div>
<div class="col-12">
	<div class="row">
		<h5 class="col text-right"> Poner en minúsculas </h5>
		<div class="col text-center border-bottom">  </div>
	</div>
</div>
<div class="col-12">
	<div class="row">
		<h5 class="col text-right"> Longitud de la frase </h5>
		<div class="col text-center border-bottom">  </div>
	</div>
</div>
<div class="col-12">
	<div class="row">
		<h5 class="col text-right"> Añadir X puntos al final de la frase, donde X es el número 1 que se ha escrito en el primer campo</h5>
		<div class="col text-center border-bottom">  </div>
	</div>
</div>

</div>		
<?php } ?>
	
	<div class="row mb-5 border shadow pb-5">
		<h5 class="col-12 text-center bg-secondary text-white p-3">Dado el array asociativo siguiente, recorrerlo con un foreach y crear una listado como la que se muestra</h5>
		
			<?php 
	$personajes = [
	"Superman"=>"DC","Batman"=>"DC","Wonder Woman"=>"DC","Supergirl"=>"DC","Flash"=>"DC",
	"Iron Man"=>"Marvel","Thor"=>"Marvel","Viuda Negra"=>"Marvel","Lobezno"=>"Marvel","Spiderman"=>"Marvel",
	"Son Goku"=>"Manga","Bulma"=>"Manga","Naruto"=>"Manga","Nami"=>"Manga","Mazinger Z"=>"Manga",
	"Zipi"=>"Europeo","Zape"=>"Europeo","Mortadelo"=>"Europeo","Filemón"=>"Europeo","Tintín"=>"Europeo"
	];
	
	?>
		
		<div class="col text-center"> <img src="img/tabla_personajes.PNG" class="img-fluid" width="50%"></div>
	
		
	</div>	
	<div class="row mb-5 border shadow pb-5">
		<div class="col text-center">
		<h2>Superhéroes</h2>
		---- Crear aquí el listado de personajes ---
		</div>	
		
	</div>

</div>


		
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.js"></script>
    <!-- bundle incluye popper.js -->
   <script src="js/bootstrap.bundle.js"></script>
   <script src="js/miscript.js"></script>
  </body>
</html>