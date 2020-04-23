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

            #formlogin {
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
                background: url("<?php echo base_url();?>assets/homebg.jpg");
                background-size: 100% 100%;
                bottom: 0;
                margin-bottom: 0;
                /* background: #FFC8CB; */
            }
            ::-webkit-scrollbar {
                display: none;
            }
            .container {
                margin-top: 3%;
                margin-right: 70%;
                margin-left: 5%;
                border: 1px;
                padding-bottom: 5px;
                /* display: inline-block; */
                width: 47%;
                height: 60%;
                overflow: scroll;
                position: relative;
            }
            input[type=password],
            input[type=text] {
                width: 95%;
                padding: 5px;
                margin: 2px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            .button1 {
                background-color: #7c75e7;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 95%;
            }

            button:hover {
                opacity: 0.8;
            }

            .Judul {
                text-align: center;
                margin: 4px 0 8px;
                font-family: 'Quattrocento';
                font-weight: bold;
                font-size: 30px;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 0;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col text-leftß">
                        <form action="<?= base_url();?>Welcome/Login/" method="post">
                            <div class="Judul">
                                Sign In
                            </div>
                            <?php if(isset($error_msg)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $error_msg ?>
                                </div>
                            <?php } ?>
                            <label for="uname">
                                <b>Username</b>
                            </label>
                            <input
                                type="text"
                                placeholder="Enter Username"
                                name="uname"
                                required="required">

                            <label for="psw">
                                <b>Password</b>
                            </label>
                            <input
                                type="password"
                                placeholder="Enter Password"
                                name="psw"
                                required="required">

                            <button type="submit" class="button1">Login</button>
                            <label>
                                <input type="checkbox" checked="checked" name="remember">
                                Remember me
                            </label>
                            <span class="psw">
                                <a href="<?= base_url();?>welcome/Registrasi/">Register?</a>
                            </span>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>