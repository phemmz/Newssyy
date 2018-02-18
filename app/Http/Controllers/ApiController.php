<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Api;

class ApiController extends Controller
{

    /**
     * Gets all news sources
     *
     * @param Request $request
     * @return callable view
     */
	public function getNewsSources(Request $request)
	{
        $api = new Api;
        $data['news_sources'] = $api->getAllSources();
        return view('welcome', $data);
    }

    /**
     * Gets news from a particular source
     *
     * @param string $source_id
     * @return callable view
     */
    public function getNews($source_id)
    {
        $api = new Api;
        $data['news'] = $api->getNews($source_id);
        return view('news', $data);
    }
}
