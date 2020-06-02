<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    {!! Html::style('lib/bootstrap/bootstrap.css') !!}
    <title>@yield('titrePage')</title>
</head>
<body>

@if(session()->has('info'))
    <div class="card text-white bg-success m-3">
        <div class="card-body">
            <p class="card-text">{{ session('info') }}</p>
        </div>
    </div>
@endif

@yield('contenu')
{!! Html::script('lib/jquery/jquery-3.5.1.min.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
{!! Html::script('lib/js/bootstrap.js/bootstrap.js') !!}
</body>
</html>
