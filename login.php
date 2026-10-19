<section class="form-card login-card">
    <header class="page-heading">
        <p class="eyebrow">AREA ADMIN</p>
        <h1>Selamat datang kembali</h1>
        <p>Login untuk mengelola data pegawai.</p>
    </header>
    <form class="employee-form" action="login_proses.php" method="post">
        <div class="form-field">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" placeholder="Masukkan username" autocomplete="username" required>
        </div>
        <div class="form-field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" placeholder="Masukkan password" autocomplete="current-password" required>
        </div>
        <div class="form-actions">
            <button type="submit" name="login" value="login">Login</button>
            <button class="button-secondary" type="reset">Batal</button>
        </div>
    </form>
</section>
