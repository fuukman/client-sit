<?php

namespace App\Http\Controllers;
use Httpful;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
class Client extends Controller
{
	public function search(Request $request){
		 $query = $request->get('q');


		$url = "http://localhost/server-sit/public/api/siswa/".$query;
		$response = \Httpful\Request::get($url)
		->expectsJson()
		->send();
		$data = $response->body;
		// if (!$data) {
		// 	return view('errors.503');
		// }
		// echo $data->nama;
		// echo $data->alamat;
 // print_r($response->body[0]->nama);
 // print_r($response->body);
			// echo "$response->body";

			 return view('result')->with('data',$data);

		
	}
}
