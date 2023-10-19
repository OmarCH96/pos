<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4"><?php echo $titulo; ?></h4>
                        <?php \Config\Services::validation() -> listErrors(); ?>
                        <form method="POST" action="<?php echo base_url(); ?>productos/actualizar" autocomplete="off">
                        <?php csrf_field(); ?>
                        <input type="hidden" id="id" name="id" value="<?php echo $productos['id']; ?>" />
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Codigo </label>
                                        <input type="text" class="form-control" id="codigo" name="codigo" autofocus value=" <?php echo $productos['codigo']; ?>">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Nombre </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value=" <?php echo $productos['nombre']; ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                <div class="col-12 col-sm-6">
                                        <label for=""> Unidad </label>
                                        <select class="form-control" name="id_unidad" id="id_unidad" required>
                                            <option value="">Seleccionar unidad</option>
                                            <?php foreach($unidades as $unidades){ ?>
                                                <option value="<?php echo $unidades['id']; ?>" <?php if($unidades['id'] == $productos['id_unidad']){
                                                    echo 'selected';
                                                } ?> > <?php echo $unidades['nombre']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Categorias </label>
                                        <select class="form-control" name="id_categoria" id="id_categoria" required>
                                            <option value="">Seleccionar categoria</option>
                                            <?php foreach($categorias as $categorias){ ?>
                                                <option value="<?php echo $categorias['id']; ?>" <?php if($categorias['id'] == $productos['id_categoria']){
                                                    echo 'selected';
                                                } ?>> <?php echo $categorias['nombre']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Precio venta </label>
                                        <input type="text" class="form-control" id="precio_venta" name="precio_venta"  value=" <?php echo $productos['precio_venta']; ?>">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Precio compra </label>
                                        <input type="text" class="form-control" id="precio_compra" name="precio_compra" value=" <?php echo $productos['precio_compra']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Stock minimo </label>
                                        <input type="text" class="form-control" id="stock_minimo" name="stock_minimo"  value=" <?php echo $productos['stock_minimo']; ?>">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for=""> Contable </label>
                                        <select class="form-control" id="inventariable" name="inventariable" > 
                                            <option value="1" <?php if($productos['inventariable'] == 1){
                                                echo 'selected';
                                                } ?> >Si</option>
                                            <option value="0" <?php if($productos['inventariable'] == 0){
                                                echo 'selected';
                                                } ?>>No</option>
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