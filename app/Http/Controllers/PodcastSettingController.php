<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\PodcastSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PodcastSettingController extends Controller
{
    public function to_index(Request $request){
        $podcast_data = Podcast::findOrFail($request->podcast_id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);

            return redirect()->route('dashboard.podcast-settings.index');
        }
    }
    public function index()
    {
        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.Settings.index',compact('podcast_data'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(PodcastSetting $podcastSetting)
    {

    }


    public function edit(Podcast $podcast_setting)
    {
        $podcast_data = Podcast::findOrFail($podcast_setting->id);
        if ($podcast_data->email != auth()->user()->email) {
            abort(404, 'Page not found');

        } else {
            return view('front_dashboard.Settings.edit', compact('podcast_data'));
        }
    }

    public function update(Request $request,Podcast $podcast_setting)
    {
        $request->validate([
            'podcast_title'=>'required',
            'sub_domain'=>'required|unique:podcasts,sub_domain,'.$podcast_setting->id,
            'podcast_description'=>'required',
            'podcast_image'=>'image',
        ]);
        $request_data = $request->except('podcast_id');
        if($request->podcast_image){
            if (strpos($podcast_setting->podcast_image,'podbuilder'))
            {Storage::disk('public_uploads')->delete('/podcast_images/'.$podcast_setting->podcast_image);
            }

            Image::make($request->podcast_image)->save(public_path('uploads/podcast_images/'.$request->podcast_image->hashName()));
            $request_data['podcast_image'] = asset('uploads/podcast_images/'.$request->podcast_image->hashName());
        }
        $podcast_setting->update($request_data);
        $podcast_setting->save();
        $podcast_data = Podcast::findOrFail($podcast_setting->id);
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.podcast-settings.index');

    }


    public function destroy(Podcast $podcast_setting)
    {
        $podcast_setting->delete();
        return redirect()->route('dashboard.home');
    }
}
