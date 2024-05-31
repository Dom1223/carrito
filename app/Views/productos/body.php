<?php echo $this->extend("plantilla/layout"); ?>
<?php echo $this->section("contenido"); ?>

<h2>productos</h2>

<table border="1" width="400">
    <thead>
        <th>nombre</th>
        <th>precio</th>
        <th>stock</th>

        <tbody>
        <?php foreach($productos as $producto) : ?>

            <tr>

            <td><?php echo $producto->nombre; ?></td>
            <td><?php echo $producto->precio; ?></td>
            <td><?php echo $producto->stock; ?></td>
            <td>
                <div class="form-button-action">


            </tr>

        <?php endforeach; ?>


        </tbody>


    </thead>

</table>
<?php echo $this->endsection(); ?>
