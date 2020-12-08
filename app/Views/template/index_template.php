<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS in here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/books.css">

    <title><?= $title ?></title>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline my-2 my-lg-0" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari buku..." aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
        <ul class="navbar-nav ml-auto">
            <?php if ((session()->has('login') && session()->get('login') == TRUE) && session()->get('role') == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/logout') ?>">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
    <?= $this->renderSection('content'); ?>
</body>

</html>