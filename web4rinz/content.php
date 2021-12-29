<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webbenz | Content</title>
    <link rel="stylesheet" href="./assets/css/materialize.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/v4-shims.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: cursive;
        }
        
        body {
            background: radial-gradient(circle at top, #8F47B3, #FFB7D5);
        }
        
        header {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            background: dimgray;
            padding: 10px;
        }
        
        header #left .fa-arrow-circle-left {
            font-size: 20px;
            color: hotpink;
        }
        
        header #left .fa-arrow-circle-left:hover {
            transform: scale(1.1);
            transition: 0.5s ease-in;
        }
        
        header #right img {
            border-radius: 50%;
            border: 2px solid goldenrod;
        }
        
        .container h3 {
            color: gold;
            text-shadow: 2px 2px #222;
        }
        
        .container #cake {
            font-size: 100px;
            animation: cake 2s linear infinite;
            transition: 0.5s ease-in-out;
        }
        
        .container #btn a {
            border: 5px groove #222;
            border-radius: 10px;
            background: #FFD12A;
            color: #222;
            font-weight: 800;
            padding: 10px 40px;
        }
        
        .container #btn:hover a {
            transition: 0.5s ease-in;
            transform: scale(1.1);
            background: deeppink;
            color: white;
        }
        
        @keyframes cake {
            0% {
                transform: scale(1.1);
            }
            50% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="./index.html" id="left" class="left-align">
            <i class="fa fa-arrow-circle-left"></i>
        </a>
        <div id="right" class="right-align">
            <img src="./assets/img/rina-img.jpg" alt="rinz_profile" width="50" height="50">
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col s12 m8 l8 offset-m2 offset-l2 center-align">
                <h3>I Love You!</h3>
                <br>
                <div id="cake">
                    
                    <a href="./content.php">
                    <?php 
                        $arr = ["🧡","💛","💚","💙","💜","🤍"];
                        for($i = 0; $i <= 5; $i++)
                        {
                            $num = rand(0,$i);
                            $val = $arr[$num];
                        }
                        
                        echo $val;
                    ; ?>
                    </a>
                    
                </div>
                <h5>Rina Espinosa Villanueva</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m8 l8 offset-m2 offset-l2 center-align">
                <div id="btn">
                    <a href="./greetings.html" class="waves-effect pulse">CONTINUE</a>
                </div>
            </div>
        </div>
    </div>


    <!-- script here  -->
    <script src="./assets/js/jquery-1.7.2.min.js"></script>
    <script src="./assets/js/materialize.min.js"></script>
    <script src="./assets/fontawesome/js/all.min.js"></script>
    <script src="./assets/fontawesome/js/v4-shims.min.js"></script>
</body>

</html>