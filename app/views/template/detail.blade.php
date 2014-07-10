<html>
<head>
	<title>Detail Vendor</title>
	<link href="{{Asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <link href="{{Asset('public/assets/css/style.css')}}" rel="stylesheet">
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
			<div class="col-md-9 ">
				<div>
					<div id="image-vendor">
						<a href="#">
							<img src="{{Asset('public/vendor/mondial.jpg')}}" class="img-vendor">
						</a>
						<br/>
						<div class="fb-like" data-href="https://www.facebook.com/thuna.1987" data-width="150px" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
					</div>
					<div id="detail-vendor"> 
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
				</div>
				<div Style="clear: both;"></div>
				<div class="tab-menu">
				 <ul class="nav nav-tabs nav-justified" role="tablist">
						<li class="active"> <a href="#">Hồ Sơ</a></li>
						<li> <a href="#">Review(6)</a></li>
						<li> <a href="#">Ảnh</a></li>
						<li> <a href="#">Video</a></li>
						<li> <a href="#">Giao Dịch</a></li>
						<li> <a href="#">FQA</a></li>
						<li> <a href="#">Map</a></li>
					</ul>
					<ul class="nav nav-tabs nav-justified" role="tablist">
				</div>
				<div id="content-vendor">
					<!-- nội dung các tab nằm ở đây -->
					@yeild

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

					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="{{Asset('public/vendor/nha-hang-tiec-cuoi-mondial-hue_4.jpg')}}" alt="thử thôi mà">
					      <div class="carousel-caption">
					      </div>
					    </div>
					    <div class="item">
					      <img src="{{Asset('public/vendor/mondial.jpg')}}" alt="...">
					      <div class="carousel-caption">
					      </div>
					    </div>
					    <div class="item">
					      <img src="{{Asset('public/vendor/nha-hang-tiec-cuoi-mondial-hue_5.jpg')}}" alt="...">
					      <div class="carousel-caption">
					      </div>
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
				</div>

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
			</div>
			<div class="col-md-3 ">
				<div class="contact-me">
					<h3> <i class="glyphicon glyphicon-earphone"></i> 01234 856 856 </h3>
					<p>Xin vui lòng cho biết nhà cung cấp này bạn tìm thấy trên Thuna.vn</p>
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
							  <option>Gởi thông tin qua mail cho tôi</option>
							  <option> Hãy gọi cho tôi </option>
							  <option> Đặt một câu hỏi</option>
						  </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="button" class="btn btn-primary btn-lg active"> Contact Us</button>
					  </div>
					</form>
				</div>
			</div>
			<div class="action">
				<a href="#">Viết phản hồi</a><br/>
				<a href="#"> Lưu nhà cung cấp dịch vụ này</a><br/>
				<a href="#"> Tìm tôi trên Facebook</a><br/>
				<a href="#"> Theo dõi tôi trên Pinterest</a>
			</div>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>