<?
	session_start();

	if(!$_SESSION['usuario']){
		header('Location: index.php?erro=1');
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>Sr.Miyagi - Pedido</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
     <style type="text/css">
    @media print{
      .print{
        display: none ;
      }
      h1{
        font-size: 50px;
      }
    }
    </style>
</head>
<body data-spy="scroll">
 
<!-- End Page Loading -->
  <form class="container">
    <div class="col-sm-12">
      
      <h1>Sr. Miyagi - Pedidos</h1>
      <center><img src="img/logo_transp.png" width="100px"></center>
    <div class="form-group ">
      <label for="exampleFormControlInput1">Nome</label>
      <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
    </div>
    <div class="form-group ">
      <label for="exampleFormControlInput1">Endereço</label>
      <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Endereço">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">telefone</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Telefone">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Pedido</label>
      <!-- Search form -->
<div class="md-form mt-0">
  <input class="form-control" type="text" placeholder="Search" aria-label="Item">
</div>
<Br>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>20% OFF - Frango Xadrez 400gr</option>
        <option>25% OFF - Yakisoba 600g .</option>
        <option>45% OFF - Combinado Galera (200 peças)</option>
        <option>65% OFF - Super Combo de Sushi (64 peças)</option>
        <option>30% OFF - Sunomono 200g</option>
      </select>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">R$</span>
        </div>
        <input type="text" class="form-control" aria-label="Quantia">
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <input type="checkbox" aria-label="Chebox para permitir input text">&emsp;Pago
        </div> &emsp;
        <div class="input-group-text">
          <input type="checkbox" aria-label="Chebox para permitir input text">&emsp;Troco
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Observações</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-primary" onclick="print()" class="print">Imprimir</button>
  </div>
  </form>
	
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</html>
