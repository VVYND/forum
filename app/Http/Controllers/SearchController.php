<?php

namespace App\Http\Controllers;

use App\{Thread, Trending};

class SearchController extends Controller
{
    /**
     * Show the search results.
     *
     * @param  \App\Trending $trending
     * @return mixed
     */
    public function show(Trending $trending)
    {
        $threads = Thread::search(request('q'))->paginate(25);

        // return $threads;
        // if (request()->expectsJson()) {
        //     return Thread::search(request('q'))->paginate(25);
        // }
        
        return view('threads.search', [
            'trending' => $trending->get()
        ]);
    }
}
