<?php 
    $this->load->view('Users/Template/header');
?>
<html>
    <head>
        <style>
            body{
                background: url("<?php echo base_url();?>assets/artikelbg.jpg");
                position: relative;
                background-size: 100% 100%;
            }
            #sectionArtikel.container-fluid {
                border: #000000;
                /* border-style: solid; */
                height: auto;
                margin-top: 5%;
                margin-left: 2%;
                margin-right: 3%;
                width: 95%;
            }
            .artikel {
                border: #000000;
                /* border-style: solid; */
                height: 100%;
                margin-top: 1%;
                margin-left: 4%;
                margin-bottom: 1%;
            }
            #artikelterkait {
                border: #000000;
                height: auto;
                margin-top: 1%;
                margin-left: 3%;
                margin-right: 1%;
                /* width: 50%; */
            }
            .col.nav {
                border: #000000;
                /* border-style: solid; */
                height: 50%;
                margin-top: 1%;
                margin-left: 1%;
                margin-right: 1%;
            }
            .col.judul {
                border: #000000;
                /* border-style: solid; */
                height: auto;
                margin-top: 1%;
                margin-left: 1%;
                margin-right: 1%;
            }
            img {
                max-width: 100%;
                max-height: 100%;
                display: block;

            }
            .col.isi {
                border: #000000;
                height: auto;
                margin-top: 1%;
                margin-left: 1%;
                margin-right: 1%;
                background: white;
                border-radius: 25px;
            }
            .button1 {
                font-size: 10px;
                background: whitesmoke;
                width: 100%;
                border-style: solid;
                text-align: center;
                height: 25px;
                padding: 0px;
                border-radius: 25px;
            }
            .row.artikelterkaitisi{
                height: auto;
                margin-bottom: 1%;
                margin-left: 1%;
                margin-right: 1%;
                background: rgb(108, 94, 254);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid " id="sectionArtikel">
            <div class="row">
                <div class="col-md-9 artikel col-sm-8">
                    <div class="row">
                        <div class="col judul">
                            <h4><?php echo($dataArtikel->Judul) ?></h4>
                            <h7><?php echo($dataArtikel->tanggal) ?></h7>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col nav">
                            <img
                                src="<?= base_url("assets/") . $dataArtikel->Gambar ?>"
                                class="mx-auto d-block"
                                width="60%"
                                ;=";"
                                alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col isi"><?php echo nl2br($dataArtikel->Isi) ?></div>
                    </div>
                </div>
                <div class="col-md-2" id="artikelterkait">
                    <div class="row artikelterkaitisi">
                    <h3>Artikel Terkait</h3>
                    <table>
                        <form action="<?= base_url();?>Artikelcontroller/getartikelbyid" method="POST">
                            <?php foreach ($dataArtikel1 as $d ) {?>
                            <tr>
                                <td>
                                    <input type="hidden" name="id" placeholder="<?php echo $d->id ?>" value="<?php echo $d->id ?>">
                                    <button type="submit" class="btn button1" value="<?php echo $d->id ?>" name="idb">
                                        <h6><?php echo($d->Judul) ?></h6>
                                    </button>
                                    
                                </td>
                            </tr>
                            <?php } ?>
                        </form>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>

    </body>
</html>