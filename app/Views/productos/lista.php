<?=$cabezera?>
<a href="<?=base_url('crear')?>">Crear un libro</a>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    
                    <th>nombre</th>
                    <th>precio</th>
                    <th>stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
            <?php foreach($productos as $productos) :?>
                <tr>
                <td><?php echo $productos->nombre; ?></td>
                <td><?php echo $productos->precio; ?></td>
                <td><?php echo $productos->stock; ?></td>
                <td>Editar/

                        <a href="<?=base_url('borrar/'.$productos->nombre);?>" class="btn btn-danger" type="button">Borrar</a>
                    
                    </td>
                </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
        <?php echo $this->endsection(); ?>
<?=$pie?>