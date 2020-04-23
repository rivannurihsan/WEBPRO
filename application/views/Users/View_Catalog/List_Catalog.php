<?php 
    $this->load->view('Users/Template/header');
?>
<html>
    <head>
        <style>
            .carousel-inner img {
                width: 100%;
                height: 50%;
            }
            #section2 {
                padding-top: 5%;
                width: 98%;
            }

            #section2 .col-md-2 {
                margin-top: 2%;
            }

            #tittle-section2 {
                font-family: Nunito Sans;
                font-style: normal;
                font-weight: bold;
                font-size: 14px;
                line-height: 19px;
                color: #000000;
                margin-left: 2%;
            }
            #kategori input{
                margin-left: 4%;
                font-size: 20px;
            }
            h6 {
                padding-top: 8%;
                margin-left: 7%;
            }
            #PriceRange input {
                width: 5%;
                border: 1px solid #E7EAEC;
                box-sizing: border-box;
                border-radius: 5px;
                margin-left: 7%;
            }

            .card input {
                width: 90%;
                border: 1px solid #E7EAEC;
                box-sizing: border-box;
                border-radius: 5px;
            }

            .card {
                width: 100%;
            }

            #min {
                margin-left: 3%;
                margin-right: 0;
            }

            #label-section-3 {
                color: black;
                text-decoration: none;
            }

            #section2 button {
                width: 80%;
                margin-left: 5%;
                margin-top: 5%;
                border: 1px solid #E7EAEC !important;
                border-radius: 15px !important;
                font-family: Nunito Sans;
                font-style: normal;
                font-weight: normal;
                font-size: 12px;
                line-height: 16px;
                color: #ABABAB !important;
            }

            #section2 button:hover {
                color: white !important;
            }

            #submit {
                margin-bottom: 10%;
                margin-top: 0;
            }

            #price {
                width: 80%;
                margin-bottom: 5%;
                margin-left: 5%;

            }

            #header {
                margin-bottom: 3%;
                padding-bottom: 1%;
                border-bottom: 1px solid #C4C4C4;

            }

            #Tittle {
                font-family: Nunito Sans;
                font-style: normal;
                font-weight: normal;
                font-size: 24px;
                line-height: 33px;
                letter-spacing: 0.02em;
                color: #000000;
            }

            .card {
                border-radius: 10px;
            }

            #col-section-3 {
                margin-bottom: 5%;
            }

            .card-block {
                margin: 10%;
            }

            .card-title {
                font-family: Nunito Sans;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 19px;
                letter-spacing: 0.02em;
                color: #000000;
            }

            .img-fluid {
                border-radius: 10px 10px 0 0;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" id="section1"></div>
        <div class="container-fluid" id="section2">
            <div class="mt-3">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('assets/covid-19.jpg') ?>" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('assets/obat2.png') ?>" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('assets/logo.png') ?>" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>

            </div>



            <div class="row">
                <div class="col-md-2 col-4" id="form">
                    <h1 id="tittle-section2">Search for more details</h1>
                    <div class="card" >
                        <h6>Price Range</h6>
                        <form action="">
                            <input
                                id="inlineFormInputGroup"
                                type="text"
                                class="form-control"
                                placeholder="Minimum price">
                            <input
                                id="inlineFormInputGroup"
                                type="text"
                                class="form-control"
                                placeholder="Maximum price">
                            <button type="btn" class="btn btn-outline-info" id="submit">Submit</button>
                        </form>
                    </div>
                    <div class="card" id="PriceRange">
                        <h6>Categoies</h6>
                        <form action="" id="kategori">
                            <input
                                id="inlineFormInputGroup"
                                type="checkbox"
                                value="Promo"
                                placeholder="asdasdasdasdasdsa" id="kategori">Promo</input><br>
                            <input
                                id="inlineFormInputGroup"
                                type="checkbox"
                                value="Obat"
                                placeholder="asdasdasdasdasdsa">Obat
                            </input><br>
                            <input
                                id="inlineFormInputGroup"
                                type="checkbox"
                                value="Vitamin"
                                placeholder="asdasdasdasdasdsa">Vitamin
                            </input>
                            <button type="btn" class="btn btn-outline-info" id="submit">Submit</button>
                        </form>
                    </div>
                    <div class="card" >
                        <h6>Your Cart</h6>
                        <form action="">
                            <input
                                id="inlineFormInputGroup"
                                type="text"
                                class="form-control"
                                placeholder="Minimum price">
                            <input
                                id="inlineFormInputGroup"
                                type="text"
                                class="form-control"
                                placeholder="Maximum price">
                            <button type="btn" class="btn btn-outline-info" id="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="<?= base_url('assets/logo.png') ?>" alt="" class="img-fluid">
                        <div class="card-block">
                            <div class="card-title">
                                <h5>
                                    <a id="label-section-3" href="<?= base_url('') ?>">OBAT</a>
                                </h5>
                            </div>
                            <div class="card-text">
                                <div class="harga">Rp</div>
                                <div class="rating">rating</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="<?= base_url('assets/logo.png') ?>" alt="" class="img-fluid">
                        <div class="card-block">
                            <div class="card-title">
                                <h5>
                                    <a id="label-section-3" href="<?= base_url('') ?>">OBAT</a>
                                </h5>
                            </div>
                            <div class="card-text">
                                <div class="harga">Rp</div>
                                <div class="rating">rating</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="<?= base_url('assets/logo.png') ?>" alt="" class="img-fluid">
                        <div class="card-block">
                            <div class="card-title">
                                <h5>
                                    <a id="label-section-3" href="<?= base_url('') ?>">OBAT</a>
                                </h5>
                            </div>
                            <div class="card-text">
                                <div class="harga">Rp</div>
                                <div class="rating">rating</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="<?= base_url('assets/logo.png') ?>" alt="" class="img-fluid">
                        <div class="card-block">
                            <div class="card-title">
                                <h5>
                                    <a id="label-section-3" href="<?= base_url('') ?>">OBAT</a>
                                </h5>
                            </div>
                            <div class="card-text">
                                <div class="harga">Rp</div>
                                <div class="rating">rating</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="<?= base_url('assets/logo.png') ?>" alt="" class="img-fluid">
                        <div class="card-block">
                            <div class="card-title">
                                <h5>
                                    <a id="label-section-3" href="<?= base_url('') ?>">OBAT</a>
                                </h5>
                            </div>
                            <div class="card-text">
                                <div class="harga">Rp</div>
                                <div class="rating">rating</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                // Activate Carousel
                $("#myCarousel").carousel();

                // Enable Carousel Indicators
                $(".item1").click(function () {
                    $("#myCarousel").carousel(0);
                });
                $(".item2").click(function () {
                    $("#myCarousel").carousel(1);
                });
                $(".item3").click(function () {
                    $("#myCarousel").carousel(2);
                });

                // Enable Carousel Controls
                $(".carousel-control-prev").click(function () {
                    $("#myCarousel").carousel("prev");
                });
                $(".carousel-control-next").click(function () {
                    $("#myCarousel").carousel("next");
                });
            });
        </script>
    </body>
</html>