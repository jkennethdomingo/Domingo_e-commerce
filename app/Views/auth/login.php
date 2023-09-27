<?= $this->include('include/header.php') ?>
<!-- Login Stylesheet -->
<link rel="stylesheet" href="/assets/login/css/style.css">
<section>
    <div class="form-box" id="loginForm">
        <div class="form-value">
            <form action="<?=base_url('AuthLogin')?>" method="post">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <button>Log in</button>
                <div class="register">
                    <p id="loginToggle">Don't have an account? <a href="#" onclick="toggleForms()">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="form-box" id="registerForm" style="display: none;">
        <div class="form-value">
            <form action="<?=base_url('save')?>" method="post" id="form">
                <h2>Registration</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="username" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <button type="submit">Register</button>
                <div class="register">
                    <p id="registerToggle" style="display: none;">Already have an account? <a href="#" onclick="toggleForms()">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->include('include/endtag.php') ?>