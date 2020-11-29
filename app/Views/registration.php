<style>
    body {
        background-image: url(<?= base_url('assets/11.jpg'); ?>);
        background-size: cover;

    }
</style>
</head>

<body>

    <section id="registration" class="registration">
        <div class="container mt-5 col-4 pt-3 pb-2 card bg-light">
            <h3 class="text-center mb-3">Create Account</h3>
            <form>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="email" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="password2">Confirm Password</label>
                            <input type="password" class="form-control" id="password2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a type="submit" class="btn btn-primary" href="<?= base_url('Home/login'); ?>">Sign up</a>
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href="">Forgot Password?</a>
                </div>
                <div class="form-group text-center">
                    <a href="<?= base_url('Home/login'); ?>">Log in!</a>
                </div>

            </form>
        </div>
    </section>