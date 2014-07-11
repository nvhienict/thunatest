@extends('template.khung')
@section('content')
<head>
	<title>Detail Vendor</title>
	<link href="{{Asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <link href="{{Asset('public/assets/css/style.css')}}" rel="stylesheet">
     <link href="{{Asset('public/assets/css/slide.css')}}" rel="stylesheet">
</head>
<body>
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<div id="vendor">
		<div class="row ">
			<div class="col-xs-8 col-md-9 ">
				<div>
					<div id="image-vendor">
						<!-- //hiển thị avatar của vendor ở đây -->
						@yield('image-vendor')
						<a href="#">
							<img src="{{Asset('public/vendor/mondial.jpg')}}" class="img-vendor">
						</a>
						<br/>
						<div class="fb-like" data-href="https://www.facebook.com/thuna.1987" data-width="150px" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
					</div>
					<div id="detail-vendor"> 

						<!-- hiện thị chi tiết các thông tin vendor ở đây -->

						@yield('detail-vendor')


						<h3>Khách sạn Mondial Hue</h3>
						<p>Mondial Hotel là nơi hoàn hảo cho đám cưới </p>
						<p> thông tin đánh giá tại đây</p>
						17 Nguyễn Huệ, phường Vĩnh Ninh, thành phố Huế<br/>
						Website: http://www.mondialhotel.com.vn/<br/>
						Dịch vụ: đám cưới, đám hỏi, tiệc.<br/>
						Phục vụ: Trong nhà<br/>
						Sức chứa: 350 người<br/>
						<a href="#"> more detail </a>

					</div>
					<div Style="clear: both;"></div>
					<script type="text/javascript">
						$(function () {
       				 $('#vendor-menu a:first').tab('show')
						})
					</script>
					<div class="tab-menu">
						<ul class="nav nav-tabs nav-justified" id="vendor-menu" role="tablist">
							<li > <a href="#aboutme" data-toggle="tab">Hồ Sơ</a></li>
							<li class="boder-style"> <a href="#review" data-toggle="tab">Review(6)</a></li>
							<li class="boder-style"> <a href="#photo" data-toggle="tab">Ảnh</a></li>
							<li class="boder-style"> <a href="#video" data-toggle="tab">Video</a></li>
							<li class="boder-style"> <a href="#FQA" data-toggle="tab" >FQA</a></li>
							<li class="boder-style"> <a href="#MAP" data-toggle="tab">Map</a></li>
						</ul>
						<div class="tab-content">
					        <div class="tab-pane active" id="aboutme">


					        	@yield('tab-hoso')



					        	<div id="content-vendor">
									<h4> Đôi nét về chúng tôi</h4>
									<p>Nằm trên cung đường sôi động của thành phố, khách sạn Mondial mang vẻ hiện đại mà thanh thoát. 
										Ngoài hệ thống phòng ốc, trang thiết bị đủ tiêu chuẩn 4 sao, 
										Mondial còn cung cấp các dịch vụ tổ chức tiệc cưới, mang đến cho khách sự hài lòng trọn vẹn nhất 
										 để lưu giữ khoảnh khắc hạnh phúc trong ngày vụi trọng đại này.</p>
									<p>Sở hửu vẻ sang trọng, ấm cúng, với sức chứa từ 350 khách trở lên, phòng tiệc cưới của khách sạn được thiết kế trang nhã, hiện đại với tông màu trắng chủ đạo mang đậm phong cách châu Âu, tạo không gian lãng mạn cho ngày cưới của bạn.</p>
									<p>Từ cổng chào, bàn tiệc hay sảnh cưới đều được trang trí bằng hoa tươi theo các phong cách khác nhau: tinh tế, lãng mạn và sang trọng với những đóa hoa ly trắng muốt, hoa hồng trắng thơm ngát, hay những đóa cẩm tú cầu thanh nhã. Tất cả sẽ biến tiệc cưới của bạn thành chốn thiên đường thật sự , tràn ngập hương sắc thiên nhiên với màu xanh tươi mát của lá và màu trắng tinh khiết của hoa.</p>
								</div>
								<div class="tab-menu" id="photos">
									<h4>Ảnh</h4> 

									  <!-- Wrapper for slides -->
									<div id="bigPic">
									    <img alt="" src="public/imgs/1.jpg">
									    <img alt="" src="public/imgs/2.jpg">
									    <img alt="" src="public/imgs/3.jpg">
									    <img alt="" src="public/imgs/4.jpg">
									    <img alt="" src="public/imgs/5.jpg">
									    <img alt="" src="public/imgs/6.jpg">
									    <img alt="" src="public/imgs/7.jpg">
									    
									</div>

									<ul id="thumbs">
									    <li class="active" rel="1"><img alt="" src="public/imgs/1_thumb.jpg"> </li>
									    <li rel="2"><img alt="" src="public/imgs/3_thumb.jpg"> </li>
									    <li rel="3"><img alt="" src="public/imgs/4_thumb.jpg"> </li>
									    <li rel="4"><img alt="" src="public/imgs/5_thumb.jpg"> </li>
									    <li rel="5"><img alt="" src="public/imgs/6_thumb.jpg"> </li>
									    <li rel="6"><img alt="" src="public/imgs/7_thumb.jpg"> </li>
									    <li rel="7"><img alt="" src="public/imgs/8_thumb.jpg"> </li>
									   
									</ul>
									<script type="text/javascript">
											var currentImage;
										    var currentIndex = -1;
										    var interval;
										    function showImage(index){
										        if(index < $('#bigPic img').length){
										        	var indexImage = $('#bigPic img')[index]
										            if(currentImage){   
										            	if(currentImage != indexImage ){
										                    $(currentImage).css('z-index',2);
										                    clearTimeout(myTimer);
										                    $(currentImage).fadeOut(250, function() {
															    myTimer = setTimeout("showNext()", 3000);
															    $(this).css({'display':'none','z-index':1})
															});
										                }
										            }
										            $(indexImage).css({'display':'block', 'opacity':1});
										            currentImage = indexImage;
										            currentIndex = index;
										            $('#thumbs li').removeClass('active');
										            $($('#thumbs li')[index]).addClass('active');
										        }
										    }
										    
										    function showNext(){
										        var len = $('#bigPic img').length;
										        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
										        showImage(next);
										    }
										    
										    var myTimer;
										    
										    $(document).ready(function() {
											    myTimer = setTimeout("showNext()", 3000);
												showNext(); //loads first image
										        $('#thumbs li').bind('click',function(e){
										        	var count = $(this).attr('rel');
										        	showImage(parseInt(count)-1);
										        });
											});
										    
											
											</script>	
									
								</div>
								<div style="clear:both;"></div>
								<div class="tab-menu">
									<h4>Video</h4> 
								 <iframe width="560" height="315" frameborder="0" allowfullscreen="" src="http://www.youtube.com/&#101;mbed/fR4xKIRxCRE"></iframe>
								</div>
								<div class="tab-menu">
									<h4>Review</h4> 
									<p>
										Rebecca là tuyệt vời. Chúng tôi đã có đám cưới của những giấc mơ của chúng tôi mùa hè vừa qua tại Tern Lake Inn ở Alaska và bàn tay xuống này sẽ không xảy ra mà không có cô. 
									</p>	
									<p>
										Khi lựa chọn một kế hoạch tôi đang tìm kiếm một ai đó lắng nghe những gì tôi đã hình dung, có thể cung cấp đầu vào sáng tạo để nâng cao tầm nhìn, và là chuyên nghiệp và tổ chức, làm việc chăm chỉ, và kết nối với các nhà cung cấp khu vực. 
									</p>	
								</div>
								<div id="prok-detail" class="tab-menu">
									<h4>Tôi biết</h4> 
									<div class="vendor-img"> 
										<img src="{{Asset('public/vendor/1.jpg')}}">
										<a href="#">Peter Bang Photography</a>
									</div>
									<div class="vendor-img"> 
										<img src="{{Asset('public/vendor/2.jpg')}}">
										<a href="#">Roberts and Company Events</a>
									</div>
									<div class="vendor-img"> 
										<img src="{{Asset('public/vendor/3.jpg')}}">
										<a href="#">Renee Michele Photography</a>
									</div>
									<div class="vendor-img"> 
										<img src="{{Asset('public/vendor/4.jpg')}}">
										<a href="#">Mindy's Catering</a>
									</div>
									<div class="vendor-img"> 
										<img src="{{Asset('public/vendor/5.jpg')}}">
										<a href="#">Melissa Arroyo Photography</a>
									</div>
								</div>
					        </div>
					        <div class="tab-pane" id="review">
					        	@yield('tab-review')
					       		Review
					   		</div>
					        <div class="tab-pane" id="photo">
					        	@yield('tab-photo')
					        	Ảnh
					        </div>
					        <div class="tab-pane" id="video">
					        	@yield('tab-video')
					        	Video
					        </div>
					        <div class="tab-pane" id="FQA">
					        	@yield('tab-FQA')
					        	FQA
					        </div>
					        <div class="tab-pane" id="MAP">
					        	@yield('tab-map')
					        	BẢN ĐỒ
					        </div>
					    </div>
							<br>
					</div>
					
				
			</div>
		</div>
			<div class="col-xs-4 col-md-3 ">
				<div class="contact-me">
					<h3> <i class="glyphicon glyphicon-earphone"></i> 01234 856 856 </h3>
					<p>Xin vui lòng cho biết nhà cung cấp này bạn tìm thấy trên Thuna.vn</p>
					<div class="form">
						<form class="form-horizontal" role="form">
						  <div class="form-group">
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="input-firstname" value="Thuỷ">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="Input-lastname" value="Trần Thị">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="input-email" value="thuy11i3@gmail.com">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-10">
						      <input type="date" class="form-control" id="date-wedding" value="25/07/2014">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-10">
						      <select class="form-control">
								  <option> Gởi thông tin qua mail cho tôi</option>
								  <option> Hãy gọi cho tôi </option>
								  <option> Đặt một câu hỏi</option>
							  </select>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="button" class="btn btn-primary btn-lg active"> Liên lạc</button>
						  </div>
						</div>
						</form>
					</div>
				<div class="action">
					<a href="#"><i class="glyphicon glyphicon-star yellow"></i> Viết phản hồi</a><br/>
					<a href="#"><i class="glyphicon glyphicon-heart pink"></i> Lưu nhà cung cấp dịch vụ này</a><br/>
					<img src="{{Asset('public/icon-footer/icon-fb.jpg')}}"><a href="#"> Tìm tôi trên Facebook</a><br/>
					<img src="{{Asset('public/icon-footer/twitter.jpg')}}"><a href="#"> Theo dõi tôi trên twitter</a><br/>
					<img src="{{Asset('public/icon-footer/pin.jpg')}}"><a href="#"> Theo dõi tôi trên Pinterest</a>
				</div>
				<div id="danhgia">
					hiển thị đánh giá
				</div>
				<div id="Giaithuong">
					Các giải thưởng đã nhận được
				</div>
			</div>
			
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
@endsection