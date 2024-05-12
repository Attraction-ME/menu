<!-- BEGIN: Vendor JS-->
<script src="{{ url('dashboard/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('dashboard/app-assets/vendors/js/extensions/jquery.knob.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/js/scripts/extensions/knob.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/charts/morris.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ url('dashboard/app-assets/data/jvector/visitor-data.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/charts/chart.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/extensions/unslider-min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('dashboard/app-assets/css/core/colors/palette-climacon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('dashboard/app-assets/fonts/simple-line-icons/style.min.css') }}">

<script src="{{ url('dashboard/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/tables/buttons.flash.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/tables/jszip.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/tables/pdfmake.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/tables/vfs_fonts.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/tables/buttons.html5.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/tables/buttons.print.min.js') }}"></script>

<script src="{{ url('dashboard/app-assets/js/scripts/tables/datatables/datatable-basic.js') }}"></script>
<script src="{{ url('dashboard/app-assets/js/scripts/tables/datatables/datatable-advanced.js') }}"></script>

<!-- END: Page Vendor JS-->

<script src="{{ url('dashboard/app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/forms/toggle/switchery.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/js/scripts/pages/app-invoice.js') }}"></script>
<script src="{{ url('dashboard/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ url('dashboard/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>

<!-- BEGIN: Theme JS-->
<script src="{{ url('dashboard/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ url('dashboard/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url('dashboard/app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
<!-- END: Page JS-->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>


<script>
    ClassicEditor
        .create( document.querySelector( '#faq' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#product' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#about' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#shop' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#productdetails' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#owner' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#blog' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@yield('scripts')
