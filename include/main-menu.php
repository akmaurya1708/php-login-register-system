    <nav class="navbar navbar-expand-md navbar-dark bg-custom fixed-top">
      <div class="container">
        <a class="navbar-brand scroll" href="#">Register and Login System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
          <ul class="navbar-nav ml-auto">
            <?php 
              if (isset($_SESSION['userID'])) {
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="admin">Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-outline-primary" href="php/signout.php">Signout</a>
                </li>
            <?php 
              } else {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Signin</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="register.php">Signup</a>
            </li> 
            <?php } ?>     
                 
          </ul>
        </div>
      </div>
    </nav>