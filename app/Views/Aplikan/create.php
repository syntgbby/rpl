<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h2>Tambah Aplikan</h2>

<form action="<?= base_url('aplikan/store'); ?>" method="post">
    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Pendidikan Terakhir</label>
        <input type="text" name="pendidikan_terakhir" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= base_url('aplikan'); ?>" class="btn btn-secondary">Batal</a>
</form>

<?= $this->endSection(); ?>
