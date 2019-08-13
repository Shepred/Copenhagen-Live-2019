	<meta charset="utf-8" />
	<title> {{ env('APP_NAME') }}</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
	<!-- Search Engine -->
	<meta name="description" content="Welcome to the annual Copenhagen Live event on the VATSIM network!">
	<meta name="image" content="http://cphlive-vatsim.net/assets/img/bg/cphlive.jpg">
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="Copenhagen Live 2019">
	<meta itemprop="description" content="Welcome to the annual Copenhagen Live event on the VATSIM network!">
	<meta itemprop="image" content="http://cphlive-vatsim.net/assets/img/bg/cphlive.jpg">
	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Copenhagen Live 2019">
	<meta name="twitter:description" content="Welcome to the annual Copenhagen Live event on the VATSIM network!">
	<meta name="twitter:image:src" content="http://cphlive-vatsim.net/assets/img/bg/cphlive.jpg">
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="Copenhagen Live 2019">
	<meta name="og:description" content="Welcome to the annual Copenhagen Live event on the VATSIM network!">
	<meta name="og:image" content="http://cphlive-vatsim.net/assets/img/bg/cphlive.jpg">
	<meta name="og:type" content="website">
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap3/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/theme/blue.css') }}" id="theme" rel="stylesheet" />
	<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->
	<link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" />
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->

	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
	<script>
		window.addEventListener("load", function(){
		window.cookieconsent.initialise({
  			"palette": {
    			"popup": {
      				"background": "#000"
    			},
    			"button": {
      				"background": "#f1d600"
    			}
  			},
  			"content": {
    			"href": "{{ url('/privacy') }}"
  			},
  			"theme": "edgeless"
		})});
	</script>