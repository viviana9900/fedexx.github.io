<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/robo.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<br>
<div>
<div class="row" >
    <div class="col-md-12 text-center">
        <h1 class="text-center"> <strong > NUEVOS CLIENTES</strong></h1>
    </div>
   <br>
</div>
<form class="" action="<?php echo site_url(); ?>/clientes/guardar" method="post">
<br>
<div class="container" style="background-color:rgba(0, 0, 0, 0.5); color: white">
<br>
    <div class="row"  >
      <div class="col-md-3">
          <label for="">Cedula cliente:</label>
          <br>
          <input type="number"
          placeholder="Ingrese la cedula"
          class="form-control"
          name="cedula_cli" value="" id="cedula_cli">
      </div>
      <div class="col-md-3">
          <label for="">apellido cliente:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el apellido"
          class="form-control"
          name="apellido_cli" value="" id="apellido_cli">
      </div>
      <div class="col-md-3">
        <label for="">nombre cliente:</label>
        <br>
        <input type="text"
        placeholder="ingrese el nombre"
        class="form-control"
        name="nombre_cli" value="" id="nombre_cli">
      </div>
      <div class="col-md-3">
        <label for="">telefono cliente:</label>
        <br>
        <input type="number"
        placeholder="ingrese el telefono"
        class="form-control"
        name="telefono_cli" value="" id="telefono_cli">
      </div>
      <div class="col-md-3">
        <label for="">e-mail cliente:</label>
        <br>
        <input type="text"
        placeholder="ingrese el e-mail"
        class="form-control"
        name="email_cli" value="" id="email_cli">
      </div>
      <div class="col-md-3">
        <label for="">latitud cliente:</label>
        <br>
        <input type="number"
        placeholder="ingrese la latitud"
        class="form-control"
        name="latitud_cli" value="" id="latitud_cli">
      </div>
      <div class="col-md-3">
        <label for="">longitud cliente:</label>
        <br>
        <input type="number"
        placeholder="ingrese la longitud"
        class="form-control"
        name="longitud_cli" value="" id="longitud_cli">
      </div>
      <div class="col-md-3">
          <label for=""> direccion del cliente:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la direccion"
          class="form-control"
          name="direccion_cli" value="" id="direccion_cli">
      </div>
    </div>
    <br>
    <br>
</div>

    <div class="container">
      <h2 class="text-center">Ubucaciones de los clientes </h2>
      <p class="text-center">A continuación podras arrastar el marcador para poder ubicar tu domicilio.</p>
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
       <br>
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
           document.getElementById('latitud_cli').value=
           this.getPosition().lat();
           document.getElementById('longitud_cli').value=
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
            <a href="<?php echo site_url(); ?>/clientes/lista" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
<br>
</div>
</form>
