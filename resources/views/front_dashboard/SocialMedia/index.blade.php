@extends('layouts.pod_dashboard.partials.header')
@section('css-section')
    <link href="{{asset('assets/pod-dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection
@extends('layouts.pod_dashboard.app')
@section('top_section')

@endsection
@section('mid_section')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-gray-800">Social Media links</h3>
        </div>
        <div class="col-md-6">
            <h6 class="text-right text-sm-start">
                <a href="https://{{$podcast_data->sub_domain}}.arcast.me" target="_blank" class="text-capitalize">view site
                    <i class="fas fa-external-link-alt fa-1x ml-1"></i>
                </a>
            </h6>
        </div>
    </div>

    <p class="mb-5">Add your socialMedia Links - <a href="https://{{$podcast_data->sub_domain}}.arcast.me" target="_blank" class="text-info">{{$podcast_data->sub_domain}}.arcast.me</a>
    </p>
    @if(!$podcast_data->socialmedias->first())
    <a href="{{route('dashboard.social-media.create')}}" class="btn btn-primary btn-icon-split mb-4" >

                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
        <span class="text text-capitalize">add new SocialMedia link</span>
    </a>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">SocialMedia link</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>LinkedIn</th>
                        <th>Google</th>
                        <th>Apple</th>
                        <th>Deezer</th>
                        <th>Anghami</th>

                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                @if($podcast_data->socialmedias->first())
                 <tr>
                        <td >
                            <a href="{{$podcast_data->socialmedias->first()->facebook_link}}" class="text-primary ">facebook</a>
                        </td>
                        <td >
                            <a href="{{$podcast_data->socialmedias->first()->twitter_link}}" class="text-primary ">twitter</a>
                        </td>
                        <td >
                            <a href="{{$podcast_data->socialmedias->first()->instagram_link}}" class="text-primary ">instagram</a>
                        </td>
                        <td>
                            <a href="{{$podcast_data->socialmedias->first()->linkedIn_link}}" class="text-primary ">linkedIn</a>
                        </td>
                     <td>
                         <a href="{{$podcast_data->socialmedias->first()->google_link}}" class="text-primary ">Google Podcast</a>
                     </td>
                     <td>
                         <a href="{{$podcast_data->socialmedias->first()->apple_link}}" class="text-primary ">Apple Podcast</a>
                     </td>
                     <td>
                         <a href="{{$podcast_data->socialmedias->first()->deezer_link}}" class="text-primary ">Deezer Podcast</a>
                     </td>
                     <td>
                         <a href="{{$podcast_data->socialmedias->first()->anghami_link}}" class="text-primary ">Anghami Podcast</a>
                     </td>


                        <td>
                            <a href="{{route('dashboard.social-media.edit',$podcast_data->socialmedias->first()->id)}}" class="text-capitalize text-info">
                                <i class="fas fa-pencil-alt fa-1x mr-1"></i>
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="{{route('dashboard.social-media.destroy',$podcast_data->socialmedias->first()->id)}}" class="text-capitalize text-info" onclick="event.preventDefault();
                                document.getElementById('socialmedia-delete').submit();">
                                <i class="fas fa-trash-alt fa-1x mr-1"></i>
                                delete
                            </a>
                            <form id="socialmedia-delete" action="{{ route('dashboard.social-media.destroy',$podcast_data->socialmedias->first()->id) }}" method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endif

                    </tbody>
                </table>
            </div>
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
@endsection
