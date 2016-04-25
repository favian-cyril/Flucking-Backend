<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function search(Request $request)
    {
      $this->validate($request, [
        's' => 'required'
      ]);
      $apikey = '48629de65bd1b802324e781a5efe3a46';
      $cur = $request->input('p');
      $type = 'search';
      $name = str_replace(' ','+', $request->input('s'));
      $req = json_decode(file_get_contents('http://api.themoviedb.org/3/search/movie?api_key=' . $apikey . '&query=' . $name . '&page=' . $cur),true);

      return view('search', compact('req', 'cur', 'name', 'type'));
    }
    public function info(Request $request)
    {
      $apikey = '48629de65bd1b802324e781a5efe3a46';
      $id = $request->input('id');
      $info = json_decode(file_get_contents('http://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $apikey),true);
      $cast = json_decode(file_get_contents('http://api.themoviedb.org/3/movie/' . $id . '/credits?api_key=' . $apikey),true);
      $trailer = json_decode(file_get_contents('http://api.themoviedb.org/3/movie/'. $id . '/videos?api_key=' . $apikey),true)['results'];
      if (count($trailer) > 0) {
        $trailer = $trailer[0];
      } else {
        $trailer = null;
      };
      $genre = $info["genres"];
      return view('movie', compact('info', 'cast', 'genre', 'trailer'));
    }
    public function genre(Request $request)
    {
      $apikey = '48629de65bd1b802324e781a5efe3a46';
      $cur = $request->input('p');
      $id = $request->input('g');
      $type = 'genre';
      $req = json_decode(file_get_contents('http://api.themoviedb.org/3/genre/' . $id . '/movies?api_key=' . $apikey . '&page=' . $cur), true);
      return view('search', compact('req', 'cur', 'id', 'type'));
    }
}
