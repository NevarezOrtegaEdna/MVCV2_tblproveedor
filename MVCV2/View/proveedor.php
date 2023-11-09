<h1 class="page-header">Proveedor</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=tbl_proveedor&a=Crud">Agregar Proveedor</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Colonia</th>
            <th>Numero de Calle</th>
            <th>Nombre de la Calle</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->ciudad; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->correo; ?></td>
            <td><?php echo $r->colonia; ?></td>
            <td><?php echo $r->num_calle; ?></td>
            <td><?php echo $r->nom_calle; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=tbl_proveedor&a=Crud&idproveedor=<?php echo $r->idproveedor; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=tbl_proveedor&a=Eliminar&idproveedor=<?php echo $r->idproveedor; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
