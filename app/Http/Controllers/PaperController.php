<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder; 

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'product',
            'id'    => $id
        ];
        $response = $client->get($params);
        $source = $response['_source']['relevantpapers'];
        return view('search.pane',compact('id', 'source'));
    }

    public function dashboard($id) {
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'product',
            'id'    => $id
        ];
        $response = $client->get($params);
        $source = $response['_source']['relevantpapers'];
        // dd($source);
        return view('search.pane',compact('id', 'source'));
    }
}
