<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Http\Livewire\Frontpage;
use App\Models\User;
use Illuminate\Http\Request;

class ReleasesController extends Controller
{
    /**
     * Show all posts
     *
     * @return void
     */
    public function index()
    {

        $album = Album::firstWhere('slug', request('album'));

        return view('discography.index', [
            'albums' => Album::get(),
        ]);
        
    }
    
        
    /**
     * Display an individual post
     *
     * @return void
     */
    public function show(Album $album)
    {
        // find a post by its slug and pass it to a view called 'post'
        // $post = Post::findOrFail($id);

        // pass the html file to the view
        return view('discography.show', [

        ]);
    }
}
