<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Roles</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><?php echo anchor('auth/users', 'Usuarios'); ?><span class="divider">/</span></li>
        <li class="active">Editar role</li>
    </ul>

    <div class="span6">

        <?php echo form_open(current_url()); ?>

        <fieldset>
            <legend>Editar</legend>

            <div class="control-group">
                <?php echo form_label("Role", "group_name", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($group_name); ?>
                </div>
            </div>

            <div class="control-group">
                <?php echo lang('Descripción', 'description', array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($group_description); ?>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <?php
                    $data = array(
                        "name" => "edit_user",
                        "id" => "edit_user",
                        "type" => "submit",
                        "content" => "Crear",
                        "class" => "btn btn-info"
                    );
                    $data_cancel = array(
                        "name" => "cancel_user",
                        "id" => "cancel_user",
                        "type" => "button",
                        "content" => "Cancelar",
                        "class" => "btn btn-info",
                        "style" => "margin-left: 15px;"
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