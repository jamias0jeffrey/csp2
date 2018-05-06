
<!--Navbar 1-->
<nav class="navbar navbar-expand-lg navbar-dark elegant-color">

    <!-- Navbar brand -->
    <a class="navbar-brand ml-2" href="#">Pure Tech</a>
    <div class="ml-auto d-none d-md-block">
        <ul class="navbar-nav ml-auto">
            <a class="navbar-brand white-text">Our Partners:</a>

            <li class="nav-item">
                <a class="nav-link partner-links" href="#">Pure Food</a>
            </li>

            <li class="nav-item partner-links">
                <a class="nav-link partner-links" href="#">Pure Ganics</a>
            </li>

            <li class="nav-item partner-links">
                <a class="nav-link partner-links" href="#">Pure Style</a>
            </li>

            <li class="nav-item partner-links">
                <a class="nav-link" href="#">Pure Tools</a>
            </li>

            <li class="nav-item partner-links">
                <a class="nav-link" href="#">Pure Cafe</a>
            </li>
        </ul>
    </div>

</nav>
<!-- End of Navbar 1-->

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

           
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
        </ul>
        <!-- Links -->

        <form class="form-inline">
            <div class="md-form mt-0">
                <ul class="navbar-nav mr-auto">
 
                    <?php
                        if (!isset($_SESSION['user'])) {
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
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php
                                            if(isset($_SESSION["user"])){
                                                echo $_SESSION["user"];
                                            }
                                        ?>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Manage Account</a>
                                        <a class="dropdown-item" href="#">Orders</a>
                                        <a class="dropdown-item" href="#">Wishlist</a>
                                        <a class="dropdown-item" href="./partials/session_logout.php">Logout</a>
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






