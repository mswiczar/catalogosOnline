<!DOCTYPE html>
<?
        include_once "dbconnections.php";
        dbconnect ();

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta property="og:site_name" content="Catalogix">
	<meta property="og:title" content="Catalogix - Catalogos de Moda" />
	<meta property="og:description" content="Los mejores catalogos de Moda y Accesorios" />
	<meta property="og:image" itemprop="image" content="https://www.avellanedacompras.com/catalogix/img/catalogix.jpg"/>
	<meta property="og:type" content="website" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css?v3'">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>Catalgoix</title>
</head>
<body>

<script type="text/javascript"> 
	function moreInfoClick() 
	{ 
            contenedor.style.display = 'none';
  			contenedor2.style.display= 'block';
    } 

	function closeMore() 
	{ 
            contenedor2.style.display = 'none';
  			contenedor.style.display= 'block';
    } 
    
    
    
</script>

<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>				


	<header>
		<div class="contenedor">
			<h2 class="logotipo"><a href="https://w3.avellanedacompras.com/catalogix/">Catalogix</a></h2>
			<nav>
				<a href="/" class="activo">Inicio</a>
				<a href="#">Catalogos</a>
				<a href="https://api.whatsapp.com/send?phone=54911XXXXXX&text=Hola%20,%20deseo%20mas%20info%20Sobre%20">Contactenos</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div id="contenedor" class="contenedor">
				<h3 class="titulo">Catalogos de Moda Online</h3>
				<p class="descripcion">
					Accede a los mejores catalogos de ropa y accesorios de fabricantes Argentinos.<br>
					Comenza tu negocio de venta por catalogo sin moverte de tu casa y sin invertir en stock.
				</p>

				<button  onclick="moreInfoClick()" role="button" class="boton"><i class="fas fa-info-circle"></i>M&aacute;s informaci&oacute;n</button>
			</div>

			<div id="contenedor2" class="contenedor2" style='display:none;'>
				<h3 class="titulo" style='color: var(--rojo);'><center>Comenza tu negocio de Ropa</center></h3>

				<p class="descripcion">Accede a los mejores catalogos con listas de precios para comenzar a vender ya.<br>
                   <i class="fas fa-check"></i> Fabricantes de Ropa, Calzado y Accesorios de Moda.<br>
				   <i class="fas fa-check"></i> Mas de 500 productos renovables Todas las temporadas.<br>
				   <i class="fas fa-check"></i> Contacto directo al WhatsApp de cada fabricante.<br>
				   <i class="fas fa-check"></i> Coaching para que evacues tus inquietudes en grupo de WhatsApp. <br>
                   <i class="fas fa-check"></i> Puedes tabajar desde cualquier provincia. <br>
                   <i class="fas fa-check"></i> Comienza a ganar dinero YA!<br>
                </p>


				<?
				/*
				<img style ='max-width:100%;height:auto;' src="img/catalog3-bg.jpg"/>
				<br>
				*/
				?>
				<center>
<a data-button-label="Comprar" mp-mode="dftl" href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=364203592-18e71789-0d74-4425-862d-9866da8de6c4" name="MP-payButton" class='blue-ar-l-rn-none'>Pagar por unica vez $799</a>
</center>
				<button  onclick="closeMore()" role="button" class="boton"><i class="fas fa-window-close"></i>Cerrar</button>
				<br><br>
			</div>

		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Catalogos</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
					<?
					    $sql= "select * from dsc_marca where id in (SELECT  distinct  marca  from dsc_productos where activa=1  and borrado=0 and agotado=0) order by nombre";
				        $result = mysql_query ($sql,$GLOBALS['db_cap']);                                                                   
				        while ( $r =    mysql_fetch_assoc($result))
        				{
							echo '<div class="pelicula">';
							echo '<a href="#"><img  src="../catalogos/imgtiendas/'.$r['PORTADA'].'" alt=""></a>';
						    echo '</div>';
						}
					?>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>