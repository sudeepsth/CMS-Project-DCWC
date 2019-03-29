<?php
use Harimayco\Menu\Facades\Menu;
$menulist = Menu::get(1);
$url = Request::url();
$target = 'target="_blank"';
?>


<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="index.php">
					<img src="{{ asset('img/resources/logo.png')}}" alt="DCWC Nepal"/>
				</a>
			</div>
			<div class="header-right-info  clearfix hidden-xs">
				<div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="fa fa-envelope"></i>
						</div>
					</div>
					<div class="content ">
						<h3>EMAIL :</h3><p><b> dcwcnepal@gmail.com</b></p>
						
					</div>
				</div>
				<div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="fa fa-phone "></i>
						</div>
					</div>
					<div class="content">
						<h3>CALL US :</h3> 	<p><b>+977-1-4244819</b></p>

					</div>
				</div>


				<div class="single-header-info">


					<a class="blink"  href="{{url('charity')}}">Charity Trek 2018</a>

				</div>
				<div class="single-header-info pull-right">


					<p class="reg">Reg No :1004 | SWC: 12901 </p>
				</div>
			</div>
		</div>
	</header><!-- /.header -->

<nav class="mainmenu-area stricky">
  <div class="container">
    <div class="navigation pull-left">
      <div class="nav-header">
  <ul>
            @if(!empty($menulist))
                @foreach($menulist as $k => $menu)
                    @if(!empty($menu['child']))
                        <li class="dropdown">
                            <a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a>
                            <ul class="submenu">
                                @foreach($menu['child'] as $kl => $firstchild)
                                    @if(!empty($firstchild['child']))
                                    <li class="dropdown">
                                        <a href="{{ $firstchild['link'] }}">{{ $firstchild['label'] }}</a>
                                        <ul class="submenu">
                                            @foreach($firstchild['child'] as $kll => $secondchild)
                                                <li><a href="{{ $secondchild['link'] }}">{{ $secondchild['label'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @else
                                        <li><a href="{{ $firstchild['link'] }}">{{ $firstchild['label'] }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="dropdown" ><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
                    @endif
                @endforeach
            @endif
        </ul>
      </div>
      <div class="nav-footer">
        <button><i class="fa fa-bars"></i></button>
      </div>
    </div>

  </div>
</nav>
