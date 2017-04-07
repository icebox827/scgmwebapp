<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App title -->
    <title>SGCM Admin</title>

    <link rel="stylesheet" href="{{ URL::to('assets/plugins/morris/morris.css') }}">

    <!-- App CSS -->
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{URL::to('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ URL::to('assets/js/modernizr.min.js') }}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="fixed-left">

@yield('contenu')
<!-- end wrapper page -->



<script>
    var resizefunc = [];
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable( { keys: true } );
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
        var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
    } );
    TableManageButtons.init();

</script>

<!-- jQuery  -->
<script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('assets/js/detect.js') }}"></script>
<script src="{{ URL::to('assets/js/fastclick.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ URL::to('assets/js/waves.js') }}"></script>
<script src="{{ URL::to('assets/js/wow.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.scrollTo.min.js') }}"></script>
@yield('js')
<!-- App js -->
<script src="{{ URL::to('assets/js/jquery.core.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.app.js') }}"></script>

<!-- Counter Up  -->
<script src="{{URL::to('assets/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{URL::to('assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
<!--Morris Chart-->
<script src="{{URL::to('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{URL::to('assets/pages/jquery.morris.init.js')}}"></script>


!-- Datatables-->
<script src="{{URL::to('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>

<!-- Datatable init js -->
<script src="assets/pages/datatables.init.js"></script>
</body>
</html>