<?php 
    $this->load->view('Users/Template/header');
?>
<html>
    <head>
        <style>
            #sectionArtikel.container {
                border: #000000;
                border-style: solid;
                height: auto;
                margin-top: 5%;
                margin-left: 3%;
            }
            .col.nav {
                border: #000000;
                border-style: solid;
                height: 50px;
                margin-top: 1%;
            }
            #artikelterkait {
                border: #000000;
                border-style: solid;
                height: 500px;
                margin-top: 5%;
                margin-left: 3%;
            }
        </style>
    </head>
    <body>
        <div class="container" id="sectionArtikel">
            <div class="row">
                <div class="col nav"></div>
                <div class="col" id="artikelterkait"></div>
            </div>

        </div>

    </body>
</html>