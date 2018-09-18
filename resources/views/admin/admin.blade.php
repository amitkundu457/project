<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="csrf-token" {{ csrf_token() }}>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
     <link rel="stylesheet" href="{{asset('/css/mdb.css')}}">
   <link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>

<body class="dark-edition">
    <div id="app">
    <div class="sidebar" data-color="purple" data-background-color="black" style="" data-image="{{asset('public/img/sidebar-2.jpg')}}">
        <!--
         Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

         Tip 2: you can also add an image using data-image tag
     -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
           Creative Tim
         </a>
        </div>
        <div class="sidebar-wrapper" style="">
            <ul class="nav" style=" text">
                <li class="nav-item active  ">
                    <router-link to="/admin/admins">Dashboard
               <i class="material-icons">dashboard</i>
              
             </router-link>
            
                </li>
                <li class="nav-item ">
                    <router-link class="nav-link" to="/admin/Product">Product
               <i class="material-icons">person</i>
               
             </router-link>
                </li>
                <li class="nav-item ">
                    <router-link class="nav-link" to="/admin/category">
                        Category
               <i class="material-icons">content_paste</i>
               
                    </router-link>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./typography.html">
               <i class="material-icons">library_books</i>
               <p>Typography</p>
             </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./icons.html">
               <i class="material-icons">bubble_chart</i>
               <p>Icons</p>
             </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./map.html">
               <i class="material-icons">location_ons</i>
               <p>Maps</p>
             </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./notifications.html">
               <i class="material-icons">notifications</i>
               <p>Notifications</p>
             </a>
                </li>
                <!-- <li class="nav-item active-pro ">
                 <a class="nav-link" href="./upgrade.html">
                     <i class="material-icons">unarchive</i>
                     <p>Upgrade to PRO</p>
                 </a>
             </li> -->
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
             <span class="sr-only">Toggle navigation</span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
           </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-default btn-round btn-just-icon">
                   <i class="material-icons">search</i>
                   <div class="ripple-container"></div>
                 </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                   <i class="material-icons">dashboard</i>
                   <p class="d-lg-none d-md-block">
                     Stats
                   </p>
                 </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="material-icons">notifications</i>
                   <span class="notification">5</span>
                   <p class="d-lg-none d-md-block">
                     Some Actions
                   </p>
                 </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                                <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                                <a class="dropdown-item" href="javascript:void(0)">Youre now friend with Andrew</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                   <i class="material-icons">person</i>
                   <p class="d-lg-none d-md-block">
                     Account
                   </p>
                 </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <router-view></router-view>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com"> Creative Tim</a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">About Us</a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">Blog </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license"> Licenses</a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right" id="date">
                    , made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
       
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{asset('js/app.js')}}"></script>
    
    
   
    <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="{{asset('/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{asset('js/mdb.js')}}"></script>
    <!-- Chartist JS -->
    <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    

   
    <script src="{{asset('js/material-dashboard.js?v=2.1.0')}}"></script>
    
</body>

</html>