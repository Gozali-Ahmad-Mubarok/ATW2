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
<link rel="stylesheet" href="{{url('public')}}/assets/css/styles.css" />
<link rel="stylesheet" href="{{url('public')}}/assets/css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{url('public')}}/assets/css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/revolution/css/navigation.css" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service">
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start --> 
          <div class="logo"> <a href="#"><img src="{{url("public")}}/images/logos/it_logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li>
                  <a href="{{url("/home")}}">Home</a>
                </li>
                 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" target="_blank">Kategori<span class="caret"></span></a> 
                  <ul class="dropdown-menu">
                    @foreach ($list_kategori as $kategori)
                    <li>
                      <div class="aa-cartbox-info">
                      <a href="{{url("it_shop_detail")}}">{{$kategori->nama}}</a>
                      </div>
                    </li>
                    @endforeach
                        </ul>
                  </li>
                <li>
                  <a href="{{url("/it_card")}}">Shopping card </a>
                </li>
                <li>
                  <a href="{{url("/Login")}}">Login</a>
                </li>
                <li>
                  <a href="{{url("/register")}}">Registrasi</a>
                </li>
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
                <li class="active"><a href="#">Home</a></li>
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
<div class="section padding_layout_1">
  <div class="container">
    <div class="container">
      <div class="card">
        <div class="card-body col-md-6">
            <form action="{{url('home/filter')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="" class="control-label"> Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$nama ??""}}"></input>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="control-label"> harga Min </label>
                        <input type="text" class="form-control" name="harga_min" value="{{$harga_min ??""}}"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="control-label"> harga Max</label>
                        <input type="text" class="form-control" name="harga_max" value="{{$harga_max ??""}}"></input>
                    </div>
                </div>
            </div>
            <button class="btn btn-dark float-right"><i class="fa fa-search"></i>
                Filter
            </button>
            <br>
            <br>
            <br>
            </form>
        </div>
        <img src="{{url('public')}}/img/brand.png" alt="">
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Our Products</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container col-md-12">
      <div class="row">
        @foreach ($list_produk as $produk)
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
          <div class="product_list">
            <div class="product_img" href={{url("/it_shop_detail", $produk->id)}}> <img class="img-responsive" src="images/it_service/1.jpg" alt=""> </div>
            <div class="product_detail_btm">
              <div class="center">
                <h4><a href="{{url("/it_shop_detail")}}">{{$produk->nama}}</a></h4>
              </div>
              <div class="product_price">
                <p><a href="{{url("/it_shop_detail")}}">Rp.{{$produk->harga}}</a></p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
<!-- end section -->
</body>
</html>
