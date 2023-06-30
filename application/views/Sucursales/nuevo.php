<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/es.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<br>
<div class="row" >
    <div class="col-md-12">
        <h1 class="text-center"style="color:white"> <strong>  NUEVA SUCURSAL </strong> </h1>
    </div>
   
</div>
<form class="" action="<?php echo site_url(); ?>/sucursales/guardar" method="post">
<div class="container" style="background-color:rgba(0, 0, 0, 0.5); color: white">
<br>
    <div class="row"  >
      <div class="col-md-3">
          <label for="" style="color:white">nombre de la sucursal:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el nombre de la sucural"
          class="form-control"
          name="nombre_suc" value="" id="nombre_suc">
      </div>
      <div class="col-md-3">
          <label for="" style="color:white">Pais :</label>
          <br>
          <input type="text"
          placeholder="Ingrese el pais"
          class="form-control"
          name="pais_suc" value="" id="pais_suc">
      </div>
      <div class="col-md-3">
        <label for=""style="color:white" >ciudad:</label>
        <br>
        <input type="text"
        placeholder="ingrese la ciudad"
        class="form-control"
        name="ciudad_suc" value="" id="ciudad_suc">
      </div>
      <div class="col-md-3">
        <label for=""style="color:white">telefono sucursal:</label>
        <br>
        <input type="number"
        placeholder="ingrese el telefono"
        class="form-control"
        name="telefono_suc" value="" id="telefono_suc">
      </div>
      <div class="col-md-3">
        <label for="" style="color:white">latitud sucursal:</label>
        <br>
        <input type="text"
        placeholder="ingrese la latitud"
        class="form-control"
        name="latitud_suc" value="" id="latitud_suc">
      </div>
      <div class="col-md-3">
        <label for="" style="color:white">longitud sucursal:</label>
        <br>
        <input type="text"
        placeholder="ingrese la longitud"
        class="form-control"
        name="longitud_suc" value="" id="longitud_suc">
      </div>
      <div class="col-md-6">
          <label for="" style="color:white" > direccion de la sucursal:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la direccion"
          class="form-control"
          name="direccion_suc" value="" id="direccion_suc">
      </div>
    </div>
    <br>
    <br>
    </div>
    <br>
    <br >
    <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div id="mapaUbicacion" style="height:300px; with:100%; border:2px solid black;"></div>
         </div>
       </div>
       </div>
   <script type="text/javascript">
        function initMap(){
           var centro = new google.maps.LatLng(-2.1732687811038756, -79.43839246288748);
           var mapa1=new google.maps.Map(
             document.getElementById('mapaUbicacion'),
             {
               center:centro,
               zoom:3,
               mapTypeId:google.maps.MapTypeId.ROADMAP
             }
           );
           var marcador=new google.maps.Marker({
             position:centro,
             map:mapa1,
             title:"Selecione la direccion",
             //icon:"ruta"
             draggable:true
           });
           google.maps.event.addListener(marcador, 'dragend', function (){
           //  alert("se termino el Drag");
           document.getElementById('latitud_suc').value=
           this.getPosition().lat();
           document.getElementById('longitud_suc').value=
           this.getPosition().lng();
           });

        }//cierre de la fincion
   </script>
   <br>
    <div class="row"  >
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/sucursales/lista" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
<br>
</div>
</form>
<br>
