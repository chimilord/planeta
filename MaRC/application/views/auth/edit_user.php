<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Ususarios</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><?php echo anchor('auth/users', 'Usuarios'); ?><span class="divider">/</span></li>
        <li class="active">Editar usuario</li>
    </ul>

    <div class="span6">
        <?php echo form_open(uri_string()); ?>

        <fieldset>
            <legend>Editar</legend>

            <div class="control-group">
                <?php echo form_label("Nombre", "first_name", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($first_name); ?>
                </div>
            </div>

            <div class="control-group">
                <?php echo form_label("Apellidos", "last_name", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($last_name); ?>
                </div>
            </div>

            <div class="control-group">
                <?php echo form_label("Username", "username", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($username); ?>
                </div>
            </div>

            <div class="control-group">
                <?php echo form_label("Password", "password", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($password); ?>
                </div>
            </div>

            <div class="control-group">
                <?php echo form_label("Confirmar password", "password_confirm", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($password_confirm); ?>
                </div>
            </div>

            <span class="help-block">Roles</span>
            <div class="control-group">
                <?php foreach ($groups as $group): ?>
                    <label class="checkbox">
                        <?php
                        $gID = $group['id'];
                        $checked = null;
                        $item = null;
                        foreach ($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked = ' checked="checked"';
                                break;
                            }
                        }
                        ?>
                        <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                        <?php echo $group['name']; ?>
                    </label>
                <?php endforeach ?>
            </div>

            <?php echo form_hidden('id', $user->id); ?>
            <?php echo form_hidden($csrf); ?>

            <div class="control-group">
                <div class="controls">
                    <?php
                    $data = array(
                        "name" => "edit_user",
                        "id" => "edit_user",
                        "type" => "submit",
                        "content" => "Crear",
                        "class" => "btn btn-info btn-small"
                    );
                    $data_cancel = array(
                        "name" => "cancel_user",
                        "id" => "cancel_user",
                        "type" => "button",
                        "content" => "Cancelar",
                        "class" => "btn btn-info btn-small",
                        "style" => "margin-left: 5px;"
                    );
                    echo form_button($data);
                    echo form_button($data_cancel);
                    ?>
                </div>
            </div>

        </fieldset>

        <?php echo form_close(); ?>
    </div>

    <div class="span4 errorMessage" id="infoMessage"><?php echo $message; ?></div>

</div>
