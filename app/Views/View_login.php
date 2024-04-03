<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Signin Template using Bootstrap v5.0">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Signin Template · Bootstrap v5.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .form-signin .btn {
            font-size: 0.9rem;
            border-radius: 20px;
            padding: 10px;
        }
    </style>
</head>
<body class="text-center">
    <main class="form-signin">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('/login/process') ?>">
            <?= csrf_field() ?>
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <input type="text" name="username" id="username" class="form-control mb-2" placeholder="Username" required autofocus>
            <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password" required>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            <p class="mt-3"><a href="/register">Register</a> dulu sini</p>
        </form>
    </main>
</body>
</html>
