<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/PED.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<br>
<div class="row" >
    <div class="col-md-12 text-center">
        <h1 class="text-center"> <strong> LISTADO DE LOS PEDIDOS</strong> </h1>
    </div>
   <br>
    <div class="col-md-12 text-center">
        <a href="<?php echo site_url('pedidos/menu') ?>" class="btn btn-primary"> <i class="#"> REGRESAR </i></a>
    </div>
    </div>
<br>

<?php if ($pedidos) : ?>
    <table class="table table-striped
    table-bordered table-hover">
<div class="container">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>FECHA PEDIDO </th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>DESCRIPCIÓN </th>
                <th>ACCIONES</th>

            </tr>
        </thead>
</div>

        <tbody>
            <?php foreach ($pedidos
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->id_ped; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nombre_ped ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fecha_ped; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->latitud_ped; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->longitud_ped; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->des_ped; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" title="Editar Pedido" style="color:green;">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="<?php echo site_url(); ?>/Pedidos/eliminar/<?php echo $filaTemporal->id_ped; ?>" title="Eliminar sucursal" onclick="return confirm('ESTA SEGURO DE ELIMINAR ESTE PEDIDO')" style="color:red;">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
<?php else : ?>
    <h1>NO HAY DATOS DE LOS PEDIDOS </h1>
<?php endif ?>
