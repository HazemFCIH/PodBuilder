<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/pod-dashboard/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/pod-dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('assets/pod-dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('assets/pod-dashboard/js/sb-admin-2.min.js')}}"></script>
<!-- Page level plugins -->
<script src="{{asset('assets/pod-dashboard/vendor/chart.js/Chart.min.js')}}"></script>
<!-- Page level custom scripts -->
<script src="{{asset('assets/pod-dashboard/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('assets/pod-dashboard/js/demo/chart-pie-demo.js')}}"></script>
@yield('js-section')
<script>
    $(".image-preview").change(function () {

        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.show-image').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]); // convert to base64 string
        }

    });

    //delete
    $('.delete').click(function (e) {

        var that = $(this)

        e.preventDefault();

        var n = new Noty({
            text: "are you sure you want to delete this podcast",
            type: "warning",
            killer: true,
            buttons: [
                Noty.button("yes", 'btn btn-danger mr-2', function () {
                    that.closest('form').submit();
                }),

                Noty.button("no", 'btn btn-primary mr-2', function () {
                    n.close();
                })
            ]
        });

        n.show();

    });//end of delete
</script>
{{--noty--}}
<link rel="stylesheet" href="{{ asset('assets/pod-dashboard/js/plugins/noty/noty.css') }}">
<script src="{{ asset('assets/pod-dashboard/js/plugins/noty/noty.min.js') }}"></script>
