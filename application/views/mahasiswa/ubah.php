<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id">NPM</label>
                            <input type="text" class="form-control" id="id" name="npm" value="<?= $mahasiswa['npm']; ?>">
                            <small class=" form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                            <small class=" form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $ju) : ?>
                                <?php if ($ju == $mahasiswa['jurusan']) : ?>

                                <option value="<?= $ju; ?>" selected><?= $ju; ?></option>
                                <?php else : ?>
                                <option value="<?= $ju; ?>"><?= $ju; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type=" submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>

                </div>
            </div>
        </div>


    </div>
</div>
</div> 