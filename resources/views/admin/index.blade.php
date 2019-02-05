<!DOCTYPE html>
<html lang="en">

@include('partial.head')

<body>
	
	<div id="page">
		
	<header class="header_in">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="index.html">
							<img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<ul id="top_menu">
						<li><a href="account.html" class="btn_add">Log Out</a></li>
					</ul>
					<!-- /top_menu -->
					<a href="#menu" class="btn_mobile">
						<div class="hamburger hamburger--spin" id="hamburger">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</a>
					<nav id="menu" class="main-menu">
                    </nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<!-- search_mobile -->
		<div class="layer"></div>
		<div id="search_mobile">
			<a href="#" class="side_panel"><i class="icon_close"></i></a>
			<div class="custom-search-input-2">
				<div class="form-group">
					<input class="form-control" type="text" placeholder="What are you looking..">
					<i class="icon_search"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Where">
					<i class="icon_pin_alt"></i>
				</div>
				<select class="wide">
					<option>All Categories</option>	
					<option>Shops</option>
					<option>Hotels</option>
					<option>Restaurants</option>
					<option>Bars</option>
					<option>Events</option>
					<option>Fitness</option>
				</select>
				<input type="submit" value="Search">
			</div>
		</div>
		<!-- /search_mobile -->
	</header>
	<!-- /header -->
	
	<main>
		<div id="results">
		   <div class="container">
			   <div class="row">
				   <div class="col-lg-3 col-md-4 col-10">
					   <h4><strong>Temukan!</strong> Mesjid anda..</h4>
				   </div>
				   <div class="col-lg-9 col-md-8 col-2">
					   <a href="#0" class="side_panel btn_search_mobile"></a> <!-- /open search panel -->
						<div class="row no-gutters custom-search-input-2 inner">
							<div class="col-lg-5">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Nama Mesjid....">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Lokasi">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-2">
								<input type="submit" value="Search">
							</div>
						</div>
				   </div>
			   </div>
			   <!-- /row -->
		   </div>
		   <!-- /container -->
	   </div>
		
	   	<!-- /results -->		
		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Popular</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Latest</label>
						</div>
					</li>
					<li><a class="btn_filt" data-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="filters" data-text-swap="Less filters" data-text-original="More filters">More filters</a></li>
					<li>
						<div class="layout_view">
							<a href="#0" class="active"><i class="icon-th"></i></a>
							<a href="listing-2.html"><i class="icon-th-list"></i></a>
							<a href="list-map.html"><i class="icon-map"></i></a>
						</div>
					</li>
					<li>
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- /Map -->
		
		<div class="collapse" id="filters">
			<div class="container margin_30_5">
				<div class="row">
					<div class="col-md-4">
						<h6>Rating</h6>
						<ul>
							<li>
								<label class="container_check">Superb 9+ <small>25</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Very Good 8+ <small>133</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Good 7+ <small>32</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Pleasant 6+ <small>12</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h6>Tags</h6>
						<ul>
							<li>
								<label class="container_check">Wireless Internet <small>12</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Smoking Allowed <small>11</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Wheelchair Accesible <small>23</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Parking <small>56</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="add_bottom_30">
						<h6>Distance</h6>
							<div class="distance"> Radius around selected destination <span></span> km</div>
							<input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /Filters -->

		<div class="container margin_60_35">
			
			<div class="row">
				@foreach ($mesjid as $mes)	
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="strip grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="detail-restaurant.html"><img src="{{$mes->foto}}" class="img-fluid" alt=""></a>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">{{$mes->nama}}</a></h3>
							<small>{{$mes->alamat}}</small>
							<p>{{$mes->Kecamatan}} <b>{{$mes->Kabupaten}}</b></p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a>
						</div>
						<ul>
							<li><a href="" class="Danger"><strong>Edit</strong></a></li>
							<li><a href="" class="Danger"><strong>Hapus</strong></a></li>							
						</ul>
					</div>
				</div>
				@endforeach
			</div>
			<!-- /row -->
			
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
			
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
    @include('partial.footer')
	</div>
	<!-- page -->
	

	
	<div id="toTop"></div><!-- Back to top button -->
	
    @include('partial.script')
  
</body>
</html>