<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<style>


    body {

        height: 100%;

        background-image: url(http://exco.rocketsweb.net/wp-content/uploads/image-004-2.jpg);
        background-size: 110% 110%;
        background-position: center center;
        background-size: cover;
        background-attachment: fixed;
        box-shadow:inset 0 0 0 2000px rgba(255, 255, 255, 0.0);
        animation: shrink 25s infinite alternate;
    }
    @keyframes shrink {
        0% {
            background-size: 130% 130%;
        }
        100% {
            background-size: 95% 95%;
        }
    }

    header {
        height: 90px;
        background-color: #00387b;
        border-bottom: 1px solid #00387b;
        align-items: center;
        display: flex;
        justify-content: center;
    }
    header > h1 {
        width: calc(100% - 160px);
        text-align: center;
        font-size: 20px;
        color: white;
    }
    header > .top {
        position: absolute;
        left: 20px;
    }
    header > .top a.menu_icon i {
        color: whitesmoke;
        font-size: 40px;
        padding-top: 5px;
        transition: .2s ease;
    }
    header > .top a.menu_icon:hover i {
        color: #fff;
    }
    nav.menu {
        width: 300px;
        /*min-height: calc(100vh - 121px);*/
        height: 100%;
        background-color: #00387b;
        position: absolute;
        left: -300px;
        z-index: 10;
        transition: .3s all;
    }
    nav.menu > a {
        display: block;
        padding: 20px;
        margin: 15px 0 0px 20px;
        color: white;
        font-weight: bold;
        font-size: 17px;
        border-bottom: 1px solid white;
        text-transform: uppercase;
    }
    main {
        width: 100%;
        padding: 30px;
        box-sizing: border-box;
    }


    .menu_show {
        left: 0!important;
    }

    @media screen and (max-width: 425px) {
        header h1 {
            font-size: 16px;
        }
    }
    @media screen and (max-width: 360px) {
        nav.menu {
            width: 100%;
            left: -100%;
        }
    }

    @media only screen and (max-width: 1300px) {
        .hideonmobile
        {
             display: none;
        }
    }

</style>


<body>
<header>
    <div style="display: flex;margin-top: 10px;margin-bottom: 10px;">
        <div><a href="{{Route('mainpage')}}"><img src="http://exco.rocketsweb.net/wp-content/uploads/aaaaa.png" alt="EXCO" width="150"/></a></div>&nbsp;&nbsp;&nbsp;<div class="hideonmobile"><h1 class="text-center" style="color: aliceblue;font-weight: bold;">CATALOGUE IS DESIGNED WITH YOU IN MIND</h1></div>
    </div>
    <div class="top">
        <a href="#" class="menu_icon"><i class="material-icons">menu</i></a>
    </div>
</header>
<nav class="menu">
    <a href="{{Route('advancedsearch')}}" class="item_menu">Application</a>
    <a href="#" class="item_menu">Cross Refference</a>
    <a href="{{Route('dimensions')}}" class="item_menu">Dimensions</a>
    <a href="#" class="item_menu">NEW Products</a>
    <a href="#" class="item_menu">contact</a>
</nav>
<main>

</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<script>
    $(document).ready(function() {
        $("body").on('click', '.top', function() {
            $("nav.menu").toggleClass("menu_show");
        });
    });

</script>

</html>
