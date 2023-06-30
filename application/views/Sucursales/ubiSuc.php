<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/es.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<h1 class="text-center" style="color:white"> <strong>UBICACIONES DE LAS SUCURSALES </strong>  </h1>
<div class="container">
<div class="row">
    <div class="col-md-8">
    </div>
    <div class="col-md-12 text-center">
        <a href="<?php echo site_url('Sucursales/menu') ?>" class="btn btn-primary"> <i > REGRESAR </i></a>
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
			var mapaSuc = new google.maps.Map(
				document.getElementById('mapaLugares'), {
					center: centro,
					zoom: 3,
					mapTypeId: google.maps.MapTypeId.HYBRID
				}
			);
			<?php if ($sucursal) : ?>
				<?php foreach ($sucursal as $lugarTemporal) : ?>
					var coodenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_suc; ?>, <?php echo $lugarTemporal->longitud_suc; ?>);
					var marcador = new google.maps.Marker({
						position: coodenadaTemporal,
						title: "<?php echo $lugarTemporal->nombre_suc; ?>",
            icon:"<?php echo base_url(); ?>/assets/images/cli.png",
						map: mapaSuc
					});
				<?php endforeach; ?>
			<?php endif; ?>

		}
	</script>
