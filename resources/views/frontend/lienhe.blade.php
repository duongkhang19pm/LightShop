@extends('layouts.frontend')

@section('pagetitle')
    Frontend
@endsection

@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-end justify-content-center">
	          <div class="col-md-9 ftco-animate mb-5 text-center">
	          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>LIÊN HÊ <i class="fa fa-chevron-right"></i></span></p>
	            <h2 class="mb-0 bread">LIÊN HỆ</h2>
	          </div>
	        </div>
	      </div>
	</section>
   <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper px-md-4">
							<div class="row mb-5">
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Địa chỉ:</span>An Giang University</p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Điện thoại:</span> <a href="tel://1234567920">+84 999 999 999</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span> <a href="mailto:LightStore@student.agu.edu.vn">LightStore@gmail.com</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Website</span> <a href="#">LightStore.com</a></p>
					          </div>
				          </div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Liện hệ với chúng tôi</h3>
										<form action="{{ route('frontend.lienhe') }}" method="post" class="contactForm">
										 @csrf
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="hovaten">Họ và tên</label>
														<input type="text" class="form-control @error('hovaten') is-invalid @enderror" id="hovaten" name="hovaten" value="{{ old('hovaten') }}" placeholder="Họ và tên" required />
				                                        @error('hovaten')
				                                        	<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
				                                        @enderror
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Địa chỉ Email</label>
 														<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"placeholder="Địa chỉ Email" required />
					                                    @error('email')
					                                       <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
					                                    @enderror
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="sodienthoai">Số điện thoại</label>
														 <input type="text" class="form-control @error('sodienthoai') is-invalid @enderror" id="sodienthoai" name="sodienthoai" value="{{ old('sodienthoai') }}" placeholder="Địa chỉ EmailSố điện thoại" required />
					                                     @error('sodienthoai')
					                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
					                                     @enderror
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Nội dung</label>
														<textarea name="noidung" class="form-control @error('noidung') is-invalid @enderror" id="noidung" cols="30" rows="4" placeholder="Nội dung"></textarea>
														@error('noidung')
                                        					<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                    					@enderror
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Gửi tin" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 order-md-first d-flex align-items-stretch">
									<div id="map" class="map"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection
   