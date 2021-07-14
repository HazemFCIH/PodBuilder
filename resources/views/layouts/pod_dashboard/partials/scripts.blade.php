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
</script>
