<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, viewport-fit=cover">
<meta http-equiv="Content-Security-Policy"
      content="img-src * 'self' data:;
          default-src * 'self' gap: wss: ws: ;
          style-src * 'self' 'unsafe-inline' 'unsafe-eval';
          script-src * 'self' 'unsafe-inline' 'unsafe-eval';">
<meta name="description" content="{{ $description }}">
<meta name="subject" content="Radio">
<meta name="language" content="ES">
<meta name="url" content="http://www.monster.fm">
<meta name="author" content="Audiovisual Communicators Inc.">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Geo Location -->
<meta name="DC.title" content="monsterrx931" />
<meta name="geo.region" content="PH" />
<meta name="geo.placename" content="Pasig City" />
<meta name="geo.position" content="14.587161;121.062131" />
<meta name="ICBM" content="14.587161, 121.062131" />
<!-- Social Media Meta -->
<meta property="og:title" content="{{ $social_title }}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="{{ $social_url }}"/>
<meta property="og:image" content="{{ $social_image }}"/>
<meta property="og:site_name" content="Monster FM"/>
{{--<meta property="fb:app_id" content="129700041038167"/>--}}
<meta property="fb:app_id" content="403780217146826">
<meta property="og:description" content="{{ $social_description }}"/>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@RX931" />
<meta name="twitter:title" content="{{ $social_title }}" />
<meta name="twitter:description" content="{{ $social_description }}" />
<meta name="twitter:image" content="{{ $social_image }}" />
<!-- End -->
<title>{{ $title }} | Monster FM</title>