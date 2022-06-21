<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2 PBWL</title>
    <link  rel="stylesheet" href="<?php echo AST; ?>/css/bootstrap.min.css">
  </head>

  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URL; ?>">Tugas 2 PBWL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>/golongan">Golongan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>/users">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>/pelanggan">Pelanggan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Layanan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Contact Us</a></li>
            <li><a class="dropdown-item" href="#">More Information</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>	  

    <div class="container mt-3">
        <?php require_once ROOT . "app/views/" . $view . ".php"; ?>
    </div>
	  
    <script src="<?php echo AST; ?>/js/bootstrap.bundle.js"></script>
  </body>

</html>