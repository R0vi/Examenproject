    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/logo_def.png" class="navbar_brand_logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if user is gebruiker niet logged in?>
<!-- //////////// -->


                    <li>
                        <a href="info.php">Info</a>
                    </li>
                    <li>
                        <a href="cursus_overzicht.php">Cursussen</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>

                    <li>
                        <a href="register.php">Registreren</a>
                    </li>
<!-- //////////// -->

                <?php else if user is is loggedin ?>

<!-- //////////// -->

                <li>
                    <a href="info.php">Info</a>
                </li>
                <li>
                    <a href="cursus_overzicht.php">Cursussen</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="account.php">Mijn account</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
<!-- //////////// -->
                
<?php sluit ?>
<!-- //////////// -->

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>