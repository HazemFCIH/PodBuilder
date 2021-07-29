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
            <h3 class="text-gray-800">faqs</h3>
        </div>
        <div class="col-md-6">
            <h6 class="text-right text-sm-start">
                <a href="https://{{$podcast_data->sub_domain}}.arcast.me" target="_blank" class="text-capitalize">view site
                    <i class="fas fa-external-link-alt fa-1x ml-1"></i>
                </a>
            </h6>
        </div>
    </div>

    <p class="mb-5">Add your faqs Links - <a href="https://{{$podcast_data->sub_domain}}.arcast.me" target="_blank" class="text-info">{{$podcast_data->sub_domain}}.arcast.me</a>
    </p>
    <a href="{{route('dashboard.podcast-faqs.create')}}" class="btn btn-primary btn-icon-split mb-4" >

        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
        <span class="text text-capitalize">feature new faqs</span>
    </a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">featured faqs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Question</th>
                        <th>Question Image</th>
                        <th>Question Answer</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($podcast_data->podcastFaqs as $faq)
                        <tr>
                            <td class="text-capitalize">
                                <p class="text-primary ">{{$faq->name}}</p>
                            </td>

                            <td class="text-capitalize">
                                <img src="{{$faq->image_path}}" width="100px" alt="">
                            </td>

                            <td class="text-capitalize">
                                <p class="text-primary ">{!! $faq->description !!}</p>
                            </td>





                            <td>
                                <a href="{{route('dashboard.podcast-faqs.edit',$faq->id)}}" class="text-capitalize text-info">
                                    <i class="fas fa-pencil-alt fa-1x mr-1"></i>
                                    edit
                                </a>
                            </td>
                            <td>
                                <a href="{{route('dashboard.podcast-faqs.destroy',$faq->id)}}" class="text-capitalize text-info" onclick="event.preventDefault();
                                document.getElementById('faqs-delete').submit();">
                                    <i class="fas fa-trash-alt fa-1x mr-1"></i>
                                    delete
                                </a>
                                <form id="faqs-delete" action="{{ route('dashboard.podcast-faqs.destroy',$faq->id) }}" method="POST" class="d-none">
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
