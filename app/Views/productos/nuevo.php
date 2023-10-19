<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4"><?php echo $titulo; ?></h4>
                        
                        <?php if (isset($validation )){ ?>
                            <div class="alert alert-danger">
                            <?php echo $validation -> listErrors(); ?>
                            </div>
                        <?php } ?>

                        <form method="POST" action="<?php echo base_url(); ?>productos/insertar" autocomplete="off">
                        
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Codigo </label>
                                        <input type="text" class="form-control" id="codigo" name="codigo" autofocus >
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label> Nombre </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre') ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                <div class="col-12 col-sm-6">
                                        <label for=""> Unidad </label>
                                        <select class="form-control" name="id_unidad" id="id_unidad" required>
                                            <option value="">Seleccionar unidad</option>
                                            <?php foreach($unidades as $unidad){ ?>
                                                <option value="<?php echo $unidad['id']; ?>"> <?php echo $unidad['nombre']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Categorias </label>
                                        <select class="form-control" name="id_categoria" id="id_categoria" required>
                                            <option value="">Seleccionar categoria</option>
                                            <?php foreach($categorias as $categoria){ ?>
                                                <option value="<?php echo $categoria['id']; ?>"> <?php echo $categoria['nombre']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Precio venta </label>
                                        <input type="text" class="form-control" id="precio_venta" name="precio_venta" autofocus >
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Precio compra </label>
                                        <input type="text" class="form-control" id="precio_compra" name="precio_compra" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Stock minimo </label>
                                        <input type="text" class="form-control" id="stock_minimo" name="stock_minimo" autofocus >
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Contable </label>
                                        <select class="form-control" id="inventariable" name="inventariable" > 
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <a href="<?php echo base_url(); ?>productos" class="btn btn-primary">Regresar</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                        </div>
                    </div>
                </main>