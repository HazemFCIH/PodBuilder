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
            <h3 class="text-gray-800">guests</h3>
        </div>
        <div class="col-md-6">
            <h6 class="text-right text-sm-start">
                <a href="https://{{$podcast_data->sub_domain}}.arcast.me" target="_blank" class="text-capitalize">view site
                    <i class="fas fa-external-link-alt fa-1x ml-1"></i>
                </a>
            </h6>
        </div>
    </div>

    <p class="mb-5">Add your Podcast guests - <a href="https://{{$podcast_data->sub_domain}}.arcast.me" target="_blank" class="text-info">{{$podcast_data->sub_domain}}.arcast.me</a>
    </p>
    <a href="{{route('dashboard.podcast-guests.create')}}" class="btn btn-primary btn-icon-split mb-4" >

        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
        <span class="text text-capitalize">feature new guest</span>
    </a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">featured guests</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>guest Name</th>
                        <th>guest title</th>
                        <th>guest Bio</th>
                        <th>guest Episode</th>
                        <th>Image</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>LinkedIn</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($podcast_data->podcastGuests as $guest)
                        <tr>
                            <td class="text-capitalize">
                                <p class="text-primary ">{{$guest->name}}</p>
                            </td>
                            <td class="text-capitalize">
                                <p class="text-primary ">{{$guest->title}}</p>
                            </td>
                            <td class="text-capitalize">
                                <p class="text-primary ">{!! $guest->description !!}</p>
                            </td>
                            <td >
                                <a href="{{$guest->episode_link}}" class="text-primary ">Episode</a>
                            </td>
                            <td class="text-capitalize">
                                <img src="{{$guest->image_path}}" width="100px" alt="">
                            </td>

                            <td >
                                <a href="{{$guest->facebook_link}}" class="text-primary ">facebook</a>
                            </td>
                            <td >
                                <a href="{{$guest->twitter_link}}" class="text-primary ">twitter</a>
                            </td>
                            <td >
                                <a href="{{$guest->instagram_link}}" class="text-primary ">instagram</a>
                            </td>
                            <td>
                                <a href="{{$guest->linkedIn_link}}" class="text-primary ">linkedIn</a>
                            </td>

                            <td>
                                <a href="{{route('dashboard.podcast-guests.edit',$guest->id)}}" class="text-capitalize text-info">
                                    <i class="fas fa-pencil-alt fa-1x mr-1"></i>
                                    edit
                                </a>
                            </td>
                            <td>
                                <a href="{{route('dashboard.podcast-guests.destroy',$guest->id)}}" class="text-capitalize text-info" onclick="event.preventDefault();
                                document.getElementById('guests-delete').submit();">
                                    <i class="fas fa-trash-alt fa-1x mr-1"></i>
                                    delete
                                </a>
                                <form id="guests-delete" action="{{ route('dashboard.podcast-guests.destroy',$guest->id) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>

                    @endforeach

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
