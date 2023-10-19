<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4"><?php echo $titulo; ?></h4>

                        <?php if (isset($validation )){ ?>
                            <div class="alert alert-danger">
                            <?php echo $validation -> listErrors(); ?>
                            </div>
                        <?php } ?>

                        <form method="POST" action="<?php echo base_url(); ?>clientes/actualizar" autocomplete="off">
                        <input type="hidden" value="<?php  echo $datos ['id']; ?>" name="id" />  
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Nombre </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php  echo $datos ['nombre']; ?>" require>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Direccion </label>
                                        <input type="text" class="form-control" id="direccion" name="direccion" value="<?php  echo $datos ['direccion']; ?>" require>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Correo </label>
                                        <input type="text" class="form-control" id="correo" name="correo" value="<?php  echo $datos ['correo']; ?>" require>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Telefono </label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php  echo $datos ['telefono']; ?>" require>
                                    </div>
                                </div>
                            </div>

                            <a href="<?php echo base_url(); ?>clientes" class="btn btn-primary">Regresar</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                        </div>
                    </div>
                </main>