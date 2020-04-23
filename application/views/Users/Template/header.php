<html>
    <head>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <style>
            .navbar {
                background-color: #5b54d6;
            }
            .navbar .navbar-brand {
                color: #ecf0f1;
            }
            .navbar .navbar-brand:focus,
            .navbar .navbar-brand:hover {
                color: #ecdbff;
            }
            .navbar .navbar-text {
                color: #ecf0f1;
            }
            .navbar .navbar-text a {
                color: #ecdbff;
            }
            .navbar .navbar-text a:focus,
            .navbar .navbar-text a:hover {
                color: #ecdbff;
            }
            .navbar .navbar-nav .nav-link {
                color: #ecf0f1;
                border-radius: 0.25rem;
                margin: 0 0.25em;
            }
            .navbar .navbar-nav .nav-link:not(.disabled):focus,
            .navbar .navbar-nav .nav-link:not(.disabled):hover {
                color: #ecdbff;
            }
            .navbar .navbar-nav .dropdown-menu {
                background-color: #5b54d6;
                border-color: #7c75e7;
            }
            .navbar .navbar-nav .dropdown-menu .dropdown-item {
                color: #ecf0f1;
            }
            .navbar .navbar-nav .dropdown-menu .dropdown-item.active,
            .navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
            .navbar .navbar-nav .dropdown-menu .dropdown-item:hover {
                color: #ecdbff;
                background-color: #7c75e7;
            }
            .navbar .navbar-nav .dropdown-menu .dropdown-divider {
                border-top-color: #7c75e7;
            }
            .navbar .navbar-nav .nav-item.active .nav-link,
            .navbar .navbar-nav .nav-item.active .nav-link:focus,
            .navbar .navbar-nav .nav-item.active .nav-link:hover,
            .navbar .navbar-nav .nav-item.show .nav-link,
            .navbar .navbar-nav .nav-item.show .nav-link:focus,
            .navbar .navbar-nav .nav-item.show .nav-link:hover {
                color: #ecdbff;
                background-color: #7c75e7;
            }
            .navbar .navbar-toggle {
                border-color: #7c75e7;
            }
            .navbar .navbar-toggle:focus,
            .navbar .navbar-toggle:hover {
                background-color: #7c75e7;
            }
            .navbar .navbar-toggle .navbar-toggler-icon {
                color: #ecf0f1;
            }
            .navbar .navbar-collapse,
            .navbar .navbar-form {
                border-color: #ecf0f1;
            }
            .navbar .navbar-link {
                color: #ecf0f1;
            }
            .navbar .navbar-link:hover {
                color: #ecdbff;
            }

            @media (max-width: 575px) {
                .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
                    color: #ecf0f1;
                }
                .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus,
                .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover {
                    color: #ecdbff;
                }
                .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
                    color: #ecdbff;
                    background-color: #7c75e7;
                }
            }

            @media (max-width: 767px) {
                .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
                    color: #ecf0f1;
                }
                .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus,
                .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover {
                    color: #ecdbff;
                }
                .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
                    color: #ecdbff;
                    background-color: #7c75e7;
                }
            }

            @media (max-width: 991px) {
                .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
                    color: #ecf0f1;
                }
                .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus,
                .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover {
                    color: #ecdbff;
                }
                .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
                    color: #ecdbff;
                    background-color: #7c75e7;
                }
            }

            @media (max-width: 1199px) {
                .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
                    color: #ecf0f1;
                }
                .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus,
                .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover {
                    color: #ecdbff;
                }
                .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
                    color: #ecdbff;
                    background-color: #7c75e7;
                }
            }

            .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
                color: #ecf0f1;
            }
            .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus,
            .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover {
                color: #ecdbff;
            }
            .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
                color: #ecdbff;
                background-color: #7c75e7;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href=<?= base_url(); ?>><img src="<?php echo base_url(); ?>assets/logo.png" class="navbar-brand" height="40px" width="100px" href=<?= base_url(); ?>></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>Catalog">Katalog
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url();?>Admin/">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Info Kesehatan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input
                        class="form-control mr-sm-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav  mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>welcome/Login/">
                            <i class='fas fa-user' style='font-size:20px'>
                                Login
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>