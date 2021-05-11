@include('navbar')
<!DOCTYPE html>
<html>
<head>
    <title>Exco Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700,700i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">


    <style>


        /*****owl*****/

        .blog_section {
            padding-top: 5rem;
            padding-bottom: 3rem;

        }
        .blog_section .blog_content .blog_item {
            margin-bottom: 30px;
            box-shadow: 0 0 11px 0 rgba(6, 22, 58, 0.14);
            position: relative;
            border-radius: 2px;
            overflow: hidden;

        }
        .blog_section .blog_content .blog_item:hover .blog_image img {
            transform: scale(1.1);
        }
        .blog_section .blog_content .blog_item .blog_image {
            overflow: hidden;
            padding: 0;
        }
        .blog_section .blog_content .blog_item .blog_image img {
            width: 100%;
            transition: transform 0.5s ease-in-out;
        }
        .blog_section .blog_content .blog_item .blog_image span i {
            position: absolute;
            z-index: 2;
            color: #fff;
            font-size: 18px;
            width: 38px;
            height: 45px;
            padding-top: 7px;
            text-align: center;
            right: 20px;
            top: 0;
            -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 79%, 0 100%);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 79%, 0 100%);
            background-color: #ff5e14;
        }
        .blog_section .blog_content .blog_item .blog_details {
            padding: 25px 20px 30px 20px;
        }
        .blog_section .blog_content .blog_item .blog_details .blog_title h5 a {
            color: #020d26;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 25px;
            line-height: 32px;
            font-weight: 400;
            transition: all 0.3s;
            text-decoration: none;
        }
        .blog_section .blog_content .blog_item .blog_details .blog_title h5 a:hover {
            color: #ff5e14;
        }
        .blog_section .blog_content .blog_item .blog_details ul {
            padding: 0 3px 10px 0;
            margin: 0;
        }
        .blog_section .blog_content .blog_item .blog_details ul li {
            display: inline-block;
            padding-right: 15px;
            position: relative;
            color: #7f7f7f;
        }
        .blog_section .blog_content .blog_item .blog_details ul li i {
            padding-right: 7px;
        }
        .blog_section .blog_content .blog_item .blog_details p {
            border-top: 1px solid #e5e5e5;
            margin-top: 4px;
            padding: 20px 0 4px;
        }
        .blog_section .blog_content .blog_item .blog_details a {
            font-size: 16px;
            display: inline-block;
            color: #ff5e14;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        .blog_section .blog_content .blog_item .blog_details a:hover {
            color: #020d26;
        }
        .blog_section .blog_content .blog_item .blog_details a i {
            vertical-align: middle;
            font-size: 20px;
        }
        .blog_section .blog_content .owl-nav {
            display: block;
        }
        .blog_section .blog_content .owl-nav .owl-prev {
            position: absolute;
            left: -27px;
            top: 33%;
            border: 5px solid #fff;
            text-align: center;
            z-index: 5;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            outline: 0;
            background: #ff5e14;
            transition: all 0.3s;
            color: #fff;
        }
        .blog_section .blog_content .owl-nav .owl-prev span {
            font-size: 25px;
            margin-top: -6px;
            display: inline-block;
        }
        .blog_section .blog_content .owl-nav .owl-prev:hover {
            background: #fff;
            border-color: #ff5e14;
            color: #ff5e14;
        }
        .blog_section .blog_content .owl-nav .owl-next {
            position: absolute;
            right: -27px;
            top: 33%;
            border: 5px solid #fff;
            text-align: center;
            z-index: 5;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            outline: 0;
            background: #ff5e14;
            color: #fff;
            transition: all 0.3s;
        }
        .blog_section .blog_content .owl-nav .owl-next span {
            font-size: 25px;
            margin-top: -6px;
            display: inline-block;
        }
        .blog_section .blog_content .owl-nav .owl-next:hover {
            background: #fff;
            border-color: #ff5e14;
            color: #ff5e14;
        }

        @media only screen and (max-width: 577px) {
            .blog_section .owl-nav .owl-prev {
                left: -17px !important;
            }
            .blog_section .owl-nav .owl-next {
                right: -17px !important;
            }
        }


        /*****owl*****/

        /* enable absolute positioning */
        .inner-addon {
            position: relative;
        }

        /* style glyph */
        .inner-addon .glyphicon {
            position: absolute;
            padding: 20px;
            font-size: 30px;
            color: grey;
            pointer-events: none;
        }

        /* align glyph */
        .left-addon .glyphicon  { left:  0px;}
        .right-addon .glyphicon { right: 0px;}

        /* add padding  */
        .left-addon input  { padding-left:  30px; }
        .right-addon input { padding-right: 30px; }

        /* Solid border */
        hr.solid {
            border-top: 3px solid white;
            width: 100%;
        }


        .responsive{
            max-width:100%;
            max-height:100%;
        }

        .onlyforme{
            margin-top: -200px;
        }


        @media only screen and (max-width: 600px) {
            .responsive{
                max-width:100%;
                max-height:100%;
                display: inline-block;
                justify-content: center;
            }
            .onlyforme{
                margin-top: 0px;
            }
        }

        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        parent{
            position: relative;
        }
    </style>


</head>


<body>

@if (\Session::has('noitems'))
    <div class="text-center">
        <div class="alert alert-success">
            <span style="color:red;font-size: 30px;"><i class="fa fa-warning" style="font-size:48px;"></i>&nbsp;&nbsp;{!! \Session::get('noitems') !!}</span>
        </div>
    </div>


@endif

<div class="container">
<center><div class="">
        <div class="">
            <h2 class="" style="text-align: left;font-weight: 700;font-size: 20px;color: white;">EXCO FILTERS CATALOGUE</h2>
        </div>
        <form method="GET" action="{{Route('mego')}}">

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-search"></i>
                <input type="text" class="form-control" name="myid" placeholder="  Search catalogue..."  style="height: 70px;"/>
            </div>


        </form>

        <div class="row">

            <div class="col-md-4" style="text-align: left;">
                <h3 class="" style="font-weight: 700;font-size: 20px;color: white;">Application type</h3>
                <hr class="solid" style="margin-left: 0px;">
                <div class="row">
                    <div class="col-md-4 responsive"><img src="{{ asset("/images/car.png")}}" width="100%"></div>
                    <div class="col-md-4 responsive"><img src="{{ asset("/images/truck.png")}}" width="100%"></div>
                    <div class="col-md-4 responsive"><img src="{{ asset("/images/collection.png")}}" width="100%"></div>
                </div>

            </div>


            <form method="GET" action="{{Route('product')}}">
            <div class="col-md-4" style="text-align: left;">
                <h3 class="" style="font-weight: 700;font-size: 20px;color: white;">Products</h3>
                <hr class="solid" style="margin-left: 0px;">
                <input type="text" class="form-control" name="product" placeholder="  Search products..." style="height: 100px;"/>
            </div>
            </form>


            <form method="GET" action="{{Route('cross')}}" class="onlyforme">
            <div class="col-md-4" style="text-align: left;">
                <h3 class="" style="font-weight: 700;font-size: 20px;color: white;">Cross Reference</h3>
                <hr class="solid" style="margin-left: 0px;">
                <input type="text" class="form-control" name="cross" placeholder="  Search cross reference..." style="height: 100px;"/>
            </div>
            </form>
        </div>




    <section class="blog_section">

            <div class="blog_content">
                <div class="owl-carousel owl-theme">
                    <div class="blog_item">
                        <div class="blog_image">
                            <img class="img-fluid" src="http://exco.rocketsweb.net/wp-content/uploads/newfilter.jpg" alt="images not found">
                            <center><div class="col-md-4" style="background-color:#00387b;color:white;height: 7%;font-weight:700;font-size:12px;"><p><br>NEW<br></p></div></center>
                            <center><div class="col-md-8" style="background-color:#969595;color:white;height: 7%;"><p><strong>FX10529</strong><br>Cummins 34524</p></div></center>
                        </div>

                    </div>
                    <div class="blog_item">
                        <div class="blog_image">
                            <img class="img-fluid" src="http://exco.rocketsweb.net/wp-content/uploads/newfilter.jpg" alt="images not found">
                            <center><div class="col-md-4" style="background-color:#00387b;color:white;height: 7%;font-weight:700;font-size:12px;"><p><br>NEW<br></p></div></center>
                            <center><div class="col-md-8" style="background-color:#969595;color:white;height: 7%;"><p><strong>FX10529</strong><br>Cummins 34524</p></div></center>
                        </div>

                    </div>
                    <div class="blog_item">
                        <div class="blog_image">
                            <img class="img-fluid" src="http://exco.rocketsweb.net/wp-content/uploads/newfilter.jpg" alt="images not found">
                            <center><div class="col-md-4" style="background-color:#00387b;color:white;height: 7%;font-weight:700;font-size:12px;"><p><br>NEW<br></p></div></center>
                            <center><div class="col-md-8" style="background-color:#969595;color:white;height: 7%;"><p><strong>FX10529</strong><br>Cummins 34524</p></div></center>
                        </div>

                    </div>
                    <div class="blog_item">
                        <div class="blog_image">
                            <img class="img-fluid" src="http://exco.rocketsweb.net/wp-content/uploads/newfilter.jpg" alt="images not found">
                            <center><div class="col-md-4" style="background-color:#00387b;color:white;height: 7%;font-weight:700;font-size:12px;"><p><br>NEW<br></p></div></center>
                            <center><div class="col-md-8" style="background-color:#969595;color:white;height: 7%;"><p><strong>FX10529</strong><br>Cummins 34524</p></div></center>
                        </div>

                    </div>
                </div>
            </div>

    </section>

</center>
</div>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- carousel -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        autoplay:true,
        smartSpeed: 3000,
        autoplayTimeout:7000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            },
            1200:{
                items:5
            }
        }
    })
</script>


</body>
