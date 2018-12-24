<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Network;
class ApiController extends Controller
{

	public function getCompanyFromNetwork($bssid)
	{
		$network = Network::where('bssid',$bssid)->first();
		if (is_null($network)) abort(404);
		return $network->branch->company;
	}
    
}
