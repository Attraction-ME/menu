
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include('dashboard.waiterinclude.head')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">


@include('dashboard.waiterinclude.header')

@include('dashboard.waiterinclude.menu')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('body')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('dashboard.waiterinclude.footer')

@include('dashboard.waiterinclude.script')

</body>
<!-- END: Body-->

</html>
