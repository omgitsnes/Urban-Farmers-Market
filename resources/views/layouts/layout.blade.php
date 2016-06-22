<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Urban Farmers Market</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/ufm.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Urban Farmer's Market</a>
            </li>
            <li>
                <a href="{{ route('Home')}}" onclick = $("#menu-close").click(); >@if (Auth::check()) {{ Auth::user()->name }} @else Home @endif</a>
            </li>
            <li>
                <a href="#advertisements" onclick = $("#menu-close").click(); >Advertisements</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Users</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1 class="text-border">Urban Farmers Market</h1>
            <h3>We do not have to accept the world as we find it. And we have a responsibility to leave our world a better place and never walk by on the other side of injustice.<h3>
            <br>
            <div class="input-group col-xs-6">
                <input type="text" name="search-field" placeholder="what are you looking for?" class="form-control">
                <div class="input-group-btn">
                    <button type="button" name="search" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <br>
            <a href="#about"><button class="btn btn-default btn-success">Find Out More</button></a>
            <a href="#advertisements"><button class="btn btn-default btn-info">Advertisements</button></a>
            <a href="#about"><button class="btn btn-default btn-danger">Users</button></a>
        </div>
    </header>

@yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Urban Farmers Market</strong>
                    </h4>
                    <p>This is where we are</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>Contact us</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:contact@ufm.com">contact@ufm.com</a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Urban Farmers Market 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

    </body>

</html>
