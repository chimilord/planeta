<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Usuarios</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li class="active">Usuarios</li>
    </ul>

    <div id="infoMessage"><?php echo $message; ?></div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th><?php echo "Nombre" ?></th>
                <th><?php echo "Apellidos" ?></th>
                <th><?php echo "Username" ?></th>
                <th><?php echo "E-mail" ?></th>
                <th><?php echo "Grupos" ?></th>
                <th><?php echo "Estado" ?></th>
                <th><?php echo "Acciones" ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->first_name; ?></td>
                    <td><?php echo $user->last_name; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td>
                        <?php foreach ($user->groups as $group): ?>
                            <?php echo anchor("auth/edit_group/" . $group->id, $group->name); ?><br />
                        <?php endforeach ?>
                    </td>
                    <td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, 'Activo') : anchor("auth/activate/" . $user->id, 'Inactivo'); ?></td>
                    <td><?php echo anchor("auth/edit_user/" . $user->id, 'Editar'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <?php echo anchor("auth/create_user", "Crear usuario", array("class" => "btn btn-info btn-small")) ?>
        <?php echo anchor("auth/create_group", "Crear grupo", array("class" => "btn btn-info btn-small")) ?>
    </p>

</div>