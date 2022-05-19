<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Library | Uva Collage</title>

    <!--favicon icons-->
    <link rel="shortcut icon" href="favicon/icon.png" type="image/x-icon"/>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

    <!-- Mobile Menu -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/menu.positioning.css">

    <!--style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}?v=1.0.0" rel="stylesheet">

    
</head>
<body>

    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index-2.html">
                                            <img src="logo/logo.png" alt="Uva LMS" style="width: 200px;" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="#"><i class="fa fa-phone"></i>055 - 123 4569</a>
                                            <span>/</span>
                                            <a href="#"><i class="fa fa-envelope"></i>uvacollage@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="topbar-links">
                                            <a href="signin.html"><i class="fa fa-lock"></i>Login / Register</a>
                                            <span>|</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><a href="books-gride">Books</a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="books-gride">Subjects</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Sinhala</a></li>
                                            <li><a href="#">Science</a></li>
                                            <li><a href="#">Maths</a></li>
                                            <li><a href="#">Buddhism</a></li>
                                            <li><a href="#">History</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Geography</a></li>
                                            <li><a href="#">Econ</a></li>
                                            <li><a href="#">Music</a></li>
                                            <li><a href="#">Drama</a></li>
                                            <li><a href="#">Art</a></li>
                                            <li><a href="#">ICT</a></li>
                                            <li><a href="#">Media</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Categories</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">category 1</a></li>
                                            <li><a href="#">category 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">languages</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Sinhala</a></li>
                                            <li><a href="#">Tamil</a></li>
                                            <li><a href="#">English</a></li>
            
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title">
                                    <h4>Navigation</h4>
                                    <a href="#" class="close"></a>
                                </li>
                                <li><a href="#">Home</a></li>
                                <li class="active"><a href="books-gride">Books</a></li>
                                <li>
                                    <a href="#">Subjects</a>
                                    <ul>
                                        <li><a href="#">Sinhala</a></li>
                                        <li><a href="#">Science</a></li>
                                        <li><a href="#">Maths</a></li>
                                        <li><a href="#">Buddhism</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Geography</a></li>
                                        <li><a href="#">Econ</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Drama</a></li>
                                        <li><a href="#">Art</a></li>
                                        <li><a href="#">ICT</a></li>
                                        <li><a href="#">Media</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Categories</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">category 1</a></li>
                                        <li><a href="#">category 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">languages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sinhala</a></li>
                                        <li><a href="#">Tamil</a></li>
                                        <li><a href="#">English</a></li>
        
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    

    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Books</h2>
                <span class="underline center"></span>
                <p class="lead">Books details are display here...</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Books Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="books-media-gird">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="container">
                                    <div class="filter-box">
                                        <h3>What are you looking for at the library?</h3>
                                        <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                                    <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <select name="catalog" id="catalog" class="form-control">
                                                        <option>Search the Catalog</option>
                                                        <option>Catalog 01</option>
                                                        <option>Catalog 02</option>
                                                        <option>Catalog 03</option>
                                                        <option>Catalog 04</option>
                                                        <option>Catalog 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <select name="category" id="category" class="form-control">
                                                        <option>All Categories</option>
                                                        <option>Category 01</option>
                                                        <option>Category 02</option>
                                                        <option>Category 03</option>
                                                        <option>Category 04</option>
                                                        <option>Category 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <!-- End Search Section -->
                        </div><!--End row-->

                        
                            
                        <!--single book-->
                        <div class="booksmedia-fullwidth">
                            <ul>
                                @foreach ($books as $book)
                                <li>
                                    <div class="book-list-icon blue-icon"></div>
                                    <figure>
                                        <a href=""><img src="{{ $book->book_image }}" alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="">{{ $book->book_name }}</a></h4>
                                                <p><strong>Author:</strong>{{ $book->author_name }} </p>
                                                
                                            </header>
                                            <p>{{ $book->book_desc }}</p>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                     @if ($book->status == 0)
                                                     <li style="color: green">Available</li>
                                                     <li>
                                                        <a href="{{ route('admin.books.borrowConfirm', $book->book_id) }}">Borrow</a>
                                                    </li>
                                                    @else
                                                        <li style="color: red">Not Available</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>                                               
                                </li>
                                @endforeach
                            </ul>
                        </div><!--booksmedia-fullwidth-->
                        
                    </div><!--End container-->
                </div><!--End books-media-gird-->
            </main><!--End site-main-->
        </div><!--End content-area-->
    </div><!--End site-content-->
     
   

    @include('footer')

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    
    <!-- jQuery Latest Version 1.x -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Mobile Menu -->
    <script src="js/mmenu.min.js"></script>
    <!-- Harvey - State manager for media queries -->
    <script src="js/harvey.min.js"></script>
    <!-- Waypoints - Load Elements on View -->
    <script src="js/waypoints.min.js"></script>
    <!-- Facts Counter -->
    <script src="js/facts.counter.min.js"></script>
    <!-- MixItUp - Category Filter -->
    <script src="js/mixitup.min.js"></script>

    <!--gallery view-->
    <script src="js/jquery.hislide.js"></script>

    <script>
        $('.slide').hislide();
    </script>

    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Accordion -->
    <script src="js/accordion.min.js"></script>
    <!-- Responsive Tabs -->
    <script src="js/responsive.tabs.min.js"></script>
    <!-- Responsive Table -->
    <script src="js/responsive.table.min.js"></script>
    <!-- Masonry -->
    <script src="js/masonry.min.js"></script>
    <!-- Carousel Swipe -->
    <script src="js/carousel.swipe.min.js"></script>
    <!-- bxSlider -->
    <script src="js/bxslider.min.js"></script>
    <!-- Custom Scripts -->
    <script src="js/main.js"></script>

    <script src="https://kit.fontawesome.com/ff2d286ff7.js" crossorigin="anonymous"></script>

    
</body>
</html>