
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
            #kategori input {
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
                margin-bottom: 2%;
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
                line-height: 10px;
                letter-spacing: 0.02em;
                color: #000000;
            }

            .card {
                border-radius: 10px;
                height: 230px;
            }
            .disp.card {
                overflow: scroll;
            }
            .dispcart.card {
                border-radius: 10px;
                height: auto;
                width: 450px;
                margin-top: 2%;
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
            .display {
                border: #000000;
                border-style: solid;
                margin-bottom: 5%;
                margin-top: 0;
                margin-left: 10%;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                <div class="col-md-2 col-4" id="form1">
                    <h1 id="tittle-section2">More</h1>
                    <div class="card dispcart">
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
                    <div class="card dispcart" id="PriceRange">
                        <h6>Categoies</h6>
                        <form action="" id="kategori">
                            <input
                                id="kategori"
                                type="checkbox"
                                value="Promo"
                                placeholder="asdasdasdasdasdsa">Promo</input><br>
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
                    <div class="card dispcart">
                        <h4>Shopping Cart</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="detail_cart"></tbody>

                        </table>
                    </div>
                </div>
                <div class="container display">
                    <div class="row">
                        <?php foreach ($dataobat as $d ) {?>
                        <div class="col-md-2">
                            <div class="card disp">
                                <div class="thumbnail">
                                    <img
                                        src="<?= base_url("assets/") . $d->Pict ?>"
                                        alt=""
                                        class="mx-auto d-block"
                                        height="100px"
                                        width="90px">
                                    <div class="card-block">
                                        <div class="card-title">
                                            <h5>
                                                <a id="label-section-3" href="<?= base_url('') ?>"><?php echo($d->Nama_Obat) ?></a>
                                            </h5>
                                        </div>
                                        <div class="card-text">
                                            <div class="harga"><?php echo 'Rp '.number_format($d->Harga); ?></div>
                                            <div class="Desc"><?php echo nl2br($d->Description) ?></div>
                                            <input
                                                type="number"
                                                name="quantity"
                                                id="<?php echo $d->Obatid;?>"
                                                value="1"
                                                class="quantity form-control">
                                            <button
                                                class="add_cart btn btn-success btn-block"
                                                data-produkid="<?php echo $d->Obatid;?>"
                                                data-produknama="<?php echo $d->Nama_Obat;?>"
                                                data-produkharga="<?php echo $d->Harga;?>">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                    </div>

                </div>

            </div>
        </div>
        <script
            type="text/javascript"
            src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
        <script
            type="text/javascript"
            src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // AJAX

                $('.add_cart').click(function () {
                    var produk_id = $(this).data("produkid");
                    var produk_nama = $(this).data("produknama");
                    var produk_harga = $(this).data("produkharga");
                    var quantity = $('#' + produk_id).val();
                    $.ajax({
                        url: "<?php echo base_url();?>Catalog/add_to_cart",
                        method: "POST",
                        data: {
                            produk_id: produk_id,
                            produk_nama: produk_nama,
                            produk_harga: produk_harga,
                            quantity: quantity
                        },
                        success: function (data) {
                            $('#detail_cart').html(data);
                        }
                    });
                });

                // Load shopping cart
                $('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");

                //Hapus Item Cart
                $(document).on('click', '.hapus_cart', function () {
                    var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
                    $.ajax({
                        url: "<?php echo base_url();?>Catalog/hapus_cart",
                        method: "POST",
                        data: {
                            row_id: row_id
                        },
                        success: function (data) {
                            $('#detail_cart').html(data);
                        }
                    });
                });
            });
        </script>
    </body>
</html>