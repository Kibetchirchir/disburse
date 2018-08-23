<!DOCTYPE html>
<html lang="en" xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml"
      xmlns:v-bind-="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>disburse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">



</head>
<body>
@include('inc.navbar')
<div class="container">
    {{--@if(Request::is('/'))--}}
    {{--@include('inc.showcase')--}}
    {{--@endif--}}
<div class="row">
    <div class="col-md-12 col-lg-12">
        @include('inc.messages')
        @yield('content')
    </div>
    {{--<div class="col-md-4 col-lg-4">--}}
        {{--@include('inc.sidebar')--}}
    {{--</div>--}}
    </div>
</div>
</div>
<footer id="bottom" class="text-center">
    <p>copyright 2018 &copy;Nouveta</p>
</footer>

</body>
</html>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

