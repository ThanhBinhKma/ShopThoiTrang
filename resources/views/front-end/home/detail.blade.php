@extends('front-end.base')
@section('style')
	<style>
	.product-as{
		position: relative;
	}
	.product-as h3{
		color:#7dc30d;
	}
	.product-as span{
		height: 3px;
	    background: #333333;
	    width: 80%;
	    left: 24%;
	    position: absolute;
	    top: 66%;
	}
	span.color{
		width: 12px;
		height: 12px;
		position: absolute;
		top: 30%;
		left: 80%;

	}
	label.rel-color{
		position: relative;

	}
	span.cost{
		text-decoration: line-through;
	}
	</style>
@endsection
@section('content')
	<section class="content pt-5 mb-5">
				<div class="container">
					{{-- <div class="row pl-3 pb-4">
						<span><a href="{{ route('home') }}" class="text-secondary"> Trang chủ</a> >>
							<a href="#" class="text-secondary">
								
								{{$info->categories->name_categories}}

							</a>
						
						 <a href="#" class="text-secondary">Quần âu</a> >>
						
					</div> --}}

					<div class="row">
						<div class="col-md-6 col-6 col-lg-6 col-xl-6">
					        <div class="show" href="{{ URL::to('/') }}/upload/image/{{$infoImage[0]}}">
					       
					          	<img src="{{URL::to('')}}/upload/image/{{ $infoImage[0] }}">
					        </div>
						      <div class="small-img">
						        <img src="{{asset('img/online_icon_right@2x.png')}}" class="icon-left" alt="" id="prev-img">x
						        <div class="small-container">
							          <div id="small-img-roll">
							          	@foreach($infoImage as $item)
								            <img src="{{URL::to('/')}}/upload/image/{{$item}}" alt="" class="show-small-img">
								        @endforeach
							          </div>
						        </div>
						        <img src="{{asset('img/online_icon_right@2x.png')}}" class="icon-right" alt="" id="next-img">
						      </div>
						</div>
						<div class="col-md-6 col-6">
							<h3>Quần âu</h3>
							<p class="pt-2">Giá : 
								<span class="cost pr-4">{{$info['price']}}.000 VNĐ</span>
								<span>{{ $info['price']-($info['price'] * ($info['sale_off']/100)) }}.000 VNĐ</span></p>
							<p>Tình trạng :
								@if($info['status']===1)
									Còn hàng
									@else
									Hết hàng
								@endif
							</p>
							<p>Mô tả : 
								{{$info['description']}}
							</p>
							<div class="row">
							<div class="col-6 col-md-6">
								<p>Màu Sắc :</p>
								@foreach($color as $key)
									<label for="color" class="rel-color pr-5"><span class="color pr-2" style="background-color:">
									</span>{{$key['name_color']}} </label>
									<input type="radio" id="color" name="{{$key['name_color']}}"  value="{{$key['name_color']}}">
									<br>
								@endforeach
							</div>
							<div class="col-6 col-md-6">
								<label for="qty">Số lượng</label>
								<select name="" id="">
									@for($i= 0 ; $i < $info['quantity'] ; $i++)
									<option value="">{{$i}}</option>
									@endfor
								</select>
							</div>
							</div>

							<div class="row pb-5">
								<p class="pl-3 pr-5">Size:</p>
								<select name="" id="">
										<option value="1" class="w-100">
											@foreach($infoSize as $key)

											<option value="1">{{$key}}</option>
											@endforeach
										</option>
								</select>
							</div>
							
							<button class="btn  btn-success mr-5"> ADD CART</button>	
							<a class="btn btn-danger text-white">BUY NOW</a>	
						</div>
					</div>
					<div class="row product-as pt-5">
						<h3>Sản Phẩm Tương Tự</h3>
						<span></span>
					</div>
					<div class="row product-main">
						<div class="container-fluid">
							<div class="row">
								@foreach($infoToo as $key =>$item)
									<div class="col-12 col-md-3 col-sm-5 sha-dow">
										<div class="product-size">
											<div class="img-product">
												<a href="{{route('detail',['id' => $item['id']])}}">
													<img src="{{URL::to('/')}}/upload/image/{{$item['url_image'][0]}}" alt="">
												</a>
												<span>{{$item['sale_off']}}%</span>
											</div>
											<div class="profile-product">
												<a href="#">
													<p class="text-center"> {{$item['name']}}</p>
												</a>

												<p class="text-center profile-product-p" >{{$item['price']}}.000 VNĐ</p>
											</div>
											<div class="go-to-product">
												<a href="#">
													<i class="fa fa-shopping-cart"></i>
												</a>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
		<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36251023-1']);
	  _gaq.push(['_setDomainName', 'jqueryscript.net']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
@endsection
