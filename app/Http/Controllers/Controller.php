<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function scrap()
    {
        $detail = [];
        // $url = 'https://www.jobstreet.co.id/id/dwida-jaya-tama-jobs';
        $url = 'https://www.jobstreet.co.id/id/pt-mayora-indah-tbk-jobs';
        $client = new Client(HttpClient::create(['timeout' => 2]));
        $crawler = $client->request('GET', $url);
        $index = 0;
        $crawler->filter('div[class="z1s6m00 _1hbhsw69y _1hbhsw68u _1hbhsw67e _1hbhsw67q"] article')->each(function (Crawler $node) use(&$index, &$detail) {
            $detail[$index]['url_detail'] = $node->children()->filter('h1[class="z1s6m00 _1hbhsw64y y44q7i0 y44q7i3 y44q7i21 y44q7ii"] a')->attr('href');
            $index++;
        });
        dd($detail);
       die('1');
    }
}
