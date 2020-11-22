<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>It.Next - IT Service Responsive Html Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/animate.css" />
<!-- zoom effect -->
<link rel='stylesheet' href='{{url('public')}}/assets/css/hizoom.css'>
<!-- end zoom effect -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_shop_detail">
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="#"><img src="images/logos/it_logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li><a href="{{url("/home")}}">Home</a></li>
                <li class="active"><a href="{{url("/Login")}}">Shopping Card</a></li> 
                <li><a href="{{url("/Login")}}">Login</a></li> 
                <li><a href="{{url("/register")}}">register</a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Shop Detail</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop Detail</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
          <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="product_detail_feature_img hizoom hi2">
              <div class='hizoom hi2'> <img src="images/it_service/1.jpg" alt="#" /> </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1"> 
            <div class="card-body">
              <h3>{{$produk->nama}}</h3>
              <hr>
              <p>
                  Rp. {{number_format($produk->harga)}} |
                  stok : {{$produk->stok}} |
                  berat : {{$produk->berat}} gr 
              </p>
              <p>
                  deskripsi
                  <br>
                  {!! nl2br ($produk->deskripsi)!!}
              </p>
          </div>
                  <a class="btn btn-dark"href="{{url('home')}}">Kembali</a> 
            </div>
              <form class="cart">
                <div class="quantity">
                  <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                </div>
                <button class="btn sqaure_bt">
                  <a href="{{url("/it_card")}}"> Add To Card</a>
                </button>
              </form>
            </div> 
          </div>
        </div>
    </div>
  </div>
</div>
<!-- end section -->

<!-- end footer -->
<!-- js section -->
<script src="{{url('public')}}/assets/js/jquery.min.js"></script>
<script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="{{url('public')}}/assets/js/menumaker.js"></script>
<!-- wow animation -->
<script src="asssets/js/wow.js"></script>
<!-- custom js -->
<script src="{{url('public')}}/assets/js/custom.js"></script>
<!-- zoom effect -->
<script src='{{url('public')}}/assets/js/hizoom.js'></script>
<script>
        $('.hi1').hiZoom({
            width: 300,
            position: 'right'
        });
        $('.hi2').hiZoom({
            width: 400,
            position: 'right'
        });
    </script>
</body>
</html>
