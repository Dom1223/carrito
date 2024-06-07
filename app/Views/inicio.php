<?php echo $this->extend("plantilla/layout"); ?>

<?php echo $this->section("contenido"); ?>
<head>

<link rel="stylesheet" href="<?= base_url('css/estiloinicio.css'); ?>">

</head>

    <main id="main-content">
        <section id="home">
            <h2>Bienvenidos a nuestra tienda</h2>
            <p>Encuentra los mejores productos a los mejores precios.</p>
        </section>
        <section id="products">
        <div class="product-list">
        <?php foreach($productos as $productos) :?>
            <article class="product-item">
                    <img src="product1.jpg" alt="Producto 1">
                    <h3><?php echo $productos->nombre; ?></h3>
                    <p>Descripción del producto 1.</p>
                    <p>Precio: $<?php echo $productos->precio; ?>.00</p>
                    <button class="add-to-cart" name="btnAccion" value="agregar" type="submit">Añadir al carrito</button>
                </article>
                <!--
                <tr>
                <td><?php echo $productos->nombre; ?></td>
                <td><?php echo $productos->precio; ?></td>
                <td><?php echo $productos->stock; ?></td>
                -->

                <?php endforeach; ?>
        </div>
         </section>
        <!--
        <section id="products">
            <h2>Productos Destacados</h2>
            <div class="product-list">
                <article class="product-item">
                    <img src="product1.jpg" alt="Producto 1">
                    <h3>Producto 1</h3>
                    <p>Descripción del producto 1.</p>
                    <p>Precio: $10.00</p>
                    <button class="add-to-cart">Añadir al carrito</button>
                </article>
                <article class="product-item">
                    <img src="product2.jpg" alt="Producto 2">
                    <h3>Producto 2</h3>
                    <p>Descripción del producto 2.</p>
                    <p>Precio: $15.00</p>
                    <button class="add-to-cart">Añadir al carrito</button>
                </article>
                 
            </div>
        </section>
        -->
        <section id="about">
            <h2>Sobre Nosotros</h2>
            <p>Información sobre la tienda.</p>
        </section>

        <section id="contact">
            <h2>Contacto</h2>
            <form action="submit_form.php" method="post" class="contact-form">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit" class="submit-button">Enviar</button>
            </form>
        </section>
    </main>

    


<?php echo $this->endsection(); ?>
