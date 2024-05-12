<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ url('public/dashboard/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/dashboard/app-assets/images/logo/logo.png') }}">
{{--    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">--}}


{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">


    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">

    <!-- END: Theme CSS-->

    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/css/pages/app-invoice.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/css/core/colors/palette-gradient.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/css/pages/app-invoice.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/dashboard/app-assets/vendors/css/forms/selects/select2.min.css') }}">

    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->


