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
            <h3 class="text-gray-800">Guest</h3>
        </div>
        <div class="col-md-6">
            <h6 class="text-right text-sm-start">
                <a href="#" class="text-capitalize">view site
                    <i class="fas fa-external-link-alt fa-1x ml-1"></i>
                </a>
            </h6>
        </div>
    </div>

    <p class="mb-5">Add your socialMedia Links - <a href="https://{{$podcast_data->sub_domain}}.arcast.me" target="_blank" class="text-info">{{$podcast_data->sub_domain}}.arcast.me</a>
    </p>
    <a href="{{route('dashboard.social-media.create')}}" class="btn btn-primary btn-icon-split mb-4" onclick="event.preventDefault();
        document.getElementById('socialmedia-create').submit();">
        <form id="socialmedia-create" action="{{ route('dashboard.social-media.create') }}" method="POST" class="d-none">
            <input type="hidden" name="podcast_id" value="{{$podcast_data->id}}">
            @csrf
        </form>
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
                        <th>Guest Name</th>
                        <th>Published Date</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-capitalize">
                            <a href="#" class="text-primary ">hazem</a>
                        </td>
                        <td>2008/11/13</td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-eye fa-1x mr-1"></i>
                                view
                            </a>
                        </td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-pencil-alt fa-1x mr-1"></i>
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-trash-alt fa-1x mr-1"></i>
                                delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-capitalize">
                            <a href="#" class="text-primary ">ghanem</a>
                        </td>
                        <td>2011/06/27</td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-eye fa-1x mr-1"></i>
                                view
                            </a>
                        </td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-pencil-alt fa-1x mr-1"></i>
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-trash-alt fa-1x mr-1"></i>
                                delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-capitalize">
                            <a href="#" class="text-primary ">saady</a>
                        </td>
                        <td>2011/01/25</td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-eye fa-1x mr-1"></i>
                                view
                            </a>
                        </td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-pencil-alt fa-1x mr-1"></i>
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="#" class="text-capitalize text-info">
                                <i class="fas fa-trash-alt fa-1x mr-1"></i>
                                delete
                            </a>
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
