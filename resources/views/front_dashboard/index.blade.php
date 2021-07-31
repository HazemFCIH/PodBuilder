@extends('layouts.pod_dashboard.app')
@section('top_section')
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
@endsection
@section('mid_section')
    @foreach(array_chunk($podcasts, 2) as $chunk)
        <div class="row">

@foreach($chunk as $podcast)
                <div class="col-lg-5 mb-4">
                    <!-- RSS ATTRIBUTE! Podcast -->
                    <div class="card shadow mb-4">
                        <!-- RSS ATTRIBUTE! Podcast name -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-microphone-alt fa-1x"></i>{{$podcast['podcast_title']}}</h6>
                        </div>
                        <div class="card-body">
                            <!-- RSS ATTRIBUTE! Podcast Image -->
                            <div class="text-center">
                                <a href="https://{{$podcast['sub_domain']}}.arcast.me" target="_blank">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 12rem;"
                                         src="{{$podcast['podcast_image']}}" alt="..."></a>
                                <h6><a class="lead text-info mb-4" target="_blank"
                                       href="https://{{$podcast['sub_domain']}}.arcast.me">{{$podcast['sub_domain']}}.arcast.me</a> </h6>
                            </div>
{{--                            <div class="text-center mb-3">--}}
{{--                                <a  href="{{route('dashboard.podcast-settings.set-index')}}" onclick="event.preventDefault();--}}
{{--                                    document.getElementById('settings-index-{{$podcast['id']}}').submit();">--}}
{{--                                    <i class="fas fa-cog fa-1x"></i>--}}
{{--                                </a>--}}
{{--                                <form id="settings-index-{{$podcast['id']}}" action="{{ route('dashboard.podcast-settings.set-index') }}" method="POST" class="d-none">--}}
{{--                                    <input type="hidden" name="podcast_id" value="{{$podcast['id']}}">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}

{{--                            </div>--}}
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    @endforeach

@endsection
