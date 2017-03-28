<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
}
?>
<?php
include("querys/query.php");
?>
    <!DOCTYPE html>
    <html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <title>Administración</title>
    </head>

    <body>
        <?php
        include("menu.php");
        ?>
        <div class="container">
            <div class="page-header">
                <h2>Administración del Sistema Estatal</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab">Datos Informativos</a></li>
                                <li><a href="#tab2default" data-toggle="tab">Variables</a></li>
                                <li><a href="#tab3default" data-toggle="tab">Factores</a></li>
                                <li><a href="#tab4default" data-toggle="tab">Estados</a></li>
                                <li><a href="#tab5default" data-toggle="tab">Usuarios</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">
                                    <div class="col-sm-6">
                                        <h3>Registro de Información de variables</h3>
                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                            <label>Variable:</label><br>
                                            <select class="form-control">
                                            <option>POBLACIÓN</option>
                                            <option>PEA</option>
                                        </select><br>
                                            <label>Estado:</label><br>
                                            <select class="form-control">
                                            <option>COAHUILA</option>
                                        </select><br>
                                            <label>Año:</label><br>
                                            <input type="password" class="form-control" name="password" placeholder="Año de la información" required><br>
                                            <label>Valor total:</label><br>
                                            <input type="text" class="form-control" name="total" placeholder="Valor total de la variable"><br>
                                            <label>Fuente:</label><br>
                                            <input type="text" class="form-control" name="fuente" placeholder="Fuente donde se consultó la información, por ejemplo (INEGI)"><br> Importar desde Excel: <input name="excel" type="file" class="form-control" /><b style="color:darkred">Nota:</b> Si va a seleccionar archivo de Excel, verifique que lleve los mismos campos que están en el formulario (Sin títulos) para evitar cualquier problema de importación. <a> Ver imágen de ejemplo</a><br><br>
                                            <button type="submit" class="btn btn-success" name="guardar"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
                                        </form>
                                    </div>
                                    <?php
                                    include("listados/datosvariables.php");
                                    ?>
                                </div>
                                <div class="tab-pane fade" id="tab2default">
                                    <div class="col-sm-6">
                                        <h3>Registro de Variables</h3>
                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                            <label>Código de Variable: </label><br>
                                            <input type="text" name="codv" class="form-control" required><br>
                                            <label>Variable: </label><br>
                                            <input type="text" name="variable" class="form-control" required><br>
                                            <label>Unidad:</label><br>
                                            <select class="form-control" name="unidad" required>
                                            <option value="habitantes">HABITANTES</option>
                                        </select><br>
                                            <label>Factor:</label><br>
                                            <select class="form-control" name="fac" required>
                                            <option value="demografia">DEMOGRAFIA</option>
                                        </select><br>
                                            <button type="submit" class="btn btn-success" name="guardarv"><span class="glyphicon glyphicon-ok"></span>Guardar</button>
                                        </form>
                                    </div>
                                    <?php
                                    include("listados/lstvariables.php");
                                    ?>
                                </div>
                                <div class="tab-pane fade" id="tab3default">
                                    <div class="col-sm-6">
                                        <h3>Registro de Factores</h3>
                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                            <label>Código de Factor: </label><br>
                                            <input type="text" name="codf" class="form-control"><br>
                                            <label>Nombre del Factor: </label><br>
                                            <input type="text" name="factor" class="form-control"><br>
                                            <button type="submit" class="btn btn-success" name="guardarf"><span class="glyphicon glyphicon-ok"></span>Guardar</button>
                                        </form>
                                    </div>
                                    <?php
                                include("listados/lstfactores.php");
                                ?>
                                </div>
                                <div class="tab-pane fade" id="tab4default">
                                    <div class="col-sm-6">
                                        <h3>Registro de Estados</h3>
                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                            <label>Código del Estado:</label><br>
                                            <input type="text" class="form-control" name="code" placeholder="Código del Estado" required><br>
                                            <label>Estado:</label><br>
                                            <input type="text" class="form-control" name="estado" placeholder="Nombre del Estado" required><br>
                                            <button type="submit" class="btn btn-success" name="guardare"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
                                        </form>
                                    </div>
                                    <?php
                                include("listados/lstestados.php");
                                ?>
                                </div>
                                <div class="tab-pane fade" id="tab5default">
                                    <div class="col-sm-6">
                                        <h3>Registro de Usuarios</h3>
                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                            <label>Nombre:</label><br>
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required><br>
                                            <label>Correo Electrónico:</label><br>
                                            <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required><br>
                                            <label>Usuario:</label><br>
                                            <input type="text" class="form-control" name="usuario" placeholder="Nombre de Usuario" required><br>
                                            <label>Contraseña:</label><br>
                                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required><br>
                                            <label>Tipo de Usuario:</label><br>
                                            <select class="form-control" name="tipo" required>
                                        <option value="Capturista">Capturista</option>
                                        <option value="Estandar">Estandar</option>
                                        <option value="Administrador">Administrador</option>
                                    </select><br>
                                            <button type="submit" class="btn btn-success" name="guardar"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
                                        </form>
                                    </div>
                                    <?php
                                    include("listados/lstusers.php");
                                    ?>          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    include("footer.php");
    ?>
    </body>

    </html>