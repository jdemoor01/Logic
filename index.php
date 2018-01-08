<!DOCTYPE HTML>
<html>

<head>
    <title> Logic Projict </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.ico" />
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Logic Projic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#not">not</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#and">and</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nand">nand</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#or">or</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nor">nor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#xor">xor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#xnor">xnor</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="fluid-container">
      <!-- Begin individual gates -->
        <!-- NOT Gate -->
        <div class="not" id="not">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <input type="text" class="not-input" onclick="clearNotOutput();" placeholder="Input" id="notInput">
                </div>
                <div class="col-md-4 col-sm-12">
                    <a onclick="simpleNot();"><img id="notImg" src="public/images/not.png"></a>
                </div>
                <div class="col-md-4 col-sm-12">
                    <input type="text" placeholder="Output" id="notOutput">
                </div>
            </div>
        </div>
        <!-- AND Gate -->

        <!-- NAND Gate -->

        <!-- OR Gate -->

        <!-- NOR Gate -->

        <!-- XOR Gate -->

        <!-- XNOR Gate -->
        
    </div>
    <footer>
        <div class="footer row" id="footer">
            <div class="col-sm-12">
                <img src="public/images/layout_green_vision.png">
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
    <script type="text/javascript" src="public/js/logic.js"></script>
</body>

</html>
