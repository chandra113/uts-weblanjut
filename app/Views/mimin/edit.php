<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3"> Form Ubah Data </h2>
            <?= $validation->listErrors(); ?>
            <form action="<?= base_url('/mimin/update/' . $books['id']); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="sampul" class="form-control" id="sampul" name="sampul" autofocus value="<?= $books['sampul']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" autofocus value="<?= $books['judul']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Pengarang" name="pengarang" autofocus value="<?= $books['pengarang']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" name="kode" autofocus value="<?= $books['kode']; ?>">
                    </div>
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection(); ?>