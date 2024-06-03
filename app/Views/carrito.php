<?php echo $this->extend("plantilla/layout"); ?>
<?php echo $this->section("contenido"); ?>

<header class="bg-dark text-white text-center py-3">
        <h1>Carrito de Compras</h1>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Productos en el Carrito</h2>
                <div class="cart-items">
                    <div class="cart-item">
                        <img src="product1.jpg" alt="Producto 1" class="cart-item-image">
                        <div class="cart-item-details">
                            <h3>Producto 1</h3>
                            <p>Precio: $10.00</p>
                            <button class="btn btn-danger remove-from-cart">Eliminar</button>
                        </div>
                    </div>
                    <!-- Más productos en el carrito -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="cart-summary">
                    <h2>Resumen del Carrito</h2>
                    <div class="cart-total">
                        <p>Total: $50.00</p>
                    </div>
                    <button class="btn btn-primary checkout-btn">Proceder al Pago</button>
                </div>
            </div>
        </div>
    </main>
<?php echo $this->endsection(); ?>
