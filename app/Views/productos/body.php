<?php echo $this->extend("planti
lla/layout"); ?>
<?php echo $this->section("contenido"); ?>

<h2>productos</h2>

<table class="tabla">
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


            </tr>

        <?php endforeach; ?>


        </tbody>


    </thead>

</table>
<?php echo $this->endsection(); ?>
