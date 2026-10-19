<section class="form-card">
    <header class="page-heading">
        <p class="eyebrow">DATA PEGAWAI</p>
        <h1>Tambah pegawai</h1>
        <p>Lengkapi informasi berikut untuk menyimpan data pegawai.</p>
    </header>
    <form class="employee-form" name="butamu" method="post" action="kirim.php">
        <div class="form-field">
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" autocomplete="name" required>
        </div>
        <div class="form-field">
            <label for="jabatan">Jabatan</label>
            <input id="jabatan" type="text" name="jabatan" required>
        </div>
        <div class="form-field">
            <label for="alamat">Alamat</label>
            <input id="alamat" type="text" name="alamat" autocomplete="street-address" required>
        </div>
        <div class="form-field">
            <label for="no_tlp">No. telepon/HP</label>
            <input id="no_tlp" type="text" name="no_tlp" autocomplete="tel" required>
        </div>
        <div class="form-field">
            <label for="nama_pasangan">Nama pasangan</label>
            <input id="nama_pasangan" type="text" name="nama_pasangan" required>
        </div>
        <div class="form-field">
            <label for="nama_anak">Nama anak</label>
            <input id="nama_anak" type="text" name="nama_anak" required>
        </div>
        <div class="form-actions">
            <button type="submit" name="kirim" value="kirim">Simpan data</button>
        </div>
    </form>
</section>
