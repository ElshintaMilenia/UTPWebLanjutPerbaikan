<style>
    body {
        background-image: url(<?= base_url('assets/11.jpg'); ?>);
        background-size: cover;

    }
</style>
</head>

<body>

    <section id="login" class="login">

        <div class="container mt-5 col-4 pt-3 pb-2 card bg-light">
            <h3 class="text-center mb-3">Login Page</h3>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value="" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <a type="submit" class="btn btn-primary" href="<?= base_url('Home/index'); ?>">Log in</a>
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href="">Forgot Password?</a>
                </div>
                <div class="form-group text-center">
                    <a href=" <?= base_url('Home/register'); ?>">Create an Account!</a>
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href="<?= base_url('Home/admin'); ?>">Log in as Admin!</a>
                </div>

            </form>
        </div>
    </section>