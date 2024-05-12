
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include('dashboard.managerinclude.head')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">


@include('dashboard.managerinclude.header')

@include('dashboard.managerinclude.menu')

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

@include('dashboard.managerinclude.footer')

@include('dashboard.managerinclude.script')

</body>
<!-- END: Body-->

</html>
