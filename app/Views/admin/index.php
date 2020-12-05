<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2">Available Books</h1>
      <a href="<?= base_url('admin/create') ?>" class="btn btn-primary mb-3">Tambah Buku</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Kode</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($book as $b) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><img src="/images/<?= $b['sampul'] ?>" class="sampul" alt="<?= $b['sampul'] ?>"></td>
              <td><?= $b['judul'] ?></td>
              <td><?= $b['pengarang'] ?></td>
              <td><?= $b['kode'] ?></td>
              <td><a href="" class="btn btn-success">Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<?= $this->endSection(); ?>