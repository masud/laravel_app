<?php

class UserController extends BaseController{

	// gets register view page
	public function getCreate(){
		return View::make('user.register');
	}

	// gets login view page
	public function getLogin(){
		return "LOgin page";	
	}

	public function postCreate(){

		$validate =  Validator::make(Input::all(), array(
			'username' => 'required|unique:users|min:4',
			'pass1' => 'required|min:6',
			'pass2' => 'required|same:pass1',

			));

		if($validate->fails()){
			return Redirect::route('getCreate')->withErrors($validate)->withInput();
		}
		else{
			
			$user = new User();
			$user->username = Input::get('username');
			$user->password = Hass::make(Input::get('password'));

			if($user){
				return Rediect::route('home')->with('success', 'You registerd successfully, you can now login');
			}
			else{
				return Rediect::route('home')->with('fail', 'An error occured while createing the user, Please try again');
			}
		}

	}

	public function postLogin(){

	}
}