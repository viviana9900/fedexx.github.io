<style>
    body {
      background-image: url("<?php echo base_url();?>/assets/images/robo.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
<br>
<div class="row" >
    <div class="col-md-12 text-center">
        <h1 class="text-center"><strong >LISTADO DE CLIENTES NUEVOS</strong></h1>
    </div>
   <br>
    <div class="col-md-12 text-center">
        <a href="<?php echo site_url('clientes/menu') ?>" class="btn btn-primary"> <i class="#"> REGRESAR </i></a>

    </div>
</div>
<br>

<?php if ($clientes) : ?>
    <table class="table table-striped
    table-bordered table-hover">
<div class="container">
        <thead>
            <tr>
                <th>ID</th>
                <th>CEDULA</th>
                <th>NOMBRE </th>
                <th>APELLIDO</th>
                <th>TELEFONO</th>
                <th>E-MAIL</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>DIRECCIÓN</th>
                <th>ACCIONES</th>

            </tr>
        </thead>
</div>
        <tbody>
            <?php foreach ($clientes
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->id_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->cedula_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nombre_cli ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->apellido_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->telefono_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->email_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->latitud_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->longitud_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->direccion_cli; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" title="Editar Cliente" style="color:green;">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="<?php echo site_url(); ?>/clientes/eliminar/<?php echo $filaTemporal->id_cli; ?>" title="Eliminar Cliente" onclick="return confirm('ESTA SEGURO DE ELIMINAR ESTE CLIENTE')" style="color:red;">
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