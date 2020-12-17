<header>
    <a class="logo" href="<?php echo BASE_URL . '/index.php' ?> " style="text-decoration: none">
        <h1 class="logo-text"><span><!--Wits-->BITS</span>Support</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="">
        <?php if(isset($_SESSION['username'])): ?>
            <li>
                <a href="#" style="color: white; display: block; padding: 21px; font-size: 1.1em; text-decoration: none">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: 0.8em"></i>
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL. '/logout.php'; ?>" CLASS="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>

