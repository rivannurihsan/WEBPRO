<html>
    <head>
        <style>
            #section2 {
                padding-top: 5%;
                width: 98%;
            }

            #section2 .col-md-2 {
                margin-top: 1%;
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

            h6 {
                padding-top: 8%;
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
            <div class="row">
                <div class="col-md-2" id="form">
                    <h1 id="tittle-section2">Search for more details</h1>
                    <div class="card" id="PriceRange">
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
    </body>
</html>