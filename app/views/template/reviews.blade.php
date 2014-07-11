@include('template.header-home')
<div class="row">
	<div class="col-xs-12 col-md-8">
			<div class="container">
			<head>
				<title>Reviews</title>
				<link href="{{Asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
			    <link href="{{Asset('public/assets/css/view.css')}}" rel="stylesheet">
			     <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.js"></script>

			</head>
			<body>
				<div class="col">
					<div class="review-header">
						<table id="table-title" cellspacing="20" border="0">
								<tr>
									<td><h1>Đánh Giá Khách Sạn Mondial Huế</h1></td>
									<td id="row1-col2"><span id="span-toogle">Chi tiết.</span><a href="#">Không phải đối tác của bạn</a></td>
								</tr>
								<div id="hident-div">Khách Sạn Mondial Huế, 17 Nguyễn Huệ, phường Vĩnh Ninh, thành phố Huế </div>

						</table>
							<script type="text/javascript">
								$("#span-toogle").on("mouseenter", function() {
	      								$("#hident-div").show();
								}).on("mouseleave", function() {
	      								$("#hident-div").hide();
										});


							</script>



					<div style="padding-bottom:25px" class="greyText">Vui lòng chọn <span class="strong">ngày cưới của bạn *: &nbsp;</span>
			               <input type="date"></div>
			        <div class="section-header">
			            Nhà cung cấp cung cấp các <b>dịch vụ</b> cho tôi:</div>
			        <input type="checkbox" id="check">
			        <label for="check">Lễ và tiếp nhận địa điểm</label><br/>
			        <div  class="smallText">
			        	<a id="a-toggle" href="#" >Click tại đây</a> để thấy thêm dịch vụ.
			        	<script >
			        		$(function(){
			    				$('#a-toggle').click(function(){
			       				 $('#divExtraCats').toggle(1000);
			    				});
							});

			        	</script>
			        </div>
			        <div id="divExtraCats" style="display:none">
						<table border="0" cellpadding="2" class="reviewTable" width="100%">
						<tr><td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="1">
									    <input type="checkbox" name="vendorRatingDTO.bandFlag" value="true" id="vendorRatingDTO.bandFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.bandFlag">Trang phục</label>
			                                <input type='hidden' name="vendorRatingDTO.bandFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="16">
									    <input type="checkbox" name="vendorRatingDTO.beautyFlag" value="true" id="vendorRatingDTO.beautyFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.beautyFlag">Sức khỏe</label>
			                                <input type='hidden' name="vendorRatingDTO.beautyFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="3">
									    <input type="checkbox" name="vendorRatingDTO.cateringFlag" value="true" id="vendorRatingDTO.cateringFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.cateringFlag">Dịch vụ ăn uống</label>
			                                <input type='hidden' name="vendorRatingDTO.cateringFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							</tr><tr><td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="4">
									    <input type="checkbox" name="vendorRatingDTO.ceremonyMusicFlag" value="true" id="vendorRatingDTO.ceremonyMusicFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.ceremonyMusicFlag">Nhạc</label>
			                                <input type='hidden' name="vendorRatingDTO.ceremonyMusicFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="7">
									    <input type="checkbox" name="vendorRatingDTO.djFlag" value="true" id="vendorRatingDTO.djFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.djFlag">Cha xứ</label>
			                                <input type='hidden' name="vendorRatingDTO.djFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="17">
									    <input type="checkbox" name="vendorRatingDTO.dressFlag" value="true" id="vendorRatingDTO.dressFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.dressFlag">Trang điểm</label>
			                                <input type='hidden' name="vendorRatingDTO.dressFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							</tr><tr><td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="21">
									    <input type="checkbox" name="vendorRatingDTO.entertainerFlag" value="true" id="vendorRatingDTO.entertainerFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.entertainerFlag">Người đãi tiệc</label>
			                                <input type='hidden' name="vendorRatingDTO.entertainerFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="12">
									    <input type="checkbox" name="vendorRatingDTO.rentalFlag" value="true" id="vendorRatingDTO.rentalFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.rentalFlag">Thuê địa điểm</label>
			                                <input type='hidden' name="vendorRatingDTO.rentalFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="5">
									    <input type="checkbox" name="vendorRatingDTO.favorFlag" value="true" id="vendorRatingDTO.favorFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.favorFlag">Ưu đãi và quà tặng</label>
			                                <input type='hidden' name="vendorRatingDTO.favorFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							</tr><tr><td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="8">
									    <input type="checkbox" name="vendorRatingDTO.floristFlag" value="true" id="vendorRatingDTO.floristFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.floristFlag">Hoa</label>
			                                <input type='hidden' name="vendorRatingDTO.floristFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="18">
									    <input type="checkbox" name="vendorRatingDTO.invitationFlag" value="true" id="vendorRatingDTO.invitationFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.invitationFlag">Lời mời</label>
			                                <input type='hidden' name="vendorRatingDTO.invitationFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="19">
									    <input type="checkbox" name="vendorRatingDTO.jewelryFlag" value="true" id="vendorRatingDTO.jewelryFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.jewelryFlag">Trang sức</label>
			                                <input type='hidden' name="vendorRatingDTO.jewelryFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							</tr><tr><td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="24">
									    <input type="checkbox" name="vendorRatingDTO.productionFlag" value="true" id="vendorRatingDTO.productionFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.productionFlag">Ánh sáng và trang trí nội thất</label>
			                                <input type='hidden' name="vendorRatingDTO.productionFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="9">
									    <input type="checkbox" name="vendorRatingDTO.officiantFlag" value="true" id="vendorRatingDTO.officiantFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.officiantFlag">Người dẫn chương trình</label>
			                                <input type='hidden' name="vendorRatingDTO.officiantFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="22">
									    <input type="checkbox" name="vendorRatingDTO.suppliesFlag" value="true" id="vendorRatingDTO.suppliesFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.suppliesFlag">Nhà cung cấp bữa tiệc</label>
			                                <input type='hidden' name="vendorRatingDTO.suppliesFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							</tr><tr><td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="10">
									    <input type="checkbox" name="vendorRatingDTO.photographyFlag" value="true" id="vendorRatingDTO.photographyFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.photographyFlag">Nhiếp ảnh</label>
			                                <input type='hidden' name="vendorRatingDTO.photographyFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="13">
									    <input type="checkbox" name="vendorRatingDTO.transportationFlag" value="true" id="vendorRatingDTO.transportationFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.transportationFlag">Phương tiện vận chuyển</label>
			                                <input type='hidden' name="vendorRatingDTO.transportationFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="23">
									    <input type="checkbox" name="vendorRatingDTO.travelFlag" value="true" id="vendorRatingDTO.travelFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.travelFlag">Du lịch</label>
			                                <input type='hidden' name="vendorRatingDTO.travelFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							</tr><tr><td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="20">
									    <input type="checkbox" name="vendorRatingDTO.otherFlag" value="true" id="vendorRatingDTO.otherFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.otherFlag">Dịch vụ độc đáo</label>
			                                <input type='hidden' name="vendorRatingDTO.otherFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="14">
									    <input type="checkbox" name="vendorRatingDTO.videographyFlag" value="true" id="vendorRatingDTO.videographyFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.videographyFlag">Quay phim</label>
			                                <input type='hidden' name="vendorRatingDTO.videographyFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							<td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="2">
									    <input type="checkbox" name="vendorRatingDTO.cakeFlag" value="true" id="vendorRatingDTO.cakeFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.cakeFlag">Bánh cưới</label>
			                                <input type='hidden' name="vendorRatingDTO.cakeFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							</tr><tr><td valign="middle" align="left" width="33%">
									<table width="100%"><tr>
			                            <td width="20" valign="top"data-cat="15">
									    <input type="checkbox" name="vendorRatingDTO.plannerFlag" value="true" id="vendorRatingDTO.plannerFlag" class="rating-category"><label class='vendor-cat-label' for="vendorRatingDTO.plannerFlag">Kế hoạch đám cưới</label>
			                                <input type='hidden' name="vendorRatingDTO.plannerFlag" value="false" />
									</td></tr>
									</table>										
								</td>
							</tr>
						</table>					
					</div>

				</div>
				<div class="section-header" style="margin:5px 0px">Vui lòng <b>đánh giá nhà cung cấp</b> theo các tiêu chí sau:</div>
				<table with="100%" margin-top="20px">
					<tbody>
						<tr>
							<td>
								<i>Chất lượng của dịch vụ:</i>&nbsp<span class="glyphicon glyphicon-question-sign" id="hident3"></span><br/>
								 <div id="hident-div3">Chất lượng của dịch vụ là gì? Vào ngày lớn nhất của bạn, chất lượng dịch vụ từ các nhà cung cấp của bạn làm cho tất cả sự khác biệt! Khả năng nhà cung cấp của bạn phải chú ý đến chi tiết và theo thông qua hợp đồng của họ đi một chặng đường dài trong việc đưa ra một ngày của bạn để nhớ. Vui lòng đánh giá nhà cung cấp của bạn dựa trên chất lượng của sản phẩm hoặc dịch vụ của họ</div>
								 <script>
									$("#hident3").on("mouseenter", function() {
      								$("#hident-div3").show();
										}).on("mouseleave", function() {
      								$("#hident-div3").hide();
									});
								</script>
							
							</td>
						</tr>
						<tr>
							<td>
								<i>Khả năng đáp ứng:</i>&nbsp<span class="glyphicon glyphicon-question-sign" id="hident4"></span><br/>
								 <div id="hident-div4">Phản hồi là gì? Đó là hoàn toàn quan trọng để có một nhà cung cấp đáp ứng. Các nhà cung cấp không đáp ứng có thể dẫn đến căng thẳng không cần thiết trong quá trình lập kế hoạch đám cưới của tổng thể. Vui lòng đánh giá nhà cung cấp của bạn dựa trên phản ứng của họ trong trước đám cưới, ngày, và sau đám cưới quá trình.</div>
								 <script>
									$("#hident4").on("mouseenter", function() {
      								$("#hident-div4").show();
										}).on("mouseleave", function() {
      								$("#hident-div4").hide();
									});
								</script>
							</td>
						</tr>
						<tr>
							<td>
								<i>Tính chuyên nghiệp:</i>&nbsp<span class="glyphicon glyphicon-question-sign" id="hident5"></span><br/>
								 <div id="hident-div5">Tính chuyên nghiệp là gì? Đám cưới của bạn là một cột mốc cuộc đời mà mãi mãi sẽ được ghi nhớ. Điều quan trọng là phải có một nhà cung cấp đám cưới chuyên nghiệp, những người sẽ thực hiện nhiệm vụ của mình trong khi điều trị bạn trân trọng. Vui lòng đánh giá nhà cung cấp của bạn dựa trên thái độ và tính chuyên nghiệp của họ.</div>
								 <script>
									$("#hident5").on("mouseenter", function() {
      								$("#hident-div5").show();
										}).on("mouseleave", function() {
      								$("#hident-div5").hide();
									});
								</script>
							</td>
						</tr>
						<tr>
							<td>
								<i>Giá trị:</i>&nbsp<span class="glyphicon glyphicon-question-sign" id="hident6"></span><br/>
								 <div id="hident-div6">Giá trị là những gì? Đám cưới là một dịp một lần trong cả cuộc đời, do đó, nó là tự nhiên chi nhiều tiền hơn vào các sản phẩm và dịch vụ mà bạn cảm thấy là quan trọng nhất. Vui lòng đánh giá nhà cung cấp của bạn dựa trên kinh nghiệm tổng thể bạn nhận được cho số tiền chi tiêu. Là nhà cung cấp này có giá trị tiền chi tiêu, và bạn đã có được những gì bạn trả tiền cho?</div>
								 <script>
									$("#hident6").on("mouseenter", function() {
      								$("#hident-div6").show();
										}).on("mouseleave", function() {
      								$("#hident-div6").hide();
									});
								</script>
							</td>
						</tr>
						<tr>
							<td>
								<i>Tinh linh hoạt:</i>&nbsp<span class="glyphicon glyphicon-question-sign" id="hident7"></span><br/>
								 <div id="hident-div7">Tính linh hoạt là gì? Không có đám cưới bao giờ thực hiện một cách hoàn hảo từ đầu đến cuối. Các nhà cung cấp có thể làm việc với bạn và điều chỉnh lịch trình của bạn có thể làm giảm đáng kể sự căng thẳng của quá trình lập kế hoạch. Vui lòng đánh giá nhà cung cấp của bạn dựa trên thái độ của họ và sẵn sàng làm việc với bạn thông qua quá trình lập kế hoạch đám cưới.</div>
								 <script>
									$("#hident7").on("mouseenter", function() {
      								$("#hident-div7").show();
										}).on("mouseleave", function() {
      								$("#hident-div7").hide();
									});
								</script>
							</td>
						</tr>
					</tbody>

				</table>



				<P>Vui lòng đóng góp ý kiến và phản hồi để các cặp vợ chồng tương lai sẽ tìm thấy thông tin hữu ích:</P>
				<textarea class="comments-text-area" id="vendorRatingDTO.weddingCommentsText" name="vendorRatingDTO.weddingCommentsText" rows="8" cols="100" maxlength="2000"></textarea>
				<div class="greyText">		
					<p>Bạn muốn giới thiệu nhà cung cấp này cho bạn bè? </p>
		            <input type="radio" name="vendorRatingDTO.recommendFlag" value="true" id="recommend_yes"><label for="recommend_yes">Có</label>
		            <input type="radio" name="vendorRatingDTO.recommendFlag" value="false" id="recommend_no"><label for="recommend_no">Không</label>
				</div>
				<input type="checkbox" id="check1">
			        <label for="check">Tôi xác nhận rằng tôi đã có một hợp đồng đã ký hoặc kinh doanh được tiến hành với nhà cung cấp này.</label><span class="glyphicon glyphicon-question-sign" id="hident1"></span><br/>
			        <div id="hident-div1">Phù hợp với Điều Khoản Sử Dụng, Thuna.vn sẽ chỉ xuất bản đánhgiá nếu có một hợp đồng ký kế giữa mình và nhà cung cấp này hoặc thanh toán được trao đổi với các dịch vụ đám cưới hoàn tất</div>
			        	<script>
							$("#hident1").on("mouseenter", function() {
      								$("#hident-div1").show();
							}).on("mouseleave", function() {
      								$("#hident-div1").hide();
									});
						</script>
						
				
			    <input type="checkbox" id="check2">
			        <label for="check">Thể hiện đánh giá của tôi vô danh.</label><span class="glyphicon glyphicon-question-sign" id="hident2"></span><br/>
			        <div id="hident-div2">Nếu đánh dấu vô danh, tên, ngày cưới và hình ảnh tài khoản sẽ không được hiển thị công khai trên một đánh giá hoặc bài viết cộng đồng hiện có.</div>
			        	<script>
							$("#hident2").on("mouseenter", function() {
      								$("#hident-div2").show();
							}).on("mouseleave", function() {
      								$("#hident-div2").hide();
									});
						</script>
			<input type="submit" value="Tiếp theo" id="btn-next">
						
			</body>
		</div>
	</div>

			 <script src="public/assets/js/bootstrap.min.js"></script>
</div>

