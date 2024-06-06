<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>

<h1>Products</h1>
<?php foreach ($products as $product): ?>
    <div>
        <h2><?php echo $product['name']; ?></h2>
        <p>Price: <?php echo $product['price']; ?></p>
        <form method="post" action="<?php echo site_url('cart/add'); ?>">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
            <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
<?php endforeach; ?>

<h1>Your Cart</h1>
<?php if ($cart = \Config\Services::cart()->contents()): ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $item): ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td>
                        <form method="post" action="<?php echo site_url('cart/update'); ?>">
                            <input type="number" name="qty<?php echo $item['rowid']; ?>" value="<?php echo $item['qty']; ?>">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td><?php echo $item['price']; ?></td>
                    <td><?php echo $item['subtotal']; ?></td>
                    <td>
                        <a href="<?php echo site_url('cart/remove/' . $item['rowid']); ?>">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Total: <?php echo \Config\Services::cart()->total(); ?></p>
    <a href="<?php echo site_url('cart/clear'); ?>">Clear Cart</a>
<?php else: ?>
    <p>Your cart is empty</p>
<?php endif; ?>

</body>
</html>