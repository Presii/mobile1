<?php
    $productosURL = "http://pymesv.com/datos05w/gamestoreapi/productos/lista";
    $variable=file_get_contents($productosURL);
    $variable=json_decode($variable);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Games IW Store </title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Store</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-home">
<ul data-role="listview" data-split-icon="gear" data-split-theme="a" data-inset="true">
<?php
foreach ($variable as $value) 
                          {
                  					
                            /*echo '<!-- start single product item -->
                                      <li>
                                        <figure>
                                          <a class="aa-product-img" href="#"><img style="width: 250px; height: 300px;" src="http://pymesv.com/datos05w/'.$value->imagen.'" alt="game cover img"></a>
                                          <a class="aa-add-card-btn"href="javascript:void();" data="'.htmlspecialchars(json_encode($value), ENT_QUOTES, 'UTF-8'). '"><span class="fa fa-shopping-cart"></span>Agregar al carrito</a>
                                          <figcaption>
                                            <h4 class="aa-product-title"><a href="#">'.$value->nombre.'</a></h4>
                                            <span class="aa-product-price">'.$value->precio.'</span>
                                            <p class="aa-product-descrip">'.$value->descripcion.'</p>
                                          </figcaption>
                                        </figure>                         
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">Comprar ahora!</span>
                                      </li>';*/
                              echo '<li><a href="#">
                                      <img src="http://pymesv.com/datos05w/'.$value->imagen.'">
                                        <h2>'.$value->nombre.'</h2>
                                        <p>'.$value->precio.'</p></a>
                                          <a class="purch" data="'.$value->precio.'" href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
                                  </li>';
                                                  }
  ?>
</ul>
<div data-role="popup" id="purchase" data-theme="a" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
    <h3>Purchase Game?</h3>
        <p>Your download will begin immediately on your mobile device when you purchase.</p>
    <a href="index.html" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini buy"></a>
    <a href="index.html" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-mini">Cancel</a>
</div>
</div><!-- /page -->
<script>
$(document).ready(function () {

    $( ".purch" ).click(function(e) {
    //e.preventDefault();

    var data =  $(this).attr("data");
    $('.buy').text('$'+data);

    });
});
</script>
</body>
</html>