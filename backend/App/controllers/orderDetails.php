<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->

<link rel="icon" type="image/vnd.microsoft.icon" href="/assets/img/angel.png">
<title>Order - VI World Congress on Dual Disorders </title>
</head>
<body class="">
<div role="navigation" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="https://www.baulphp.com" class="navbar-brand">CENVIED</a>
        </div>
      </div>
    </div>
	
	<div class="container" style="min-height:500px;">
	<div class=''>
	</div>
<div class="container">
	<h2>Orden de Pago Correcta</h2>	
	<?php 
	$orderNumber = 1;
	if(!empty($_GET['paymentID']) && !empty($_GET['payerID']) && !empty($_GET['token']) && !empty($_GET['pid']) ){
		$paymentID = $_GET['paymentID'];
		$payerID = $_GET['payerID'];
		$token = $_GET['token'];
		$pid = $_GET['pid'];   
		?>
		<div class="alert alert-success">
		  <strong>Éxito!</strong> Su pago se procesó correctamente, puede iniciar sesión.
		</div>
		<table>       
			<tr>
			  <td><strong>Payment Id:</strong>  <?php echo $paymentID; ?></td>
            </tr>
            <tr>
			  <td><strong>Payer Id:</strong> <?php echo $payerID; ?></td>
              </tr>
            <tr>
			  <td><strong>Product Id:</strong> <?php echo $pid; ?></td>
			  <!--<td><php echo ; ?></td>-->
			</tr>       
		</table>
	<?php	
	} else {
		header('Location:index.php');
	}
	?>
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="https://cenvied.org/">Iniciar Sesión</a>		
	</div>
</div>
<div class="insert-post-ads1" style="margin-top:20px;">

</div>
</div>
</body></html>
<?php ob_end_flush(); ?>