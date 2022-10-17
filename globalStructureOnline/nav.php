<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item <?php if ($pg == "Home") {
                                      echo "active";
                                    } else {
                                      echo "";
                                    } ?>">
                  <a href="home.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#_">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#_">Pricing</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>



<!-- Social Icons-->

<ul class="social-ul">
  <li><a href="#_ "><i class="fab fa-facebook socialIcons "></i></a></li>
  <li><a href="#_ "><i class="fab fa-twitter socialIcons "></i></a></li>
  <li><a href="#_ "><i class="fab fa-youtube socialIcons "></i></a></li>
  <li><a href="#_ "><i class="fab fa-linkedin socialIcons "></i></a></li>
  <li><a href="#_ "><i class="fab fa-instagram socialIcons "></i></a></li>
</ul>