@extends('front-end.base')
@section('content')
	<section class="content">
			<div class="container">
						<div class="row product-content">
							<h3>{{-- {{$nameParent['name_parent_categories']}} --}}</h3>
						</div>
						<div class="row option-content">
							<div class="col-12 col-md-4 option-content-left">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-th-large option-content-left-one"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-th-list option-content-left-two"></i>
										</a>
									</li>
									<li>
										Sản phẩm/trang
										<select name="" id="">
											<option value="">
												10
											</option>
											<option value="">
												12
											</option>
											<option value="">
												15
											</option>
											<option value="">
												20
											</option>
											<option value="">
												30
											</option>
										</select>
									</li>
								</ul>
							</div>
							<div class="col-12  col-md-8 option-content-right res-mb-none">
								<ul>
									<li>
										Sắp xếp
										<select name="op12" id="haha" >
											<option value="op">
												Mặc định
											<option value="op12">
												Giá tăng dần
											<option value="op15">
												Giá giảm dần
											</option>
											<option value="op20">
												Tên sản phẩm : A to Z
											</option>
											<option value="op30">
												Tên sản phẩm : Z to A
											</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
						<div class="row product-main">
							<div class="container-fluid">
								<div class="row">
									{{-- @foreach($productNew as $key =>$item) --}}
										<div class="col-12 col-md-3 col-sm-5 sha-dow">
											<div class="product-size">
												<div class="img-product">
													<a href="#"><img src="upload/image/#" alt=""></a>
													<span>%</span>
												</div>
												<div class="profile-product">
													<a href="#">
														<p class="text-center"></p>
													</a>

													<p class="text-center profile-product-p" > .000 VNĐ</p>
												</div>
												<div class="go-to-product">
													<a href="#">
														<i class="fa fa-shopping-cart"></i>
													</a>
												</div>
											</div>
										</div>
									{{-- @endforeach --}}
										
								</div>

							</div>
						</div>
						{{-- <div class="row">
						   {{ $linkNew->appends(request()->query())->links() }}
						</div> --}}

					</div>
	</section>
@endsection