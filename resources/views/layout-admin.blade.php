<!DOCTYPE html>
<html>
<head>
    @include('partial.head')
    @yield('css')
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
                @include('partial.aside-admin')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
                @include('partial.navbar-admin')
                @yield('content')
                </div>
            </div>
        </div>
        @include('partial.footer')
        @include('partial.javascript')
        @yield('script')
</body>
</html>