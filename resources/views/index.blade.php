<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" {{csrf_token()}}>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('/js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .footer-div li {
            list-style: none;
            margin-left: -32px;
            margin-top: 10px;
            color: #bcbdc7;
        }

        .topbar li {
            display: inline-block;
            margin-top: 12px;
            margin-left: 15px;
            font-size: 14px;
        }

        footer h5 {
            color: #f1f3fd;
        }

        .topbar li a {
            color: #bcbdc7;
        }

        .searc_bar {
            width: 92%;
            border-bottom-left-radius: 6px;
            border-top-left-radius: 6px;
            border: none;
            height: 38px;

        }

        .btn_search {
            margin-left: -4px;
            margin-top: 12px;

            border: none;
            height: 38px;
        }

        .cart i {
            color: #f4a137;
            font-size: 40px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div id="app">
        <div class="container-fluid" style="background: #232f3e;border-bottom: 0.3px solid rgba(188,189,199,0.88)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="topbar ">
                            <li><a href="#">English</a></li>
                            <li><a href="#">US Dollar</a></li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="topbar pull-right">
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> My wishlist</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!---end of top bar--->
        <div class="container-fluid" style="background: #232f3e;padding: 10px;border-bottom: 0.3px solid rgba(188,189,199,0.88)">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('images/logo.png')}}" alt="logo">
                </div>
                        <div class="col-md-5">
                            <form action="">
                                <span>
                                <input type="text" class="searc_bar" placeholder="Search.." name="search">
                         <button type="submit" class="btn_search"><i class="fa fa-search"></i></button>
                            </span>
                            </form>
                        </div>
                        <div class="col-md-2" align="center">
                            <p style="font-size: 25px;color: #ffffff;"><i class="fa fa-phone-square"></i> Call now</p>
                            <p style="color: #ffffff;margin-top: -20px">0123-456-789</p>
                        </div>
                        <div class="col-md-2" align="center">
                            <div class="cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                </div>

            </div>
            <nav class="navbar navbar-expand-lg " style="background: #232f3e;height: 50px; ">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation"></button>
                            <div class="collapse navbar-collapse navbar-expand-md" id="collapsibleNavId">

                                <div class="col-md-4">
                                    <ul class="nav navbar-nav mr-auto" style="margin-left: 30px">

                                        <li class="nav-item active">
                                            <h4><a class="nav-link" href="#">All categorie</a></h4>
                                        </li>


                                    </ul>
                                </div>

                                <div class="col-md-8">
                                    <ul class="nav navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <router-link to="/">Home</router-link>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <router-link to="/shop">Shop</router-link>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <router-link to="/service">Service</router-link>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <router-link to="/project">Project</router-link>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--------------------------------end of nav--------------------->

            <router-view></router-view>

            <footer style="background: #232f3e;padding: 60px;">
                <div class="container-fluid" style="background: #232f3e;margin-top: 30px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>INFORMATION</h5>
                                <ul class="footer-div">
                                    <li>About Us</li>
                                    <li>FAQ</li>
                                    <li>Order history</li>
                                    <li>Order information</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5>CUSTOMER SERVICE</h5>
                                <ul class="footer-div">
                                    <li>Contact Us</li>
                                    <li>Return</li>
                                    <li>Sitemap</li>
                                    <li>Order information</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5>MY ACCOUNT</h5>
                                <ul class="footer-div">
                                    <li>Brands</li>
                                    <li>Gift voucher</li>
                                    <li>Our blog</li>
                                    <li>Order information</li>
                                </ul>
                            </div>
                            <div class="col-md-3" style="padding-left: 0;padding-right: 0">
                                <h5>CONTACT US</h5>
                                <p style="color: #bcbdc7;text-align: justify">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Architecto assumenda corporis cumque ipsum maiores optio pariatur
                                    provident repellat repudiandae veniam. Animi consequuntur cum eaque earum nemo perferendis
                                    repellat repudiandae sunt?</p>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            <div class="container-fluid" align="center" style="border-top:  0.3px solid rgba(188,189,199,0.88);padding: 20px;background: #232f3e">
                <p style="color: #bcbdc7;"> © 2018 Market. All Rights Reserved.</p>
            </div>
        </div>
        <script src="{{asset('/js/app.js')}}"></script>
        <script src="{{asset('/js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
</body>

</html>
