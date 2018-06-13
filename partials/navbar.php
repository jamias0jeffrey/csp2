<!-- Navbar 2 -->
<nav class="navbar navbar-expand-lg navbar-dark primary-color scrolling-navbar" id="mainnav">

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

<!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">

           
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
                <?php
                    if (isset($_SESSION['cart'])) {
                        echo '
                            <a class="nav-link" href="cart.php"><span class="zzz">Cart <strong style="color:lightgreen;">( '.$_SESSION['item_count'].' )</strong></span></a>
                        ';
                    } else {
                        echo '
                            <a class="nav-link" href="cart.php">Cart</a>
                        ';
                    }
                ?>
            </li>
        </ul>
        <!-- Links -->

        <form class="form-inline">
            <div class="md-form mt-0">
                <ul class="navbar-nav mr-auto">
 
                    <?php
                        if (!isset($_SESSION['current_user'])) {
                            echo '

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#loginModal">Log-in</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#registerModal">Signup</a>
                                </li>
                            ';
                        } else {
                            echo '

                                <!-- Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                                        .$_SESSION['current_user'].
                                            
                                    '</a>

                                    <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="./account_details.php">Manage Account</a>
                                        <a class="dropdown-item" href="./order_history.php">Order History</a>
                                        <a class="dropdown-item" href="./lib/session_logout.php">Logout</a>
                                    </div>
                                </li>

                            ';
                        }
                    ?>

                 
                    
                </ul>

            </div>
        </form>
    </div>
    <!-- Collapsible content -->
</nav>
<!-- End of Navbar 2 -->



<?php
    require_once "./partials/login.php";
?>

<?php
    require_once "./partials/signup.php";
?>






