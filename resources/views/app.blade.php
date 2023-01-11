<!DOCTYPE html>
<html>

<!-- head -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-539CZ5K');</script>
    <!-- End Google Tag Manager -->
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ request()->root() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="google-site-verification" content="Zp7Bf_yFVll2Fn5SXqybm3tq9xD_L81GIqGmqJImhwU" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/3e5f9a0a23.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@700&display=swap" rel="stylesheet">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("front/assets/bootstrap/css/bootstrap.min.css") }}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/mainstyle.css') }}">

    <!-- slick carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/slick/slick-theme.css') }}"/>

    @yield('css')

    <!-- override css -->
    <style>
        .breadcrumbs a {
            color: white;
            text-decoration: none;
        }

        .nav.nav-tabs {
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .red {
            color: red
        }

        .scroll-menu {
            overflow-y: auto;
            height: 100vh
        }

        @media (max-width: 767px) {

            .tb-social-tel a {
                padding-left: 2px !important;
                font-size: 12px !important;
            }
        }
    </style>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "item": {
      "@id": "https://www.indepthresearch.org/",
      "name": "Home"
    }
  },{
    "@type": "ListItem",
    "position": 2,
    "item": {
      "@id": "https://www.indepthresearch.org/about",
      "name": "About Us"
    }
  },{
    "@type": "ListItem",
    "position": 3,
    "item": {
      "@id": "https://www.indepthresearch.org/training-calendar?year=2020",
      "name": "Training Calendar"
    }
  },{
    "@type": "ListItem",
    "position": 4,
    "item": {
      "@id": "https://www.indepthresearch.org/course/face-to-face",
      "name": "Executive Short Courses"
    }
  }]
}
</script>

</head>
<!-- END head -->



@if ( request()->getHttpHost() == config('domains.rwanda') )

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5145253.js"></script>
    <!-- End of HubSpot Embed Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142371933-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-142371933-6');
    </script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "(+250) 780 945 790", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

@else

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4641435.js"></script>
    <!-- End of HubSpot Embed Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142371933-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-142371933-5');
    </script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+254792516105", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

@endif


<!--body -->
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-539CZ5K"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('front.partials.header')

@yield('content')

@include('front.partials.footer')
</body>
<!-- END body -->

@php
    $reCaptha_key = '6LehW9kZAAAAAI4UG1VFBtqvd4GtjAh-fcjv6rD1';
@endphp

<script src="https://www.google.com/recaptcha/api.js?render={{ $reCaptha_key }}"></script>

<script>

    function onSubmit(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute( @json($reCaptha_key), {action: 'submit'}).then(function(token) {

                e.target.submit()
            });
        });
    }

    jQuery(document).ready( function ($) {

        $('form[method="post"]').submit(onSubmit)

        $('.ires-header .navbar-toggler').click( function () {
            $('.ires-header').toggleClass('scroll-menu')
        })
    })
</script>
</html>
