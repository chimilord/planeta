<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Recursos</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><?php echo anchor('sitios/recursos', 'Recursos'); ?><span class="divider">/</span></li>
        <li class="active">Editar recurso</li>
    </ul>

    <div class="span6">
        
        <form class="form-horizontal" id="edit-resource">
            <fieldset>
                <legend>Editar</legend>

                <div class="control-group">
                    <label class="control-label" for="sitio">Sitio</label>
                    <div class="controls">
                        <input type="text" id="sitio" name="sitio" value="<?php echo $recurso->sitio; ?>">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="contenido">Contenido</label>
                    <div class="controls">
                        <textarea type="textarea" id="contenido" rows="10" cols="80" name="contenido">
                            <?php echo trim($recurso->contenido); ?>
                        </textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="domId">Dom id</label>
                    <div class="controls">
                        <input type="text" id="domId" name="domId" value="<?php echo $recurso->domId; ?>">
                    </div>
                </div>

                <input type="hidden" id='recurso_id' name="recurso_id" value="<?php echo $recurso->id; ?>">

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-info btn-small" id="update">Actualizar</button>
                        <button type="button" class="btn btn-info btn-small" id="cancel">Cancelar</button>
                    </div>
                </div>

            </fieldset>

        </form>
    </div>

</div>
