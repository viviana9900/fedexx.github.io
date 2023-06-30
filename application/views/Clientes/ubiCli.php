<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/robo.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<h1 class="text-center"> <strong >UBICACIONES DE LAS SUCURSALES</strong> </h1>
<div class="container">
<div class="row">
    <div class="col-md-12 text-center">
    </div>
    <div class="col-md-12 text-center">
        <a href="<?php echo site_url('Clientes/menu') ?>" class="btn btn-primary"> <i > REGRESAR </i></a>
    </div>
</div>
<br>
<div class="row">
  <div class="col md-12">
    <div id="mapaLugares" style="height:500px; width:100%; border:2px solid black;">
    </div>
  </div>
</div>
</div>
<br>

<script type="text/javascript">
		function initMap() {
			var centro = new google.maps.LatLng(-0.9214680500257709, -78.62050563183242);
			var mapaCli = new google.maps.Map(
				document.getElementById('mapaLugares'), {
					center: centro,
					zoom: 3,
					mapTypeId: google.maps.MapTypeId.HYBRID
				}
			);
			<?php if ($clientes) : ?>
				<?php foreach ($clientes as $lugarTemporal) : ?>
					var coodenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_cli; ?>, <?php echo $lugarTemporal->longitud_cli; ?>);
					var marcador = new google.maps.Marker({
						position: coodenadaTemporal,
						title: "<?php echo $lugarTemporal->apellido_cli; ?>",
            icon:"<?php echo base_url(); ?>/assets/images/suc.png",
						map: mapaCli
					});
				<?php endforeach; ?>
			<?php endif; ?>

		}
	</script>
