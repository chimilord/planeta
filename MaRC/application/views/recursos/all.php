<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Recursos</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li class="active">Recursos</li>
    </ul>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Uuid</th>
                <th>Website</th>
                <th>Contenido</th>
                <th>Dom id</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recursos as $recurso): ?>
                <tr>
                    <td><?php echo $recurso->uuid; ?></td>
                    <td><?php echo $recurso->sitio; ?></td>
                    <td><?php echo $recurso->contenido; ?></td>
                    <td><?php echo $recurso->domId; ?></td>
                    <td><a href="javascript:void(0);" id="<?php echo $recurso->id; ?>" class="state-resource" data-estatus="<?php echo $recurso->estatus; ?>"><?php echo ($recurso->estatus) ? 'Activo' : 'Inactivo'; ?></a></td>
                    <td><?php echo anchor("sitios/edit/" . $recurso->id, 'Editar'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><?php echo anchor("sitios/create", "Crear recurso", array("class" => "btn btn-info btn-small")); ?></p>

</div>