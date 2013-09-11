<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Roles</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><?php echo anchor('auth/users', 'Usuarios'); ?><span class="divider">/</span></li>
        <li class="active">Crear role</li>
    </ul>

    <div class="span6">
        <?php echo form_open("auth/create_group", array("class" => "form-horizontal")); ?>

        <fieldset>
            <legend>Crear</legend>

            <div class="control-group">
                <?php echo form_label("Role", "group_name", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($group_name); ?>
                </div>
            </div>

            <div class="control-group">
                <?php echo form_label("Descripción", "description", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php
                    $description = array(
                        "name" => "description",
                        "id" => "description",
                        "type" => "text",
                        "class" => "span8"
                    );
                    echo form_input($description);
                    ?>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <?php
                    $data = array(
                        "name" => "create_group",
                        "id" => "create_group",
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
