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
              <?php if(empty($_SESSION['login'])){
                echo"<a href='login.php'>Login</a>";
              } elseif(isset($_SESSION['login'])){
               ?>
               <?php 
               if($_SESSION['login']['rechten'] == "admin"){
                 ?>
                 <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php  echo $_SESSION['login']['email']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="account.php">Account</a></li>
                      <li><a href="cursus_toevoegen.php">Cursus toevoegen</a></li>
                      <li><a href="cursus_overzicht_admin.php">Cursus overzicht</a></li>
                      <li><a href="schip_toevoegen.php">Schip toevoegen</a></li>
                      <li><a href="schip_overzicht.php">Schip overzicht</a></li>
                      <li><a href="gebruiker_overzicht.php">Gebruiker overzicht</a></li>
                      <li><a href="inschrijving_overzicht.php">Inschrijvingen</a></li>
                    </ul>
                  </li>
                </ul>
                <?php } else { ?>
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php  echo $_SESSION['login']['email']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="account.php">Account</a></li>
                      <li><a href="inschrijving_overzicht.php">Inschrijvingen</a></li>
                    </ul>
                  </li>
                </ul>
                <?php }  } ?>
              </li>
              <li>
                <?php if(empty($_SESSION['login'])){
                  echo "<a href='register.php'>Registreren</a>";
                }
                ?>
              </li>
              <li>
                <?php if(isset($_SESSION['login'])){
                  echo "<a href='logout.php'>Logout</a>";
                } ?>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>