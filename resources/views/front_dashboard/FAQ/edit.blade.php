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
            <a href="{{route('dashboard.podcast-faqs.index')}}" class="h3 primary text-capitalize">
                <i class="fas fa-chevron-left fa-1x ml-1"></i>
                faqs
            </a>
        </div>
        <div class="col-md-6">
            <h6 class="text-right text-sm-start">
                <a href="https://{{$podcast_data->sub_domain}}.arcast.me" target="_blank" class="text-capitalize">view site
                    <i class="fas fa-external-link-alt fa-1x ml-1"></i>
                </a>
            </h6>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">feature new faq</h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{route('dashboard.podcast-faqs.update',$podcast_faq->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('layouts.general._errors')

                <div class="form-group">
                    <label for="image" class="form-label text text-capitalize">faq image
                    </label>
                    <input type="file" class="rounded-0 form-control image-preview" id="exampleImage" name="image_url" value="{{$podcast_faq->image_url}}">
                    <div id="exampleImage" class="form-text text text-xs">
                        Best size 800*800px
                    </div>
                </div>
                <div class="form-group">
                    <img src="{{$podcast_faq->image_path}}" style="width: 100px" class="img-thumbnail show-image">
                </div>
                <div class="form-group">
                    <label for="examplePostName" class="form-label text text-capitalize">faq
                        name</label>
                    <input type="text" class="form-control form-control-user rounded-0 text-capitalize"
                           id="examplePostName" placeholder="faq name" name="name" value="{{$podcast_faq->name}}" required>
                    <div id="examplePostName" class="form-text text text-xs">
                        faq name
                    </div>
                </div>

                <div class="form-group">
                    <label for="editor" class="form-label text text-capitalize">faq bio</label>
                    <textarea id="editor" class="form-control ckeditor" name="description">
 {!! $podcast_faq->description !!}
                    </textarea>
                </div>


                <div class="form-group row">
                    <div class="col-sm-9 mb-3 mb-sm-0">
                    </div>
                    <div class="col-sm-3 mt-3 mb-sm-0">
                        <input type="hidden" name="podcast_id" value="{{$podcast_faq->podcast->id}}">

                        <input type="submit" class="btn btn-primary btn-user btn-block text-capitalize" value="feature faq">


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
