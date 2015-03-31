<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*
 * Define as rotas para cada controlador 
 */

    Route::controller('/', 'HomeController');
	
   


/*
 * Define as rotas para cada controlador do Blog.
 */
    Route::controller('/', 'HomeController');



/*
 * login e logar antigos
 */
Route::get('login', ['as'=>'login', function() {
	return View::make('gestor.login.login');
}]);


Route::post('login', array('before' => 'csrf', function() {

		// Opção de lembrar do usuário
        $remember = false;
        if(Input::get('Remember'))
        {
            $remember = true;
        }
        
        // Autenticação
        if (Auth::attempt(array(
            'email' => Input::get('UserLogin'), 
            'password' => Input::get('UserPassword')
            ), $remember))
        {	
        	
            return Redirect::to('gestor');
            
        }	
        else
        {
        	return Redirect::to('login')->with('message', 'Credenciais Incorretas!');
        }  
}));





