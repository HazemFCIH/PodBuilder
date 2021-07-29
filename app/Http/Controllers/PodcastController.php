<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
class PodcastController extends Controller
{

    public function index(){
        abort(404, 'Page not found');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }


    public function store(Request $request)
    {

        $request->validate([
            'rss_feed'=> 'required',
            'sub_domain'=> 'required',

            ]);
        if (filter_var($request->rss_feed, FILTER_VALIDATE_URL)) {
            if (filter_var($request->sub_domain, FILTER_VALIDATE_DOMAIN)){
                $request->validate([
                    'sub_domain' => 'unique:podcasts'
                ]);
            }else{
                return redirect()->back();
            }

                $f = \FeedReader::read($request->rss_feed);
            $f->handle_content_type();
            if(isset($f->get_items()[0])){
                $rss_type = $f->get_items()[0]->get_enclosure()->get_type();
                if (str_contains($rss_type, 'audio')) {

                    $podcast_title = $f->get_title();
                    $podcast_description =   $f->get_description();
                    $podcast_image=     $f->get_image_url();
                    $podcast_language =$f->get_language();
                    $podcast_author=$f->get_author()->get_name();
                    $podcast_premalink = $f->get_permalink();
                    Podcast::create([
                        'sub_domain' =>$request->sub_domain,
                        'email' =>auth()->user()->email,
                        'rss_feed' =>$request->rss_feed,
                        'podcast_title' =>$podcast_title,
                        'podcast_description' =>$podcast_description,
                        'podcast_image' =>$podcast_image,
                        'podcast_language' =>$podcast_language,
                        'podcast_author' =>$podcast_author,
                        'podcast_premalink' =>$podcast_premalink,
                    ]);
                    return redirect()->away("https://".$request->sub_domain.".arcast.me");

                } else {
                    return redirect()->back();
                }
            }else{
                return redirect()->back();

            }

        }else{
            return redirect()->back();
        }
    }


    public function show($subdomain)
    {
        $podcast = Podcast::where('sub_domain', $subdomain)->firstOrFail();
        $socielmedia = $podcast->socialmedias->first();
        $hosts = $podcast->podcastHosts->toArray();
        $guests = $podcast->podcastGuests;
         view()->share([
             'podcast'=>$podcast,
             'socielmedia'=>$socielmedia,
             'hosts'=>$hosts,
             'guests'=>$guests,
                            ]);
        $f = \FeedReader::read($podcast->rss_feed);
        $f->handle_content_type();
        $episodes = [];
        // item level
        $i = 0;
        foreach ($f->get_items() as $item){
            $episodes[$i]['episode_auhtor_name'] = $item->get_author()->get_name();
            $episodes[$i]['episode_title'] = $item->get_title();
            $episodes[$i]['episode_description'] = $item->get_description();
            $episodes[$i]['episode_content'] = $item->get_content();
            $episodes[$i]['episode_date'] = $item->get_date();
            $episodes[$i]['episode_id'] = $item->get_id();
            // item  enclosure level
            foreach ($item->get_enclosures() as $enclosure)
            {
                if (str_contains($enclosure->get_type(),'audio')){

                    $episodes[$i]['episode_size'] =   $enclosure->get_size();
                    $episodes[$i]['episode_audio'] =  $enclosure->get_Link();
                    $episodes[$i]['episode_duration'] =  $enclosure->get_duration();
                }
                if (str_contains($enclosure->get_type(),'imag')){

                    $episodes[$i]['episode_image'] =  $enclosure->get_Link();
                }
            }
            $i++;
        }
         return view('PodcastPage.index',compact('episodes'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        //
    }
}
