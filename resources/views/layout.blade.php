<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AF EXPRESS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.jpg?v=1') }}">
    {{-- <link rel="stylesheet" href="{{ asset('dashboard_asset/css/all.min.css') }}"> --}}

    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.4.0/css/pro.min.css" />
    <style>
        *{
            --van-cell-group-background-color:white;
             --van-button-default-background-color:white;
             --defaltColor:#1891C8;
             --defaltColor2:#F72F31;
             --defaltColor3:#ff26ce;
             --whiteColor:white;
        }


        .defaltColor{
            color: var(--defaltColor) !important;
        }
        .defaltColor3{
            color: var(--defaltColor3) !important;
        }
        .whiteColor{
            color: var(--whiteColor) !important;
        }

        .defaltColorBg {
                background: var(--defaltColor) !important;
            }

.video-cntainer {

}
    </style>
    {{-- <!-- Favicon -->
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard_asset/style.css') }}"> --}}



    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css?ver=1.0.0') }}">


<style>


</style>
    {{-- <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.12.1/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.semanticui.min.css"> --}}

</head>
<body class="">

    <div id="app">
        <component :is="$route.meta.layout || 'div'"   :users="{{Auth::user()}}"  :roles="{{ $roles }}">
            <router-view />
          </component>

</div>




<script src="{{ asset('js/backend.js?ver=1.0.12') }}"></script>



{{--
<!-- Popper js -->
<script src="{{ asset('dashboard_asset/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('dashboard_asset/js/bootstrap.min.js') }}"></script> --}}



{{-- <script src="{{ asset('js/datatables.min.js') }}"></script> --}}
</body>
</html>
