<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use GuzzleHttp\Client;
use App\Team;

Route::get('/', function () {
    $client = new Client([
        'base_uri' => 'https://www.openligadb.de',
        'timeout' => 2.0
    ]);

    $year = date('Y');

    //next match
    $response = $client->request('GET', 'api/getcurrentgroup/bl1');
    $currentGroup = json_decode($response->getBody()->getContents());
    $nextGameGroup = $currentGroup->GroupOrderID +1;

    $response = $client->request('GET', "api/getmatchdata/bl1/{$year}/{$nextGameGroup}");

    $nextMatches = json_decode($response->getBody()->getContents());

    //All matches
    $response = $client->request('GET', "api/getmatchdata/bl1/{$year}");
    $allMatches = json_decode($response->getBody()->getContents());


    //Win/loss Ratio
    $teamsRatio = Team::winLossRatio($allMatches);


    return view('home', compact('nextMatches', 'nextGameGroup', 'allMatches', 'teamsRatio'));
});
