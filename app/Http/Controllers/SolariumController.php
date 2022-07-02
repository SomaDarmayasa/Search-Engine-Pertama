<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Solarium\Client;
use Symfony\Component\Console\Input\Input;

class SolariumController extends Controller
{
    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    public function ping()
    {
        // create a ping query
        $ping = $this->client->createPing();

        // execute the ping query
        try {
            $this->client->ping($ping);
            return response()->json('OK');
        } catch (\Solarium\Exception $e) {
            return response()->json('ERROR', 500);
        }
    }



    public function cari(Request $request)
    {
        //get data from request
        $cari = $request->input('cari');
        $cari = str_replace(' ', '+', $cari);
        // dd($cari);
        // get data solr
        if ($cari != ''){
            $query = $this->client->createSelect();
            // $query->setQuery('body_txt_id:'.$cari);
            $query->setQuery('(title_txt_id:' . $cari . ' OR body_txt_id:' . $cari . ')^2');
            $query->setStart(0);
            $query->setRows(100);
            $resultset = $this->client->select($query);
            // dd($resultset);

            // show the resultset

            $data = [];
            foreach ($resultset as $document) {
                $data[] = $document;
            }
            // dd($data);
            //show the data

            //showing data 10 per page
            $perPage = 10;
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $itemCollection = collect($data);
            $currentPageItems = $itemCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
            $paginator = new LengthAwarePaginator($currentPageItems, count($itemCollection), $perPage);
            $paginator->setPath('/cari?cari='.$cari);
            // dd($paginator);
            return view('HasilPencarian', compact('paginator'));
            // return view('HasilPencarian', compact('data'));

        }
       else{
        return redirect('/');
       }
    }
}