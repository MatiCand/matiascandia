<!DOCTYPE html>
<html lang="es">
	<head>

		@include('portfolio.partials.head')
		<title>@yield('title', 'Matias Candia')</title>
     
	</head>

	<body>

      @include('portfolio.partials.preloader')
			@include('portfolio.partials.header')
			@include('portfolio.partials.slider')

      <div class="site-wrapper content">
  			@include('portfolio.partials.features')
  			@include('portfolio.partials.about')
        @include('portfolio.partials.team')
  			@include('portfolio.partials.skills')
  			@include('portfolio.partials.clients')
  			@include('portfolio.partials.connected')
  			@include('portfolio.partials.cta')
  			@include('portfolio.partials.quote')
  			@include('portfolio.partials.form')
  			@include('portfolio.partials.map')
  			@include('portfolio.partials.video')
  			@include('portfolio.partials.footer')
      </div> <!-- End Site Wrapper -->

			@include('portfolio.partials.js')

	</body>
</html>
