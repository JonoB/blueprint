<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | BluePrint</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="container">

            <h1>
                @yield('heading')
            </h1>

            @include('common.messages')

            @yield('content')
        </section>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        @yield('footer')
    </footer>

</div>
<!-- ./wrapper -->

<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<script src=" {{ asset('js/bootstrap.min.js') }} "></script>

@yield('js')

</body>
</html>
