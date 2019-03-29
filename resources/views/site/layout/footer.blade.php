<?php
use Harimayco\Menu\Facades\Menu;
$quicklink = Menu::get(2);
$community = Menu::get(3);
?>
<footer class="footer sec-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="footer-widget about-widget">
					<a href="index.php">
						<img src="{{ asset('img/resources/logo.png')}}" alt="Awesome Image" width="75%"/>
					</a>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>

					<ul class="contact">
						<li><i class="fa fa-map-marker"></i> <span>Thamel, kathmandu , Nepal</span></li>
						<li><i class="fa fa-phone"></i> <span>+977-1-4244819, 9851058224, 9803031026</span></li>
						<li><i class="fa fa-envelope-o"></i> <span>dcwcnepal@gmail.com</span></li>
					</ul>

				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="footer-widget quick-links">
					<h3 class="title">Quick Links</h3>
					<ul>
						@if(!empty($quicklink))
							@foreach($quicklink as $k => $menu)
								<li><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
							@endforeach
						@endif
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="footer-widget quick-links">
					<h3 class="title">Community</h3>
					<ul>
						@if(!empty($community))
							@foreach($community as $k => $menu)
								<li><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
							@endforeach
						@endif

					</ul>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-widget about-widget">

					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdcwc121%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2015627842036226" width="300" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
			</div>
		</div>
	</div>
</footer>

<section class="footer-bottom">
	<div class="container text-center">
		<p>All rights reserved | DCWC Nepal 2018</p>
	</div>
</section>