@extends('layouts.pod_dashboard.partials.header')
@section('css-section')
    <!-- Custom styles for this page -->
    <link href="{{asset('assets/pod-dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@extends('layouts.pod_dashboard.app')
@section('top_section')

@endsection
@section('mid_section')
    <!-- Page Heading -->
    <div class="row mb-4">
        <div class="col-md-6">
            <a href="guest.html" class="h3 primary text-capitalize">
                <i class="fas fa-chevron-left fa-1x ml-1"></i>
                guest
            </a>
        </div>
        <div class="col-md-6">
            <h6 class="text-right text-sm-start">
                <a href="#" class="text-capitalize">view site
                    <i class="fas fa-external-link-alt fa-1x ml-1"></i>
                </a>
            </h6>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">feature new guest</h6>
        </div>
        <div class="card-body">
            <form class="user">
                <div class="form-group">
                    <label for="image" class="form-label text text-capitalize">guest image
                    </label>
                    <input type="file" class="form-control-file rounded-0" id="exampleImage">
                    <div id="exampleImage" class="form-text text text-xs">
                        Best size 800*800px
                    </div>
                </div>
                <div class="form-group">
                    <label for="examplePostName" class="form-label text text-capitalize">guest
                        name</label>
                    <input type="text" class="form-control form-control-user rounded-0 text-capitalize"
                           id="examplePostName" placeholder="Hazem Mohamed" required>
                    <div id="examplePostName" class="form-text text text-xs">
                        Guest name
                    </div>
                </div>
                <div class="form-group">
                    <label for="examplePostURL" class="form-label text text-capitalize">guest slug
                        (URL)</label>
                    <input type="url" class="form-control form-control-user rounded-0"
                           id="examplePostURL" placeholder="hazem-mohamed" required>
                    <div id="examplePostURL" class="form-text text text-xs">
                        https://askdesigner.podbuilder.com/hazem-mohamed
                    </div>
                </div>
                <div class="form-group">
                    <label for="editor" class="form-label text text-capitalize">guest bio</label>
                    <div id="editor"></div>
                    <div id="editor" class="form-text text text-xs">
                        Your guest bio goes here. You can write and add links.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="facebookURL" class="form-label text text-capitalize">guest
                                facebook profile
                            </label>
                            <input type="url" class="form-control form-control-user rounded-0"
                                   id="facebookURL" placeholder="https://facebook.com/hazem-mohamed">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="instagramURL" class="form-label text text-capitalize">guest
                                instagram profile
                            </label>
                            <input type="url" class="form-control form-control-user rounded-0"
                                   id="instagramURL" placeholder="https://instagram.com/hazem-mohamed">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="linkedInURL" class="form-label text text-capitalize">guest
                                linkedIn profile
                            </label>
                            <input type="url" class="form-control form-control-user rounded-0"
                                   id="linkedInURL" placeholder="https://linkin.com/hazem-mohamed">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="episodeURL" class="form-label text text-capitalize">episode link</label>
                    <input type="url" class="form-control form-control-user rounded-0"
                           id="episodeURL" placeholder="https://askdesigner.podbuilder.com/episode-page
                                        " required>
                </div>
                <div class="form-group row">
                    <div class="col-sm-9 mb-3 mb-sm-0">
                    </div>
                    <div class="col-sm-3 mt-3 mb-sm-0">
                        <a href="guest.html" class="btn btn-primary btn-user btn-block text-capitalize">
                            feature guest
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.pod_dashboard.partials.scripts')
@section('js-section')
    <!-- Page level plugins -->
    <script src="{{asset('assets/pod-dashboard/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/pod-dashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('assets/pod-dashboard/js/demo/datatables-demo.js')}}"></script>
    <!-- CKE Editor -->
    <script src="{{asset('assets/pod-dashboard/js/demo/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
