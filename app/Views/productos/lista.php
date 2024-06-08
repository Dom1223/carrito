<?=$cabezera?>
<a href="<?=base_url('crear')?>" class="btn btn-primary">añade un producto</a>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>imagen</th>
                    <th>nombre</th>
                    <th>precio</th>
                    <th>stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
            <?php foreach($productos as $productos) :?>
                <tr>
                <td><img src="<?php echo $productos->imagen; ?>" alt=""  width="100px" height="100px"></td>
                <td><?php echo $productos->nombre; ?></td>
                <td><?php echo $productos->precio; ?></td>
                <td><?php echo $productos->stock; ?></td>
                <td>
                        <a href="" class="btn btn-primary" type="button">Editar</a>
                        <a href="<?=base_url('borrar/'.$productos->nombre);?>" class="btn btn-danger" type="button">Borrar</a>
                    
                    </td>
                </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
        <?php echo $this->endsection(); ?>
<?=$pie?>