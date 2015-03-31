<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{	
		$url_mine = 0;
		return View::make('home.home', compact('url_mine'));
	}


	public function postIndex()
	{	
		// Valida campo de URL
		if (Input::get('url')) {

			// gera Url
			$url_mine = substr(md5(time()), 0,5);

			// Salva os dados no banco

			$shortener = new shortener();
			$shortener -> url = Input::get('url');
			$shortener -> url_mine = $url_mine;
			$shortener -> date =  date('Y-m-d');
			$shortener -> save();

	   		return Redirect::to('/')->with('message', 'URL Gerada!')->with('url_mine', $url_mine);
		}else{

			return Redirect::to('/')->with('message', 'Preencha o campo URL!');
		}
	 	
	}

	public function postDesencurta(){

		$url = Input::get('url');

		$urls = DB::table('url_shortened')->where('url', '=', Input::get('url'))->get();

		echo "Sua url está no array <br>" ;
		print_r($urls[0]);
		echo "<br>";
		echo "<a href='http://localhost/shortener/public/'>Voltar <br> </a>";
		die();
	
		return View::make('home.shorted' , compact('urls'));



		// return View::make('home.home')->with('messageurl', 'Busca Bem Sucedida!')->with('url_find', $shortener);


	}

	
}
