<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS in here -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/books.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <title><?= $title ?></title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Branding SIPUS -->
      <a class="navbar-brand" href="<?= base_url('/') ?>">SIPUS</a>

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
        </li>

        <!-- Menu Dropdown jika telah login -->
        <?php if (session()->has('login') && session()->get('login') == TRUE) : ?>
          <li class="nav-item dropdown">
            <!-- Nama Menu Dropdown menggunakan nama User-->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
              <?= session()->get('fullname') ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- Ke Halaman Admin/index-->
              <?php if (session()->get('role') == 1) : ?>
                <a class="dropdown-item" href="<?= base_url('/admin'); ?>">Administrator</a>
                <div class="dropdown-divider"></div>
              <?php endif; ?>
              <!--Logout-->
              <a class="dropdown-item" href=" <?= base_url('/logout'); ?>">Logout</a>
            </div>
          </li>
        <?php endif; ?>
      </ul>

      <!-- Searchbar -->
      <form class="form-inline my-2 my-lg-0" method="GET">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari buku..." aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form>
    </div>
  </nav>

  <?= $this->renderSection('content'); ?>
</body>

</html>