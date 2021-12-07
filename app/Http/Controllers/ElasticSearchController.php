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
        $search = strip_tags(htmlspecialchars_decode($search));
        if($search == '' || Str::length($search) == 0) {
            return redirect()->route('dashboard');
        }
        $params = [
            'index' => 'product',
            'explain' => true,
            'body'  => [
                'query' => [
                    'multi_match' => [
                        'query' => $search,
                        'fuzziness' => 'AUTO',
                        'fields' => ['title^5', 'descritpion'],
                    ],
                    ],
                    'highlight' => [
                        "pre_tags" => ["<mark>"],
                        "post_tags" => ["</mark>"],
                        "fields" => [
                            "title" => new \stdClass(),
                            "description" => new \stdClass()
                        ],
                        'require_field_match' => false
                    ],
                ]
            ];
        $results = $client->search($params);
        $count = $results['hits']['total']['value'];
        $response = $results['hits']['hits'];
        return view('search.serp' ,compact('response','count'));
    }

    public function callTest($sentStr){
        dd("IMcalledd??????", $sentStr);  
    }
}
