
<!DOCTYPE html>
@include('elements.base')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', setting('description', ''))">
    <meta name="theme-color" content="#3490DC">
    <meta name="author" content="Azuriom">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="@yield('type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ favicon() }}">
    <meta property="og:description" content="@yield('description', setting('description', ''))">
    <meta property="og:site_name" content="{{ site_name() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    @stack('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ site_name() }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ favicon() }}">

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('vendor/axios/axios.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Page level scripts -->
    @stack('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="search"
      href="/opensearch.xml"
      type="application/opensearchdescription+xml"
      title="Typekit" />
    <link rel="canonical" href="https://fonts.adobe.com/fonts/neonstream" />
    <script src="https://kit.fontawesome.com/f1e8a1abdd.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('css/style.css') }}" rel="stylesheet">
    <!--Scroll Bar-->
    <style>
        /* width */
        ::-webkit-scrollbar {
          width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px grey; 
          border-radius: 0px;
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #982727; 
          border-radius: 15px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #DC3B3B; 
        }
        </style>
        <!--Scroll Bar-->
    @stack('styles')
</head>

<body>
<div id="app">
    @include('elements.navbar')

    <main>
        <div class="container">
            @include('elements.session-alerts')
        </div>

        @yield('content')
    </main>
</div>
<br>
<br>
<footer class="text-white py-4 text-center" style="border: 2px solid #dadada;
    border-radius: 7px; outline: none;
    border-color: #A61EFF;

    box-shadow: 0 0 10px #A61EFF;
    margin-bottom: 1px;
    ">

    <div class="copyright">
        <div class="container" style="font-size: 15px;">
        @if(config('theme.discord-invite'))
        <a href="{{ config('theme.discord-invite') }}" target="_blank" rel="noreferrer noopener" style="color: #FFF"><i class="fab fa-discord fa-2x" style="float: left;"></i></a>
        @endif
        @if(config('theme.ts'))
        <a href="ts3server://{{ config('theme.ts') }}"  style="color: #FFF"><i class="fab fa-teamspeak fa-2x" style="float: left; margin-left: 15px;"></i></a>
        @endif
        @if(config('theme.twitter'))
        <a href="https://twitter.com/{{ config('theme.twitter') }}"  target="_blank" rel="noreferrer noopener" style="color: #FFF"><i class="fab fa-twitter fa-2x" style="float: left; margin-left: 15px;"></i></a>
        @endif
        @if(config('theme.youtube'))
        <a href="https://www.youtube.com/channel/{{ config('theme.youtube') }}?view_as=subscriber"  target="_blank" rel="noreferrer noopener" style="color: #FFF"><i class="fab fa-youtube fa-2x" style="float: left; margin-left: 15px;"></i></a>
        @endif


        
        {{ setting('copyright') }} | Thème by <a href="https://github.com/PseudoIllyes">Pseudo_Illyes</a> | @lang('messages.copyright')
        </div>
    </div>
</footer>

@stack('footer-scripts')

</body>
</html>
