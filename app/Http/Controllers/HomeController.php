<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{

    public function __invoke(Request $request)
    {

        $featuredPosts = Cache::remember('featuredPosts', Carbon::now()->addDay(), function () {
           return Post::published()->featured()->with('categories')->latest('published_at')->take(3)->get();
        });

        $latestPosts = Cache::remember('latestPosts', Carbon::now()->addMinute(), function () {
            return Post::published()->with('categories')->latest('published_at')->take(5)->get();
     });
        

        return view('Home', [
            'featuredPosts' => $featuredPosts, 'latestPosts' => $latestPosts

        ]);
    }
}
