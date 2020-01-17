<?php 
function isActive(string $site): string {
	return (strpos($_SERVER['HTTP_REFERER'], $site) ? 'active' : '');
}
?>

    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">Jedzonko</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link <?php echo isActive('index'); ?>" href="index.html">Strona główna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo isActive('menu'); ?>" href="menu.html">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo isActive('contact'); ?>" href="contact.html">Kontakt</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>