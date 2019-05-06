{{-- <Header > --}}
			<header>
				<div class="lienhe">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-6 col-xs-5 lienhe-left">
								<p><i class="fa fa-phone" aria-hidden="true"></i>Hotline:0972365339</p>
							</div>
							<div class="col-md-5 col-6 col-xs-7 lienhe-right">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Kiểm tra đơn hàng
										</a>
									</li>
									<li class="-sm">
										<a href="#">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>Giỏ hàng
										</a>
									</li>
									<li class="-sm">
										<a href="{{ route('admin.login') }}">
											<i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>	
				</div>

				<div class="logo">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-4 logo-left">
								<a href="{{route('home')}}">
									<img src="{{asset('img/Untitled-1-03.png')}}" width="100%" height="100%" alt="">
								</a>
							</div>
							<div class=" col-12 col-sm-12 col-md-8 logo-right">
								<div class="row row-tren">
									<ul>
										<li>
											<i class="fa fa-truck"></i>
											<span>Giao hàng miễn phí</span>
										</li>
										<li>
											<i class="fa fa-money"></i>
											<span>Thanh toán linh hoạt</span>
										</li>
										<li>
											<i class="fa fa-refresh"></i>
											<span>Trả hàng trong 30 ngày</span>
										</li>
									</ul>
								</div>

								<div class="row row-duoi ">
									<input type="text" placeholder="Tìm kiếm ..." class="">
									<select class="-sm">
										<option value="">Tất cả</option>
										<option value="">Thời trang nam</option>
										<option>Thời trang nữ</option>
										<option value="">Phụ kiện nam</option>
										<option value="">Phụ kiện nữ</option>
										<option value="">Làm đẹp</option>
										<option value="">Hàng gia da dụng</option>
									</select>
									<button><i class="fa fa-search"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>

				<div class="header">
					<div class="container">
						<ul>
							<li class="hien-menu-header hover-color menu-cha postt">
								<p class="mb-0">Danh mục sản phẩm</p>
								<ul class="postt">
									@foreach($nameParent as $nPr)
											<li class="sub-menu-li hover-li" id="hover-hien">
												<a href="{{route('allProduct',['id'=>$nPr['id'] ]) }}" class="sub-menu-a">
													{{$nPr['name_parent_categories']}}
												</a>
													<ul class="sub-menu-ul" id="ul_{{$nPr['id']}}">
														@foreach($nPr->categories as $k)
															<li class="sub-menu-li hover-li">
																<a href="#" class="sub-menu-a">{{$k->name_categories}}</a>
															</li>
														@endforeach
														
													</ul>
											</li>
									@endforeach
								</ul>
							</li>
							
							<li class="click-color-menu hover-color menu-cha">
								<a href="#">Trang chủ</a>
							</li>

							<li class="hover-color menu-cha">
								<a href="#">Sản phẩm</a>
							</li>

							<li class="hover-color menu-cha">
								<a href="#">Tin tức</a>
							</li>

							<li class="hover-color menu-cha">
								<a href="{{route('introduce')}}">Giới thiệu</a>
							</li>

							<li class="hover-color menu-cha">
								<a href="{{route('contact')}}">Liên hệ</a>
							x`</li>
						</ul>

					</div>
				</div>
			</header>
		<!-- End header