<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{   
    public function beranda(){
        
        $user = Auth::user();
        $categories = $user->fav_categories;
        $base_url = "https://berita-indo-api.vercel.app/v1/cnn-news/";
        $client = new Client();
        $indexNews = [];

        try {
            foreach ($categories as $category) {
                $response = $client->get("{$base_url}{$category}");
                $data = json_decode($response->getBody(), true);
                if (isset($data['data'])) {
                    $indexNews = array_merge($indexNews, $data['data']);
                }
            }

            // Tampilkan hasil (bisa dikembalikan sebagai JSON atau dikirim ke view)
            return view('news.beranda', ['news'=>$indexNews]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        
    }
    public function berita()
    {
        $topNews = Http::get('https://berita-indo-api.vercel.app/v1/antara-news/top-news')->json();
        $terkini = Http::get('https://berita-indo-api.vercel.app/v1/antara-news/terkini')->json();
        $politik = Http::get('https://berita-indo-api.vercel.app/v1/antara-news/politik')->json();
        $hukum = Http::get('https://berita-indo-api.vercel.app/v1/antara-news/hukum')->json();
        $sepakbola = Http::get('https://berita-indo-api.vercel.app/v1/antara-news/sepakbola')->json();
        $lifestyle = Http::get('https://berita-indo-api.vercel.app/v1/antara-news/lifestyle')->json();
        $tekno = Http::get('https://berita-indo-api.vercel.app/v1/antara-news/tekno')->json();
        
        return view('news.berita',[
            'topNews' => $topNews,
            'terkini' => $terkini,
            'politik' => $politik,
            'hukum' => $hukum,
            'sepakbola' => $sepakbola,
            'lifestyle' => $lifestyle,
            'tekno' => $tekno
        ]);   
    }
    public function profil()
    {

    }
    // function lainnya
}
