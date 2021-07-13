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
            <a href="{{route('dashboard.social-media.index')}}" class="h3 primary text-capitalize" onclick="event.preventDefault();
        document.getElementById('socialmedia-index').submit();">
                <i class="fas fa-chevron-left fa-1x ml-1"></i>
               socialMedia Links
            </a>
            <form id="socialmedia-index" action="{{ route('dashboard.social-media.index') }}" method="POST" class="d-none">
                <input type="hidden" name="podcast_id" value="{{$podcast_data->id}}">
                @csrf
            </form>
        </div>
        <div class="col-md-6">
            <h6 class="text-right text-sm-start">
                <a href="{{URL::to('/')}}/podcasts/{{$podcast_data->sub_domain}}" class="text-capitalize">view site
                    <i class="fas fa-external-link-alt fa-1x ml-1"></i>
                </a>
            </h6>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">add SocialMedia link</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{route('dashboard.social-media.store')}}">
@csrf
                @method('POST')
                <div class="form-group">
                    <label for="examplePostName" class="form-label text text-capitalize">Facebook link</label>
                    <input type="text" class="form-control form-control-user rounded-0 text-capitalize"
                           id="examplePostName" placeholder="facebook.com/podcast" name="facebook_link">
                    <div id="examplePostName" class="form-text text text-xs">
                        Facebook link
                    </div>
                </div>

                <div class="form-group">
                    <label for="examplePostName" class="form-label text text-capitalize">Instagram link</label>
                    <input type="text" class="form-control form-control-user rounded-0 text-capitalize"
                           id="examplePostName" placeholder="instagram.com/podcast" name="instagram_link">
                    <div id="examplePostName" class="form-text text text-xs">
                        Instagram link
                    </div>
                </div>
                <div class="form-group">
                    <label for="examplePostName" class="form-label text text-capitalize">Twitter link</label>
                    <input type="text" class="form-control form-control-user rounded-0 text-capitalize"
                           id="examplePostName" placeholder="twitter.com/podcast" name="twitter_link">
                    <div id="examplePostName" class="form-text text text-xs">
                        Twitter link
                    </div>
                </div>
                <div class="form-group">
                    <label for="examplePostName" class="form-label text text-capitalize">LinkedIn link</label>
                    <input type="text" class="form-control form-control-user rounded-0 text-capitalize"
                           id="examplePostName" placeholder="linkedin.com/podcast" name="linkedIn_link">
                    <div id="examplePostName" class="form-text text text-xs">
                        LinkedIn link
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-9 mb-3 mb-sm-0">
                    </div>
                    <div class="col-sm-3 mt-3 mb-sm-0">
                       <input type="submit" value="Add" class="btn btn-primary btn-user btn-block text-capitalize"/>


                    </div>
                </div>
                <input type="hidden" name="podcast_id" value="{{$podcast_data->id}}">
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
