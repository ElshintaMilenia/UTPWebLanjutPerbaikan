</head>

<body class="mt-5">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Elshinta Collection</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('Home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/about'); ?>">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/login'); ?>">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <!-- <img src="<?= base_url('assets'); ?>/hash.jpg" width="25%" class="rounded-circle img-thumbnail"> -->
            <h1 class="display-4">About this Website</h1>
        </div>
    </div>

    <section class="portfolio bg-light pb-3" id="portfolio">
        <div class="container">
            <div class="row mb-2 pt-2">
                <div class="col text-center">
                    <h3>About Me</h3>
                </div>
            </div>
            <div class="row mb-3 text-center">
                <div class="col-md">
                    <div class="card">
                        <img src="<?= base_url('assets'); ?>/2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Front End</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact pt-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Contact Me</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card text-dark bg-light mb-3 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">Jl. Turi Raya Gg Kelapa Warna no 18, Tanjung Senang Bandarlampung </p>
                        </div>
                    </div>
                    <ul class="list-group text-center">
                        <li class=" list-group-item">
                            <h4>My Social Media</h4>
                        </li>
                        <li class="list-group-item">Email : elshintamilenia@gmail.com</li>
                        <li class="list-group-item">Instagram : elshintaaaa</li>
                        <li class="list-group-item">Twiter : ElshintaMilenia</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="notelp">Phone Number</label>
                            <input type="text" class="form-control" id="notelp">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Message</label>
                            <textarea type="text" class="form-control" id="pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-dark">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>