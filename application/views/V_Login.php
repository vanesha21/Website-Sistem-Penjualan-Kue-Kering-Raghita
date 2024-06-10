    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/login.css">
</head>
<body>
<div class="alert alert-warning" role="alert">
    
</div>

<div class="container">
    <form action="<?= base_url("login/aksi_login") ?>" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" required>
            <i class="fa fa-eye"></i>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Login</button>
        </div>
        <p class="login-register-text">Anda belum punya akun? <a href="<?= base_url('register'); ?>">Register</a></p>
    </form>
</div>

<script>
    var show = document.querySelector(".container .login-email .input-group i");
    var ipass = document.querySelector(".container .login-email .input-group input[type='password']");
    show.addEventListener("click", function() {
        if(ipass.getAttribute("type") == "password") {
            ipass.setAttribute("type", "text");
        } else {
            ipass.setAttribute("type", "password");
        }
    });
</script>