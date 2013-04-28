<?php
$identity = array(
    'name' => 'identity', 'id' => 'identity', 'placeholder' => 'email', 'class' => 'span3',
    'value' => $this->form_validation->set_value('identity'),
    'autofocus' => 'autofocus'
);
$password = array(
    'name' => 'password', 'id' => 'password', 'placeholder' => 'password', 'class' => 'span3'
);
$authLoginForm = array(
    'id' => 'marc-login-form', 'class' => 'marc-form form-horizontal'
);
$submit = array(
    'type' => 'submit', 'content' => 'Login', 'class' => 'btn btn-info'
);
?>
<div class="hero-unit">
    <div class="marc-view-form">
        <h3>Login</h3>
        <p class="note">Por favor ingrese sus credenciales</p>

        <div id="infoMessage" style="display: none;" class="<?php echo $type; ?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $message; ?>
        </div>

        <?php echo form_open("auth/login", $authLoginForm); ?>

        <div class="control-group">
            <div class="controls">
                <?php echo form_input($identity); ?>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <?php echo form_password($password); ?>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <label class="checkbox" for="remember">
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?> Recordar mis datos
                    <span class="separator">·</span>
                    <a href="forgot_password">&iquest;Olvidaste tu contrase&ntilde;a?</a>
                </label>
            </div>
        </div>

        <div class="controls" style="text-align: right; padding-right: 115px;">
            <?php
            echo form_button($submit);
            ?>
        </div>

        <?php echo form_close(); ?>

    </div>
</div>