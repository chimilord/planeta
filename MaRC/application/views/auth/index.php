<div class="span10 nomargin well" id="section-actions">

    <div class="section-title">
        <h3>Dashboard</h3>
    </div>

    <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li class="active">Dashboard</li>
    </ul>

    <div class="row-fluid">
        <div class="span6">
            <div class="widget-box">
                <div class="widget-title">
                    <h5>Sitios</h5>
                </div>
                <div class="widget-content">
                    <div class="row-fluid">
                        <div class="span12" id="sites">
                            <div class="row-fluid">
                                <div class="span4">
                                    <div class="site marquez" data-site="marquez" 
                                         data-url="http://garciamarquez.com.mx/"
                                         data-name="Gabriel García Márquez">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="site mastretta" data-site="mastretta" 
                                         data-url="http://www.angelesmastretta.com/"
                                         data-name="Ángeles Mastretta">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="site sabines" data-site="sabines" 
                                         data-url="http://www.losamorosos.com.mx/"
                                         data-name="Jaime Sabines">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span4">
                                    <div class="site aguirre" data-site="aguirre"
                                         data-url="http://www.eugenioaguirre.com.mx/"
                                         data-name="Eugenio Aguirre">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="site hocking" data-site="hocking"
                                         data-url="http://www.amandahocking.com.mx/"
                                         data-name="Amanda Hocking">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="site taiboII" data-site="taiboII"
                                         data-url="http://www.pacoignaciotaibo2.com/"
                                         data-name="Paco Ignacio Taibo II">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span4">
                                    <div class="site benitez" data-site="benitez"
                                         data-url="http://www.jjbenitez.com.mx/"
                                         data-name="JJ Benítez">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="site caton" data-site="caton"
                                         data-url="http://www.caton.com.mx/"
                                         data-name="Armando Fuentes Aguirre">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="site amkie" data-site="amkie"
                                         data-url="http://www.gothicsoul.mx/"
                                         data-name="Lorena Amkie">
                                        <div class="site-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span6" id="current-site">
            <div class="widget-box">
                <div class="widget-title">
                    <h5>Administración</h5>
                </div>
                <div class="widget-content">
                    <p>Autor: <span class="current-name"></span></p>
                    <p>Sitio: <span class="current-url"></span></p>
                    <p>Clave: <span class="current-site"></span></p>

                    <div class="">
                        <?php echo anchor('sitios/create', 'Agregar contenido', array('class' => 'btn btn-info')); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span6">
            <div class="widget-box">
                <div class="widget-title">
                    <h5>Actualizaciones</h5>
                </div>
                <div class="widget-content">

                </div>
            </div>
        </div>
    </div>

</div>
