<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/PED.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<h1 class="text-center"> <strong>UBICACION DE LOS PEDIDOS</strong></h1>
<div class="container">
<div class="row">
    <div class="col-md-12 text-center">
        <a href="<?php echo site_url('Pedidos/menu') ?>" class="btn btn-primary"> <i > REGRESAR </i></a>
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
			var mapaPed = new google.maps.Map(
				document.getElementById('mapaLugares'), {
					center: centro,
					zoom: 3,
					mapTypeId: google.maps.MapTypeId.HYBRID
				}
			);
			<?php if ($pedidos) : ?>
				<?php foreach ($pedidos as $lugarTemporal) : ?>
					var coodenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_ped; ?>, <?php echo $lugarTemporal->longitud_ped; ?>);
					var marcador = new google.maps.Marker({
						position: coodenadaTemporal,
						title: "<?php echo $lugarTemporal->fecha_ped; ?>",
            icon:"<?php echo base_url(); ?>/assets/images/cli.png",
						map: mapaPed
					});
				<?php endforeach; ?>
			<?php endif; ?>

		}
	</script>
