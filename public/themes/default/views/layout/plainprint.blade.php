<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
    <title>{{ Config::get('site.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- Bootplus -->
    {{ HTML::style('css/typography.css') }}

    {{ HTML::style('bootstrap232/css/bootstrap.css') }}

    {{-- HTML::style('bootstrap232/css/bootstrap-responsive.css') --}}

    {{ HTML::style('aflat/css/aflat.css') }}

    {{ HTML::style('aflat/css/aflat-responsive.css') }}

    {{ HTML::style('font-awesome/css/font-awesome.min.css') }}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">


    {{ HTML::script('js/jquery-1.9.1.js')}}


    {{-- HTML::script('js/jquery.ui.addresspicker.js') --}}

    <script type="text/javascript">
        var base = '{{ URL::to('/') }}/';
    </script>


   </head>

   <body onload="window.print()" >
    {{--
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="{{ URL::to('/') }}">{{ Config::get('site.name') }}</a>
        </div>
      </div>
    </div>
    --}}

    <div class="container">
        @yield('content')

      <hr>

      <footer>
        <p>&copy; {{ Config::get('site.name')}} {{ date('Y',time()) }}</p>
      </footer>

    </div><!--/.fluid-container-->

   </body>
</html>
