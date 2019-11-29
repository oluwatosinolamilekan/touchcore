<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
// use App\Http\Requests\GetFlightRequest;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function test(Request $request)
    {
        $client = new Client();
        $params['headers'] = ['Content-Type' => 'application/json'];
        $queries['json'] = [
                'departure_city' => $request->departure_city,
                'destination_city' => $request->destination_city,
                'departure_date' => $request->departure_date,
                'no_of_adult' => $request->no_of_adult ?? 1,
                'no_of_child' => $request->no_of_child ?? 1,
                'no_of_infant' => $request->no_of_infant ?? 1,
                'calendar' => $request->calendar,
                'preferred_airline_code' => $request->preferred_airline_code ?? 'ANS',
                'cabin' => $request->cabin ?? 'All',
        ];
        $result = $client->post('http://www.ije-api.tcore.xyz/v1/flight/get-all-bookings/v1/flight/search-flight',$queries);
        // $response = $result->send();
        $response = $result->getBody();
        if($response->status == 404){
            dd('kddkd');
        }
        return response()->json($response);

    }
    public function airlines(Request $request)
    {
        $client = new Client();
        $query = $request->name;
        $request = $client->get('http://www.ije-api.tcore.xyz/v1/plugins/airlines-type-ahead/'."%{$query}%");
        $response = json_decode($request->getBody()->getContents());
        $data = array_filter($data);
        $data = collect($data)->where("name","LIKE","%{$query}%")->all();
        return view('flighs.index',compact('data'));
    }

    public function cities()
    {
        $client = new Client();
        $request = $client->get('http://www.ije-api.tcore.xyz/v1/plugins/cities-type-ahead/las');
        $response = $request->getBody()->getContents();
        return response()->json($response);
    }

    public function travel_packages()
    {
        $client = new Client();
        $request = $client->get('http://www.ije-api.tcore.xyz/v1/updates/update-airlines');
        $response = $request->getBody()->getContents();
        return response()->json($response);

    }

}
