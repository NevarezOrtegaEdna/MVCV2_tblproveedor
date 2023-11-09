<h1 class="page-header">
    <?php echo $alm->idproveedor != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=tbl_proveedor">Proveedor</a></li>
  <li class="active"><?php echo $alm->idproveedor != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=tbl_proveedor&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idproveedor" value="<?php echo $alm->idproveedor; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese el nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Ciudad</label>
        <input type="text" name="ciudad" value="<?php echo $alm->ciudad; ?>" class="form-control" placeholder="Ingrese la Ciudad" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese el telefono" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="email" name="correo" value="<?php echo $alm->correo; ?>" class="form-control" placeholder="Ingrese el correo" data-validacion-tipo="requerido|email" />
    </div>
    
    <div class="form-group">
        <label>Colonia</label>
        <input type="text" name="colonia" value="<?php echo $alm->colonia; ?>" class="form-control" placeholder="Ingrese la colonia" data-validacion-tipo="requerido|min:5" />
    </div>

    <div class="form-group">
        <label>Numero de Calle</label>
        <input type="text" name="num_calle" value="<?php echo $alm->num_calle; ?>" class="form-control" placeholder="Ingrese el numero de la calle" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Nombre de la Calle</label>
        <input type="text" name="nom_calle" value="<?php echo $alm->nom_calle; ?>" class="form-control" placeholder="Ingrese el nombre de la calle" data-validacion-tipo="requerido|min:4" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
