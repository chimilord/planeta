<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Recursos</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><?php echo anchor('sitios/recursos', 'Recursos'); ?><span class="divider">/</span></li>
        <li class="active">Crear recurso</li>
    </ul>

    <div class="span6">

        <form class="form-horizontal" id="create-resource">
            <fieldset>
                <legend>Crear</legend>

                <div class="control-group">
                    <label class="control-label" for="sitio">Sitio</label>
                    <div class="controls">
                        <input type="text" id="sitio" value="" name="sitio">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="contenido">Contenido</label>
                    <div class="controls">
                        <textarea type="textarea" id="contenido" rows="10" cols="40" name="contenido"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="domId">Id</label>
                    <div class="controls">
                        <input type="text" id="domId" value="" name="domId">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-info" id="create">Crear</button>
                        <button type="button" class="btn btn-info" id="cancel">Cancelar</button>
                    </div>
                </div>

            </fieldset>

        </form>

    </div>
    <div class="span4 errorMessage" id="infoMessage"><?php echo $message; ?></div>

</div>