<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/es.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<br>
<div class="row" >
    <div class="col-md-12 text-center">
        <h1 class="text-center" style="color:white" >LISTADO DE LAS SUCURALES </h1>
    </div>
   <br>
    <div class="col-md-12 text-center">
        <a href="<?php echo site_url('sucursales/menu') ?>" class="btn btn-primary"> <i class="#"> REGRESAR </i></a>

    </div>
    </div>
<br>

<?php if ($sucursal) : ?>
    <table class="table table-striped
    table-bordered table-hover">
<div class="container">
        <thead>
            <tr style="color:white">
                <th>ID</th>
                <th>NOMBRE </th>
                <th>PAIS</th>
                <th>CIUDAD</th>
                <th>TELEFONO</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>DIRECCIÓN</th>
                <th>ACCIONES</th>

            </tr>
        </thead>
</div>

        <tbody>
            <?php foreach ($sucursal
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->id_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nombre_suc ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->pais_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->ciudad_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->telefono_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->latitud_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->longitud_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->direccion_suc; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" title="Editar Sucursal" style="color:green;">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="<?php echo site_url(); ?>/Sucursales/eliminar/<?php echo $filaTemporal->id_suc; ?>" title="Eliminar sucursal" onclick="return confirm('ESTA SEGURO DE ELIMINAR ESTA SUCURSAL')" style="color:red;">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
<?php else : ?>
    <h1>NO HAY DATOS DE LOS CLIENTES</h1>
<?php endif ?>
