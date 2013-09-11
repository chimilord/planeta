<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Usuarios</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><?php echo anchor('auth/users', 'Usuarios'); ?><span class="divider">/</span></li>
        <li class="active">Desactivar usuario</li>
    </ul>

    <div class="span6">
        <?php echo form_open("auth/deactivate/" . $user->id); ?>

        <fieldset>
            <legend>Desactivar</legend>

            <div style="padding-bottom: 15px;">
                <?php echo sprintf('¿Está seguro que desea desactivar al usuario \'%s\'?', $user->username); ?>
            </div>

            <label class="radio">
                <input type="radio" name="confirm" id="optionsRadios1" value="yes" checked>
                Confirmar
            </label>
            <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Cancelar
            </label>

            <?php echo form_hidden($csrf); ?>
            <?php echo form_hidden(array('id' => $user->id)); ?>

            <div class="control-group">
                <div class="controls">
                    <?php
                    $data = array(
                    "name" => "submit",
                    "type" => "submit",
                    "content" => "Aceptar",
                    "class" => "btn btn-info"
                    );
                    echo form_button($data);
                    ?>
                </div>
            </div>

        </fieldset>

        <?php echo form_close(); ?>
    </div>

</div>
