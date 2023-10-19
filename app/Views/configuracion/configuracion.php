<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4"><?php echo $titulo; ?></h4>

                        <?php if (isset($validation )){ ?>
                            <div class="alert alert-danger">
                            <?php echo $validation -> listErrors(); ?>
                            </div>
                        <?php } ?>
                        <form method="POST" action="<?php echo base_url(); ?>unidades/insertar" autocomplete="off">
                        <?php csrf_field(); ?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Nombre de la tienda </label>
                                        <input type="text" class="form-control" id="tienda_nombre" name="tienda_nombre" value="<?php echo $nombre['valor']; ?>" autofocus >
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Tienda RFC </label>
                                        <input type="text" class="form-control" id="tienda_rfc" name="tienda_rfc" value="<?php echo $rfc['valor']; ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Telefono </label>
                                        <input type="text" class="form-control" id="tienda_telefono" name="tienda_telefono" value="<?php echo $telefono['valor']; ?>" autofocus >
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Correo </label>
                                        <input type="text" class="form-control" id="tienda_email" name="tienda_email" value="<?php echo $email['valor']; ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Direccion de la Tienda </label>
                                        <textarea type="text" class="form-control" id="tienda_direccion" name="tienda_direccion"><?php echo $direccion['valor']; ?></textarea>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Leyenda </label>
                                        <textarea type="text" class="form-control" id="ticket" name="ticket"><?php echo $ticket['valor']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <a href="<?php echo base_url(); ?>unidades" class="btn btn-primary">Regresar</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                        </div>
                    </div>
                </main> 