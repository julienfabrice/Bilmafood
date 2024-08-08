    <footer id="tb-footer">
		<div class="footer-top-cms">
			<div class="container">
				<aside id="footer-top">
					<div id="TB-newletter-subscribe" class="newletter-subscribe wow fadeInRight" data-wow-delay="0.3s">
						<div id="newletter-boxes">
							<div id="dialog-normal" class="window">
								<div class="box">
									<div class="row align-items-center">
										<div class="col-lg-6">
											<div class="newletter-title">
												<h2 class="tb-title">Subscribe Our Newsletter</h2>
												<span class="newletter-desc">Get 20% off first order!</span>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="box-content newleter-content">
												<div id="form_subscribe">
													<form name="subscribe" id="subscribe">
														<input type="text" placeholder="Your email address" value="" name="subscribe_email" id="subscribe_email">
														<input type="hidden" value="" name="subscribe_name" id="subscribe_name" />
														<a class="button btn btn-primary" onclick="email_subscribe()"><span>Subscribe</span><i class="icofont-location-arrow"></i></a>

													</form>
												</div><!-- /#form_subscribe -->
												<div id="notification-normal"></div>
											</div>
										</div><!-- /.box-content -->
									</div>
								</div>
							</div>
						</div>

						<script>
							function email_subscribe() {
								$.ajax({
									type: 'post',
									url: 'index.php?route=extension/module/tbnewslettersubscribe/subscribe',
									dataType: 'html',
									data: $("#subscribe").serialize(),
									success: function(html) {
										try {

											eval(html);

										} catch (e) {}

									}
								});


							}

							function email_unsubscribe() {
								$.ajax({
									type: 'post',
									url: 'index.php?route=extension/module/tbnewslettersubscribe/unsubscribe',
									dataType: 'html',
									data: $("#subscribe").serialize(),
									success: function(html) {
										try {

											eval(html);

										} catch (e) {}
									}
								});
								$('html, body').delay(1500).animate({
									scrollTop: 0
								}, 'slow');

							}
						</script>
						<script>
							$(document).ready(function() {
								$('#subscribe_email').keypress(function(e) {
									if (e.which == 13) {
										e.preventDefault();
										email_subscribe();
									}
									var name = $(this).val();
									$('#subscribe_name').val(name);
								});
								$('#subscribe_email').change(function() {
									var name = $(this).val();
									$('#subscribe_name').val(name);
								});

							});
						</script>
					</div>
				</aside>

			</div>
		</div>
		<div class="container">
			<div class="tb-comen-row wow fadeInLeft" data-wow-delay="0.3s">
				<div class="row">
					<div class="footer-left-cms col-lg-3">
						<aside id="footer-left">
							<div class="html-content">
								<div class="box-content">
									<div id="TB-Footer-cms" class="links">
										<div class="tb-footer-logo">
											<a href="index9328.html?route=common/home">
												<img src="{{ asset('image/catalog/logo.png') }}" alt="footer-logo">
											</a>
										</div>
										<div class="tb-footer-desc">I use Lorem ipsum text all day long and spend hours formatting it, so I set this site up to make my day.</div>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-7">
						<div class="row">
							<div class="col-lg-4">
								<div class="footer-commen footer-my-account">
									<h5>My Account</h5>
									<ul class="list-unstyled">
										<li><a href="{{ route('account.index', ['locale' => app()->getLocale()]) }}">My Account</a></li>
										<li><a href="#">Order History</a></li>
										<li><a href="#">Wish List</a></li>
										<li><a href="#">Newsletter</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="footer-commen footer-information">
									<h5>Information</h5>
									<ul class="list-unstyled">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Delivery Information</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Terms &amp; Conditions</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="footer-commen footer-Extras">
									<h5>Extras</h5>
									<ul class="list-unstyled">
										<li><a href="#">Brands</a></li>
										<li><a href="#">Gift Certificates</a></li>
										<li><a href="#">Affiliate</a></li>
										<li><a href="#">Specials</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-column footer-right-cms col-lg-2">
						<aside id="footer-right">
							<div class="html-content">
								<div class="box-content">
									<div id="Tb-contact-us">
										<div class="tb-contact-us footer-commen">
											<h5>Contact Us</h5>
											<ul class="tb-contact-us-wrapper list-unstyled">
												<div class="tb-contact-list">
													<i class="icofont-location-pin"></i>
													<p>A20 Green Hill Road, <br>Fayetteville, California.</p>
												</div>
												<div class="tb-contact-list">
													<i class="icofont-ui-call"></i>
													<p><a href="tel:+1 209-223-2635">+1 209-223-2635</a></p>
												</div>
												<div class="tb-contact-list">
													<i class="icofont-ui-message"></i>
													<p><a href="#">info@admin.com</a></p>
												</div>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</footer>