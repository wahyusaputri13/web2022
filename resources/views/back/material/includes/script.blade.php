<!--   Core JS Files   -->
<script src="{{ asset('assets/back/material/js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/back/material/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/back/material/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/back/material/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/back/material/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('assets/back/material/js/jquery.validate.min.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('assets/back/material/js/moment.min.js') }}"></script>
<!--  Charts Plugin -->
<script src="{{ asset('assets/back/material/js/chartist.min.js') }}"></script>
<!--  Plugin for the Wizard -->
<script src="{{ asset('assets/back/material/js/jquery.bootstrap-wizard.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/back/material/js/bootstrap-notify.js') }}"></script>
<!--   Sharrre Library    -->
<script src="{{ asset('assets/back/material/js/jquery.sharrre.js') }}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{ asset('assets/back/material/js/bootstrap-datetimepicker.js') }}"></script>
<!-- Vector Map plugin -->
<script src="{{ asset('assets/back/material/js/jquery-jvectormap.js') }}"></script>
<!-- Sliders Plugin -->
<script src="{{ asset('assets/back/material/js/nouislider.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="{{ asset('assets/back/material/js/jquery.select-bootstrap.js') }}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{ asset('assets/back/material/js/jquery.datatables.js') }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets/back/material/js/sweetalert2.js') }}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('assets/back/material/js/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ asset('assets/back/material/js/fullcalendar.min.js') }}"></script>
<!-- TagsInput Plugin -->
<script src="{{ asset('assets/back/material/js/jquery.tagsinput.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('assets/back/material/js/material-dashboard.js') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/back/material/js/demo.js') }}"></script>
<!-- <script src="{{ asset('assets/back/material/ckeditor/ckeditor.js') }}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        demo.checkFullPageBackgroundImage();

        setTimeout(function () {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)

        demo.initMaterialWizard();
        // Javascript method's body can be found in assets/js/demos.js
        // demo.initDashboardPageCharts();

        // demo.initVectorMap();

    });

    // btn hapus
    $(document).on('click', '.delete-data-table', function (a) {
        a.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "Do you realy want to delete this records? This process cannot be undone.",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-blue',
            confirmButtonText: 'Delete!',
            buttonsStyling: false
        }).then((result) => {
            a.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: url,
                method: 'delete',
                success: function () {
                    swal(
                        'Deleted!',
                        'data has been deleted.',
                        'success'
                    )
                    $('#datatables').DataTable().ajax.reload();
                },
                error: function () {
                    swal(
                        'Gagal!',
                        'Tidak dapat menghapus menu Parent.',
                        'error'
                    )
                    $('#datatables').DataTable().ajax.reload();
                }
            })
        })
    });
</script>