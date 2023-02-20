<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    @yield('styles')
</head>
<body>
    <div id="page-wrapper">
        <div id="header">
            @yield('dashoboard')
        </div>
        <div id="content">
            <div id="sidebar">
                <div class="content-block">
                    <div class="content-block-inner">
                        <a class="btn" href="/userStat">Personal stat</a>
                        @if(Auth::check()&&Auth::User()->role==="Manager")
                            <a class="btn" href="/main">Manager stat</a>
                        @endif
                        @if(Auth::check()&&Auth::User()->role==="Admin")
                            <a class="btn" href="/main">Admin panel</a>
                        @endif 
                       @yield('side_panel')
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <div id="footer">
        <div id="copyright">
            <p>&copy;2023- <?php echo date("Y"); ?></p>
        </div>
        <div id="footer-links">
            <p>tel: </p><a href="/contact_info">8-xxx-xxx-xx-xx</a>
            
        </div>
        <div id="footer-design"></div>
    </div>
</body>
</html>