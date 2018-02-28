<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Api;

class ApiController extends Controller
{

    /**
     * Gets all news sources
     *
     * @param (Request|string) $request, searchKey
     * @return callable view
     */
	public function getNewsSources(Request $request, $searchKey='')
	{
        $api = new Api;
        $data['news_sources'] = $api->getAllSources();
        if (!empty($searchKey)) {
            $data['news_sources'] = $this->filterArray($data['news_sources'], 'name');
        }

        return view('welcome', $data);
    }

    /**
     * Gets news from a particular source
     *
     * @param string $source_id, $searchKey
     * @return callable view
     */
    public function getNews($source_id, $searchKey='')
    {
        $api = new Api;
        $data['news'] = $api->getNews($source_id);
        if (!empty($searchKey)) {
            $data['news'] = $this->filterArray($data['news'], 'title');
        }

        return view('news', $data);
    }

    /**
     * Filter through news sources based on a search term
     * 
     * @param Request request
     * @return callable getNewsSources
     */
    public function searchNewsSources(Request $request)
    {
        return $this->getNewsSources($request, $_POST['source']);
    }

    /**
     * Filter through news based on a search term
     * 
     * @param string source_id
     * @return callable getNews
     */
    public function searchNews($source_id)
    {
        return $this->getNews($source_id, $_POST['source']);
    }

    /**
     * Checks if a search term matches a text
     * 
     * @param (object,string) $newsData, $keyValue
     * @return callable getNews
     */
    public function filterArray($newsData, $keyValue)
    {
        $filteredArray = array_where($newsData, function ($value, $key) use($keyValue) {
            return (str_contains(strtolower($value[$keyValue]), strtolower($_POST['source'])));
        });
        return $filteredArray;
    }
}
