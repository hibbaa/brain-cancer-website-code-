
<body>

	<div id="nav-bottom">
     	<div class="container">
					<!-- nav -->
		<ul class="nav-menu">
				
          <li class="nav-item">
              <a class="nav-link" href="about">حول</a>
           </li>
            
            <li class="has-dropdown">
							<a >الأقسام</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list" >

										<li><a href="cause">أسباب المرض</a></li>
										<li><a href="symptom">أعراض المرض</a></li>
										<li><a href="treatment"> التشخيص والعلاج</a></li>
										<li><a href="healing">قصص الشفاء</a></li>
									</ul>
								</div>
							</div>
						</li>
            <li class="nav-item">
				<a class="nav-link"   href="home" >الصفحة الرئيسية</a>
			</li>

					<ul class="nav-menu  navbar-right">
								@if (Auth::guest())
									<li><a href="{{ route('login') }}">Login</a></li>
									<li><a href="{{ route('register') }}">Register</a></li>
								@else
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>

										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="{{ url('/') }}"
													onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
													تسجيل خروج
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													{{ csrf_field() }}
												</form>
											</li>
										</ul>
									</li>
								@endif
					</ul>			

			
        
		</ul>
       </div>
    </div>  
</nav>