@extends('front-end.base')
@section('content')
	<section class="content pb-5">
				<div class="container">
					<div class="row pb-4">
						<span>
							<a href="{{route('home')}}" class="text-secondary a-none">Trang chủ /</a>
							
							<a href="{{route('contact')}}" class="text-secondary a-none">Liên hệ</a>
						</span>
					</div>


					<div class="row">
						<div class="col-6 col-md-6">
							<div class="row">
								<h3 class="text-danger pr-5">Thông Tin Liên Hệ</h3>
							</div>
							<div class="row">
								<h5 class="pl-3">Trụ sở chính:</h4>
							</div>
							<div class="row">
								<p class="pl-3">Số 43 Hoàng Diệu , Ba Đình , Hà Nội</p>
							</div>
							<div class="row">
								<h5 class="pl-3">Số điện thoại:</h5>
							</div>
							<div class="row">
								<p class="pl-3">0972365339</p>
							</div>
							<div class="row">
								<h5 class="pl-3">Email:</h5>
							</div>
							<div class="row">
								<p class="pl-3">ThanhBinhkma27@gmail.com</p>
							</div>
							<div class="row pt-5">
								<h3 class="text-danger pr-5">Gửi Liên Hệ Về ThanhBinhShop</h3>
							</div>
							<form>
							  <div class="form-group">
							    <label for="name">Họ tên:</label>
							    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Họ và tên">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Giới Tính :</label>
							    <br>
							    <label for="">Nam</label>
							    <input type="radio" id="exampleInputPassword1" class="pr-3">
							    <label for="" class="pl-5">Nữ</label>
							    <input type="radio" id="exampleInputPassword1">
							  </div>

							  <div class="form-group">
							    <label for="name">Email:</label>
							    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Email">
							  </div>

							  <div class="form-group">
							    <label for="name">Số điện thoại:</label>
							    <input type="number" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Số điện thoại:">
							  </div>

							  <div class="form-group">
							    <label for="name">Thông Điệp :</label>
							    <textarea class="form-control"></textarea>
							  </div>
							  
							  <button type="submit" class="btn btn-primary">Send</button>
							</form>
						</div>
						<div class="col-6 col-md-6">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.897575164215!2d105.83245601458785!3d21.03678389288093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgQ2jhu6cgVOG7i2NoIEjhu5MgQ2jDrSBNaW5o!5e0!3m2!1svi!2s!4v1556867764531!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</section>
@endsection