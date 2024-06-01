<?=$cabezera?>
    Formulario crear

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del productos</h5>
            <p class="carda-text">
            <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
    
        <div class="form-group">
            <label for="precio">Precio</label>
            <input id="precio" class="form-control" type="text" name="precio">
        </div>
    
        <div class="form-group">
            <label for="stock">stock</label>
            <input id="stock" class="form-control" type="text" name="stock">
        </div>
    
        <div class="form-group">
            <label for="imagen">imagen</label>
            <input id="imagen" class="form-control-file" type="file" name="imagen">
        </div>
        <button class="btn btn-succes" type="submit">guardar</button>
        </form>
                </p>
            </div>
        </div>

    

<?=$pie?>