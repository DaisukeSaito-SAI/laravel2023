<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Service\TweetService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();
        return view('tweet.index')
            ->with('tweets', $tweets);
    }

}
