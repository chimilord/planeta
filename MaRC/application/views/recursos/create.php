<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Recursos</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><?php echo anchor('recursos/', 'Recursos'); ?><span class="divider">/</span></li>
        <li class="active">Crear recurso</li>
    </ul>

    <div class="span6">

        <?php echo form_open("sitios/create", array("class" => "form-horizontal")); ?>

        <fieldset>
            <legend>Crear</legend>

            <div class="control-group">
                <?php echo form_label("Sitio", "sitio", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($sitio); ?>
                </div>
            </div>

            <div class="control-group">
                <?php echo form_label("Contenido", "contenido", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_textarea($contenido); ?>
                </div>
            </div>

            <div class="control-group">
                <?php echo form_label("Id", "domId", array("class" => "control-label")); ?>
                <div class="controls">
                    <?php echo form_input($domId); ?>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <?php
                    $data = array(
                        "name" => "create",
                        "id" => "create",
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