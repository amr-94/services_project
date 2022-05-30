<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function autocomolete(Request $req)
    {
        $data= Service::select('name')->where("name","LIKE","%{$req->input('query')}%")->get();
        return response()->json($data);
    }

    public function searchservice(Request $req)
    {
        $service_slug= str::slug($req->q,'-');
        if($service_slug)
        {
            return redirect('/service/'.$service_slug);
        }
        else
        {
            return back();
        }

    }
}
