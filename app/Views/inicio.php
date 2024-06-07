<?php echo $this->extend("plantilla/layout"); ?>

<?php echo $this->section("contenido"); ?>
<head>
<style>
#main-content {
    padding: 20px;
    max-width: 1200px;
    margin: auto;
    background-color: #f4f4f4;
}

#main-content section {
    margin-bottom: 40px;
}

#home {
    background: url('banner.jpg') no-repeat center center/cover;
    color: #b61818;
    text-align: center;
    padding: 60px 20px;
}

#home h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

#products .product-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.product-item {
    background-color: #fff;
    border: 1px solid #ddd;
    margin: 10px;
    padding: 20px;
    text-align: center;
    flex: 0 1 30%;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease-in-out;
}

.product-item:hover {
    transform: scale(1.05);
}

.product-item img {
    max-width: 100%;
    height: auto;
}

.product-item h3 {
    margin: 10px 0;
    font-size: 1.2em;
}

.product-item p {
    margin: 10px 0;
}

.add-to-cart {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.add-to-cart:hover {
    background-color: #555;
}

#about, #contact {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.contact-form {
    display: flex;
    flex-direction: column;
}

.contact-form label {
    margin: 10px 0 5px;
}

.contact-form input, .contact-form textarea {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 1em;
}

.submit-button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.submit-button:hover {
    background-color: #555;
}

</style>
</head>

<main>
    <section id="home">
        <h2>Bienvenidos a Nuestra Tienda</h2>
        <p>Encuentra los mejores productos aquí.</p>
    </section>

    <section id="products">
        <h2>Productos Destacados</h2>
        <div class="product-list">
            <?php foreach ($productos as $producto): ?>
                <article class="product-item">
                    <img src="product.jpg" alt="<?= $producto['Nombre'] ?>">
                    <h3><?= $producto['Nombre'] ?></h3>
                    <p><?= $producto['Descripcion'] ?></p>
                    <p>Precio: $<?= $producto['precio'] ?></p>
                    <a href="<?= base_url('/carrito/agregar/'.$producto['id']) ?>" class="add-to-cart">Añadir al carrito</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

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
