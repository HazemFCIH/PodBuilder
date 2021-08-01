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
            <h3 class="text-gray-800">Settings</h3>
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
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">featured hosts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Domain Name</th>
                        <th>Podcast Title</th>
                        <th>Podcast Description</th>
                        <th>Podcast Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >
                                <p class="text-primary ">{{$podcast_data->sub_domain}}</p>
                            </td>
                            <td class="text-capitalize">
                                <p class="text-primary ">{{$podcast_data->podcast_title}}</p>
                            </td>
                            <td class="text-capitalize">
                                <p class="text-primary ">{!! $podcast_data->podcast_description!!}</p>
                            </td>
                            <td class="text-capitalize">
                                <img src="{{$podcast_data->podcast_image}}" width="100px" alt="">
                            </td>



                            <td>
                                <a href="{{route('dashboard.podcast-settings.edit',$podcast_data->id)}}" class="text-capitalize text-info">
                                    <i class="fas fa-pencil-alt fa-1x mr-1"></i>
                                    edit
                                </a>
                            </td>
                            <td>

                                <form   action="{{ route('dashboard.podcast-settings.destroy',$podcast_data->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete btn-sm" ><i class="fa fa-trash"></i>Delete</button>

                                </form>
                            </td>
                        </tr>


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
