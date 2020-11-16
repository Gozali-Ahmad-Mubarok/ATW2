@extends('template.base')

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
      <div class="product_list">
        <div class="product_img"> <img class="img-responsive" src="images/it_service/OIP.jpg" alt=""> </div>
        <div class="product_detail_btm">
          <div class="center">
            <h4><a href="{{url("/it_shop_detail")}}">LAPTOP</a></h4>
          </div>
          <div class="starratin">
            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
      <div class="product_list">
        <div class="product_img"> <img class="img-responsive" src="images/it_service/OIP2.jpg" alt=""> </div>
        <div class="product_detail_btm">
          <div class="center">
            <h4><a href="{{url("/it_shop_detail")}}">PC</a></h4>
          </div>
          <div class="starratin">
            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection