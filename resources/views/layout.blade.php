<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basic Todo</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome/css/fontawesome.min.css') }}"> --}}
        <script  src="https://code.jquery.com/jquery-2.2.4.min.js"  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="  crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                {{-- <div class="title m-b-md"> --}}
                <div class="row">
                    <div class="col-md-12">
                        @yield('main')
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="padding:20px;">
                        @yield('content')
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="text-center">
                    <p class="btn btn-default">
                        Created using tools crafted by the elders <i class="fas fa-smile btn btn-warning" aria-hidden="true"></i> &copy; dfnsdavid
                    </p>
                </div>

            </div>
        </div>
    <script href="{{ asset('css/bootstrap/js/popper.min.js') }}"></script>
    <script href="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
    <script>
            $(".alert").alert('close');
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                });
        </script>
    </body>
</html>
