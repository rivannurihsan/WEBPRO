<?php 
    $this->load->view('Users/Template/header');
?>
<html>
    <head>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@700&display=swap"
            rel="stylesheet">
        <style type="text/css">
            body {
                width: auto;
                height: 100%;
                bottom: 0;
                position: relative;
            }

            p {
                height: 0.7;
                /* text-align: center; */
                font-family: 'Quattrocento';
                font-weight: bold;
                font-size: 30px;
            }
            #sambutan {
                text-align: center;
                position: relative;
            }
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }
            .jumbotron {
                position: relative;
                width: 100%;
                height: 100%;
                background: url("assets/homebg.jpg");
                background-size: 100% 100%;
                bottom: 0;
                margin-bottom: 0;
                /* background: #FFC8CB; */
            }
            ::-webkit-scrollbar {
                display: none;
            }
            .container {
                margin-top: 8%;
                margin-right: 70%;
                margin-left: 2%;
                /* border: 1px solid; */
                padding-bottom: 5px;
                /* display: inline-block; */
                width: 50%;
                height: 60%;
                overflow: scroll;
                position: relative;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p>Mencari Obat Dengan <br>
                            Mudah,Terpercaya dan Sudah<br>
                            Terjamin Resep Dari Dokter.<br>
                            Layanan Online ObatKu<br>
                            Terbaik Di Indonesia<br>
                            
                            <button type="button" class="btn btn-primary klik">Yuk Lihat</button>
                        </p>
                        
                    </div>
                </div>
            </div>
            <p> <?php echo $error;?> </p>
        </div>

    </body>
</html>