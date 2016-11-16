<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class tes extends Controller
{
  
  public function index(){

 $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
$context = stream_context_create($opts);
$header = file_get_contents('http://localhost/sit/public/api/siswa',false,$context);
$json = decode_json($header);                        
	return $json;

}
}
