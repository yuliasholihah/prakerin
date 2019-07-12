<nav class="top-toolbar navbar navbar-desktop flex-nowrap">
				<!-- START LEFT DROPDOWN MENUS -->
				<ul class="navbar-nav nav-left">
					<!-- START MEGA MENU -->
					<li class="nav-item nav-text">
						<a href="{{url('/')}}" >
							<span>
								halaman depan
							</span>
						</a>
						
					</li>
					<li class="nav-item nav-text">
						<a href="{{url('/artikel')}}" >
							<span>
								Artikel
							</span>
						</a>
						
					</li>
					<li class="nav-item nav-text">
						<a href="{{url('/tag')}}" >
							<span>
								Tag
							</span>
						</a>
						
					</li>
					<li class="nav-item nav-text">
						<a href="{{url('/kategori')}}" >
							<span>
								Kategori
							</span>
						</a>
						
					</li>
					<!-- END MEGA MENU -->
				</ul>
				<!-- END LEFT DROPDOWN MENUS -->
				<!-- START RIGHT TOOLBAR ICON MENUS -->
				<ul class="navbar-nav nav-right">
					
					<li class="nav-item dropdown">
						<a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<img src="{{asset('assets/backend/assets/img/avatars/1.jpg')}}" class="w-35 rounded-circle" alt="Albert Einstein">
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
							<div class="dropdown-header pb-3">
								<div class="media d-user">
									<img class="align-self-center mr-3 w-40 rounded-circle" src="{{asset('assets/backend/assets/img/avatars/1.jpg')}}" alt="Albert Einstein">
									<div class="media-body">
									<h5 class="mt-0 mb-0">{{Auth::user()->name}}</h5>
										<span>{{Auth::user()->email}}</span>
									</div>
								</div>
							</div>
							
							<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
										  document.getElementById('logout-form').submit();"><i class="icon dripicons-lock-open"></i> Sign Out</a>
										  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
						</div>
					</li>
				</ul>
				<!-- END RIGHT TOOLBAR ICON MENUS -->
				<!--START TOP TOOLBAR SEARCH -->
				<form role="search" action="http://www.authenticgoods.co/themes/quantum-pro/demos/demo1/pages.search.html" class="navbar-form">
					<div class="form-group">
						<input type="text" placeholder="Search and press enter..." class="form-control navbar-search" autocomplete="off">
						<i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>
					</div>
					<button type="submit" class="d-none">Submit</button>
				</form>
				<!--END TOP TOOLBAR SEARCH -->
			</nav>