<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder; 
use Illuminate\Support\Str;

class ElasticSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $client = ClientBuilder::create()->build();

        $search = $request->input('search');
        if($search === '' || Str::length($search) === 0) {
            return redirect()->view('dashboard');
        }
        $params = [
            'index' => 'product',
            'body'  => [
                'query' => [
                    'match' => [
                        'title' => $search ?? ''
                    ]
                ]
            ]
        ];
        $results = $client->search($params);
        $count = $results['hits']['total']['value'];
        $response = $results['hits']['hits'];
        return view('search.serp' ,compact('response','count'));
    }
}
