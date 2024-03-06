<?php session_start();
//the user has clicked on something 
if (isset($_GET['item'])) {
    // TODO: Save selected items into a shopping cart (array)
    // which is saved in the session.
    var_dump($_GET);

    // get the shopping cart out of session, or create it.
    if (isset($_SESSION['cart'])) {
        // we have a cart, so get it
        $cart = $_SESSION['cart'];
    } else {
        // create it
        $cart = array();
    }
    //append
    cart[] = $_GET['item'];

    // arrays can move; put the array back into the session
    $_SESSION['cart'] = $cart;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Select an item to add to your cart:</h2>
        <ul>
            <!-- select * from items -->
            <!-- TODO: replace hard-coded items with those from db -->
            <li><a href="index.php?item=milk">milk</a></li>
            <li><a href="index.php?item=bread">bread</a></li>
            <li><a href="index.php?item=eggs">eggs</a></li>
        </ul>
            
        <hr/>
        <p>Cart Contents</p>
        <?php
        // TODO: display the cart contents
        foreach ($cart as $thing) {
            echo $thing
        }
        ?>
        <a href='admin_menu.php'>Administrator Menu</a>
    </body>
</html>
