<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>{{ $og_title ?? 'Bupe Katongo - Software Developer | Graphics Designer | IT Business Consultant' }}</title>
<meta name="description" content="{{ $og_description ?? 'Explore the official portfolio of Bupe Katongo, a Zambian-based Software Developer, Graphic Designer, and IT Business Consultant. Discover innovative projects, design works, and business solutions at katongo.tech.' }}">
<meta name="keywords" content="{{ $keywords ?? 'Bupe Katongo, Software Developer Zambia, Graphic Designer Zambia, IT Business Consultant, katongo.tech, Web Developer Portfolio, Tech Consultant' }}">
<meta name="author" content="Bupe Katongo">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('logos/6upe-logo-white.png') }}" type="image/x-icon">

<!-- Open Graph / WhatsApp -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $og_url ?? request()->url() }}">
<meta property="og:title" content="{{ $og_title ?? 'Bupe Katongo | Software Developer | Designer | Consultant' }}">
<meta property="og:description" content="{{ $og_description ?? 'Hi, I\'m Bupe Katongo – a Software Developer, Graphic Designer, and IT Consultant passionate about delivering smart, scalable digital solutions.' }}">
<meta property="og:image" content="{{ $og_image ?? asset('logos/6upe-logo-white.png') }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $og_url ?? request()->url() }}">
<meta property="og:title" content="{{ $og_title ?? 'Bupe Katongo | Software Developer | Designer | Consultant' }}">
<meta property="og:description" content="{{ $og_description ?? 'Hi, I\'m Bupe Katongo – a Software Developer, Graphic Designer, and IT Consultant passionate about delivering smart, scalable digital solutions.' }}">
<meta property="og:image" content="{{ $og_image ?? asset('logos/6upe-logo-white.png') }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $twitter_url ?? request()->url() }}">
<meta name="twitter:title" content="{{ $twitter_title ?? 'Bupe Katongo | Software Developer | Designer | Consultant' }}">
<meta name="twitter:description" content="{{ $twitter_description ?? 'Explore the digital portfolio of Bupe Katongo – building modern software, creative designs, and business tech solutions.' }}">
<meta name="twitter:image" content="{{ $twitter_image ?? asset('logos/6upe-logo-white.png') }}">

<!-- Fonts & Styles -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=PT+Mono&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">