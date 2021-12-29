<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {           
            background: radial-gradient(circle at center, #222, #000);
            width: 100%;
            height: 100vh;
            animation: loader_bg 2s linear infinite;
            transition: 0.5s ease;
        }
        
        .loader_bg {
            position: fixed;
            z-index: 999999;
            width: 100%;
            height: 100%;
        }
        
        .loader {
            border: 0 solid transparent;
            position: absolute;
            width: 150px;
            height: 150px;
            top: calc(50vh - 90px);
            left: calc(50vw - 90px);
            border-radius: 50%;
        }
        
        .loader:before{
            content: '';
            border: 1em solid mediumorchid;
            border-radius: 50%;
            width: inherit;
            height: inherit;
            position: absolute;
            top: 0;
            left: 0;
            animation: loader 2s linear infinite;
            opacity: 0;
        }
        .loader:after {
            content: '';
            border: 1em solid pink;
            border-radius: 50%;
            width: inherit;
            height: inherit;
            position: absolute;
            top: 0;
            left: 0;
            animation: loader 2s linear infinite;
            opacity: 0;
        }
        
        .loader:before {
            animation-delay: .5s;
        }
        
        @keyframes loader {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }
        /* @keyframes loader_bg {
            0% {
                background: radial-gradient(circle at top, #FF3399, orange, dodgerblue);
            }
            50% {
                background: radial-gradient(circle at center, dodgerblue, #FF3399, green);
            }
            100% {
                background: radial-gradient(circle at bottom, orange, dodgerblue, #FF3399);
            }
        } */
    </style>
</head>

<body>
    <img src="./assets/img/rina-img.jpg" width="100" height="100" 
    style="border-radius: 50%; position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:999">
    <div class="loader_bg"><span class="loader"></span></div>

    <script>
        setInterval(function(){
            location.href = "./content.php";
        }, 5000)
    </script>
</body>

</html>