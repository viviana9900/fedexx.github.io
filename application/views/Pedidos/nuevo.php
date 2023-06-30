<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/PED.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<br>

<div class="row">
  <div class="col-md-12">
        <h1 class="text-center" style="color:white"><strong >NUEVO PEDIDO </strong > </h1>
    </div>

<div class="container" style="background-color:rgba(0, 0, 0, 0.5); color: white">

<br>
<div class="row" >  
 </div>
 
 <form class="" action="<?php echo site_url(); ?>/pedidos/guardar" method="post">
     <div class="row"  >
       <div class="col-md-3">
           <label for="">nombre del pedido:</label>
           <br>
           <input type="text"
           placeholder="Ingrese el nombre del pedido"
           class="form-control"
           name="nombre_ped" value="" id="nombre_ped">
       </div>
       <div class="col-md-3">
         <label for="">fecha pedido:</label>
         <br>
         <input type="text"
         placeholder="ingrese la fecha"
         class="form-control"
         name="fecha_ped" value="" id="fecha_ped">
       </div>
       <div class="col-md-3">
         <label for="">latitud pedido:</label>
         <br>
         <input type="text"
         placeholder="ingrese la latitud"
         class="form-control"
         name="latitud_ped" value="" id="latitud_ped">
       </div>
       <div class="col-md-3">
         <label for="">longitud pedido:</label>
         <br>
         <input type="text"
         placeholder="ingrese la longitud"
         class="form-control"
         name="longitud_ped" value="" id="longitud_ped">
       </div>
       <div class="col-md-3">
           <label for=""> descripcion del pedido:</label>
           <br>
           <input type="text"
           placeholder="Ingrese la descripcion"
           class="form-control"
           name="des_ped" value="" id="des_ped">
       </div>
     </div>
     <br>
     <br>
</div>
    <br>
    <br>
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
           document.getElementById('latitud_ped').value=
           this.getPosition().lat();
           document.getElementById('longitud_ped').value=
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
            <a href="<?php echo site_url(); ?>/pedidos/lista" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
<br>
</div>
</form>
