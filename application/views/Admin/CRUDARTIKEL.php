<?php
$this->load->view('Users/Template/header');
?>
<html>
    <html>

        <head>
            <title>Product</title>
            <style>

                .my-custom-scrollbar {
                    position: relative;
                    height: 550px;
                    overflow: scroll;
                }
                .table-wrapper-scroll-y {
                    display: block;
                    width: 100%;
                }
                #section1 {
                    margin-top: 8%;
                    margin-bottom: 5%;
                    background: #FFFFFF;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
                    border-radius: 5px;
                    padding: 2em;
                    width: 90%;
                }

                #product {
                    font-family: Nunito Sans;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 18px;
                    line-height: 25px;
                }

                .roundedcircle {
                    width: 45px;
                    height: 45px;
                    cursor: pointer;
                }

                #search {
                    border: none;
                    font-family: Nunito Sans;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 14px;
                    line-height: 19px;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.5);
                }

                #icon {
                    border: none;
                    color: black;
                }

                #section1 .btn-primary {
                    margin-left: 55%;
                    font-family: Nunito Sans;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 12px;
                    line-height: 20px;
                    color: #FFFFFF;
                }

                img {
                    width: 15vh;
                }

                td {
                    font-style: normal;
                    font-weight: normal;
                    font-size: 12px;
                    color: rgba(0, 0, 0, 0.8);
                }

                #margin {
                    transform: translate(0%, 10%);
                }

                .detail {
                    width: 40px;
                    height: 40px;
                    border-radius: 50px;
                    background: #FFFFFF;
                    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.25);
                }

                #detail {
                    width: 15%;
                    margin-top: 45%;
                    margin-left: 40%;
                    transform: translate(0%, -5%);
                }

                /* add new product */

                #tittle {
                    font-family: Nunito Sans;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 18px;
                    line-height: 25px;
                    text-align: center;
                    color: rgba(0, 0, 0, 0.5);
                    border-bottom: 1px solid rgba(0, 0, 0, 0.35);
                    padding-top: 3%;
                    padding-bottom: 3%;
                }
                #image {
                    width: 80px;
                    height: 90px;
                }
                #addImage {
                    width: 160px;
                    height: 100px;
                    margin-left: 10%;
                    margin-top: 3%;
                }

                .form-control {
                    width: 80%;
                }

                #inputan {
                    margin-top: 5%;
                }

                .desc,
                textarea {
                    margin-left: 10%;
                }

                textarea {
                    margin-bottom: 5%;
                }

                #NewProduct .btn-primary,
                .btn-outline-danger {
                    width: 65%;
                    margin-bottom: 3%;
                }

                /* media screen */

                @media screen and (max-width: 767px) {
                    thead {
                        display: none;
                    }

                    td {
                        display: flex;
                    }

                    .btn-primary {
                        margin: 0;
                    }

                    #detail {
                        margin: 0 0 0 40%;
                    }

                    .btn-danger {
                        margin-left: 3%;

                    }

                    .btn-danger,
                    .btn-warning {
                        margin-bottom: 3%;
                    }

                }
            </style>
        </head>

        <body>
            <div class="container-fluid-0">
                <div class="container-fluid" id="section0"></div>
                <!-- section1 -->
                <div class="container-fluid" id="section1">
                    <span id="product">Product</span>
                    <form action="" class="navbar-form">
                        <div class="form-group input-group">
                            <input
                                id="search"
                                type="text"
                                class="form-control col-md-3"
                                placeholder="Search">
                            <div class="input-group-btn">
                                <button type="button" id="icon" class="btn btn-outline-info">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                            <a
                                href="<?= base_url("") ?>"
                                type="button"
                                class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#addProduct">Add New Product</a>
                        </div>
                    </form>
                    <table class="table table-wrapper-scroll-y my-custom-scrollbar">
                        <thead>
                            <tr>
                                <th scope="col">Photo</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal dibuat/diupdate</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($data as $d ) {?>
                            <tr>
                                <td>
                                    <img id="image" src="<?= base_url("assets/") . $d->Gambar ?>" alt="">
                                </td>
                                <td id="margin"><?php echo $d->Judul?></td>
                                <td id="margin"><?php echo $d->tanggal ?></td>
                                <td id="margin">
                                    <button
                                        type="button"
                                        class="btn btn-warning"
                                        data-toggle="modal"
                                        data-target="#edit<?php echo $d->id ?>">
                                        UPDATE
                                    </button>
                                    <a
                                        type="button"
                                        class="btn btn-danger"
                                        href="<?php echo base_url(); ?>Admin/hapusobat/<?php echo $d->id ?>"
                                        onclick="return confirm('Apakah Anda Yakin?')">DELETE</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Add Product -->
                <div class="container" id="NewProduct">
                    <div class="row justify-content-center">
                        <div class="modal fade justify-content-center" id="addProduct" role="dialog">
                            <div class="modal-dialog bg-modal">
                                <div class="modal-content">
                                    <h5 id="tittle">Add New Artikel</h5>
                                    <form
                                        class="row"
                                        action="<?= base_url();?>Admin/Create_Artikel/"
                                        method="POST"
                                        enctype="multipart/form-data">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <img
                                                id="addImage"
                                                src="<?= base_url('assets/logo.png') ?>"
                                                class="roundedcircle d-block"/>
                                        </div>
                                        <div class="col-md-7" id="inputan">
                                            <div class="topic-title">Judul</div>
                                            <input type="text" name="Judul" class="form-control">
                                            <input type="file" name="uploadImage" class="form-control"/>
                                        </div>

                                        <div class="topic-title desc">Isi</div>
                                        <textarea class="form-control" name="Isi" id="" cols="30" rows="5"></textarea>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" value="upload">Add New Artikel</button>
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                                        </div>&nbsp

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Update Product -->
                <div class="container" id="NewProduct">
                    <div class="row justify-content-center">
                    <?php $no=1; foreach ($data as $d ) {?>
                        <div class="modal fade justify-content-center" id="edit<?php echo $d->id ?>" role="dialog">
                            <div class="modal-dialog bg-modal">
                                <div class="modal-content">
                                    <h5 id="tittle">Update Product</h5>
                                    <form
                                        class="row"
                                        action="<?= base_url();?>Admin/editartikel/"
                                        method="POST"
                                        enctype="multipart/form-data">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <img
                                                id="addImage"
                                                src="<?= base_url('assets/logo.png') ?>"
                                                class="roundedcircle d-block"/>
                                        </div>
                                        <div class="col-md-7" id="inputan">
                                            <div class="topic-title">Product Name</div>
                                            <input type="hidden" class="form-control" placeholder="Nama" name="id" value="<?php echo $d->id ?>"  required>
                                            <input type="text" name="Judul" class="form-control" placeholder="Description" value="<?php echo $d->Judul?>">
                                            
                                            <input type="file" name="uploadImage" class="form-control" value="<?=$d->Gambar ?>"><?= $d->Gambar ?></input>
                                        </div>

                                        <div class="topic-title desc">Description</div>
                                        <textarea class="form-control" name="Isi" id="" cols="30" rows="5" value="<?php echo nl2br($d->Isi) ?>" placeholder="<?php echo nl2br($d->Isi) ?>"><?php echo nl2br($d->Isi) ?></textarea>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" value="upload">Update</button>
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                                        </div>&nbsp

                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>

        </div>

    </body>

</html>