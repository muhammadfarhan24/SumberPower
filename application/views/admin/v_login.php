<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .auth-box {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .auth-box .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .auth-box .logo img {
            width: 190px;
        }
        .auth-box .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .auth-box .header p {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .auth-box .form-group {
            margin-bottom: 15px;
        }
        .auth-box .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .auth-box .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
        .auth-box .btn:hover {
            background-color: #0056b3;
        }
        .auth-box .checkbox {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
			margin-left: 22px;
        	margin-top: 0;
        }
        .auth-box .checkbox input {
            margin-right: 10px;
        }
        .auth-box p {
            text-align: center;
            margin-top: 10px;
        }
        .auth-box p a {
            color: #007bff;
        }
        .alert {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="auth-box">
        <div class="logo">
            <img src="<?=base_url()?>assets/img/sp.png" alt="Klorofil Logo">
        </div>
        <div class="header">
            <p>Login Ke Akun Anda</p>
            <p>ADMIN</p>
        </div>
        <div class="alert">
            <font color="red" size="3"><b><?= $this->session->flashdata('pesan_gagal'); ?></b></font>
            <font color="green" size="3"><?= $this->session->flashdata('pesan_sukses'); ?></font>
        </div>
        <form action="<?=base_url('admin/proses_login')?>" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input id="sp" type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="checkbox">
                <input type="checkbox" onclick="togglePasswordVisibility()"> 
                <span class="label-text">Lihat Password</span>
            </div>
            <input type="submit" name="submit" class="btn" value="Login Akun">
        </form>
        
    </div>

    <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            var x = document.getElementById("sp");
            x.type = (x.type === "password") ? "text" : "password";
        }

        function togglePasswordVisibilityRegister() {
            var x = document.getElementById("sp1");
            x.type = (x.type === "password") ? "text" : "password";
        }
    </script>
</body>

</html>
