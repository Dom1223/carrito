<?php echo $this->extend("plantilla/layout"); ?>

<?php echo $this->section("contenido"); ?>
<head>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.cart-container {
    padding: 40px 20px;
    max-width: 1200px;
    margin: auto;
    background-color: #ffffff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.cart-header, .cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #dee2e6;
}

.cart-header {
    border-bottom: 2px solid #ced4da;
    font-weight: bold;
    color: #495057;
    text-transform: uppercase;
}

.cart-item:last-child {
    border-bottom: none;
}

.cart-item img {
    max-width: 100px;
    height: auto;
    border-radius: 5px;
    margin-right: 20px;
}

.cart-item div {
    flex: 1;
    text-align: center;
}

.cart-item div:nth-child(1) {
    text-align: left;
}

.cart-item div:nth-child(5) {
    text-align: right;
}

.cart-actions {
    text-align: right;
    margin-top: 20px;
}

.cart-actions a, .cart-actions button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease-in-out;
    border-radius: 5px;
    font-size: 1em;
}

.cart-actions a:hover, .cart-actions button:hover {
    background-color: #0056b3;
}

.total-container {
    display: flex;
    justify-content: flex-end;
    padding: 20px 0;
    font-size: 1.2em;
    font-weight: bold;
    color: #495057;
}
</style>
</head>

<main>
    <section class="cart-container">
        <h2>Carrito de Compras</h2>
        
        <?php if ($carrito): ?>
            <div class="cart-header">
                <div>Producto</div>
                <div>Cantidad</div>
                <div>Precio Unitario</div>
                <div>Total</div>
                <div>Acciones</div>
            </div>
            <?php $total = 0; ?>
            <?php foreach ($carrito as $item): ?>
                <?php $total += $item['precio'] * $item['cantidad']; ?>
                <div class="cart-item">
                <!--    <img src="product.jpg" alt="<?= $item['Nombre'] ?>">
            -->   <div><?= $item['Nombre'] ?></div>
                    <div><?= $item['cantidad'] ?></div>
                    <div>$<?= number_format($item['precio'], 2) ?></div>
                    <div>$<?= number_format($item['precio'] * $item['cantidad'], 2) ?></div>
                    <div><a href="<?= base_url('carrito/eliminar/'.$item['id']) ?>" class="btn btn-primary" class="remove-item">Eliminar</a></div>
                </div>
            <?php endforeach; ?>
            <div class="total-container">
                <div>Total a pagar: $<?= number_format($total, 2) ?></div>
            </div>
            <div class="cart-actions">
                <a href="<?= base_url('/') ?>">Seguir Comprando</a>
                <button class="checkout" onclick="window.location.href='<?php echo base_url('pago'); ?>'">Proceder al Pago</button>
            </div>
        <?php else: ?>
            <p>Tu carrito está vacío.</p>
            <a href="<?= base_url('/') ?>" class="button">Ver Productos</a>
        <?php endif; ?>
    </section>
</main>

<?php echo $this->endsection(); ?>
