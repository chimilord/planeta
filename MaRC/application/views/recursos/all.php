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
                <th><?php echo "Uuid" ?></th>
                <th><?php echo "Website" ?></th>
                <th><?php echo "Contenido" ?></th>
                <th><?php echo "domId" ?></th>
                <th><?php echo "Acciones" ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recursos as $recurso): ?>
                <tr>
                    <td><?php echo $recurso->uuid; ?></td>
                    <td><?php echo $recurso->sitio; ?></td>
                    <td><?php echo $recurso->contenido; ?></td>
                    <td><?php echo $recurso->domId; ?></td>
                    <td>
                        <?php echo anchor("resources/edit/" . $recurso->id, 'Editar'); ?> | 
                        <?php echo anchor("resources/delete/" . $recurso->id, 'Eliminar'); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>