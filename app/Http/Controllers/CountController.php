<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder; 

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $client = ClientBuilder::create()->build();

        $params = [
            'index' => 'product',
            'body'  => [
                'query' => [
                    'match_all' => new \stdClass()
                ]
            ]
        ];
        $results = $client->search($params);
        $count = $results['hits']['total']['value'];
        $response = $results['hits']['hits'];
        return view('search.serp' ,compact('response','count'));
    }
}
