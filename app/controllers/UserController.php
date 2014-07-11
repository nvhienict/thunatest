<?php

class UserController extends \BaseController  {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	/*
	

	*/
	public function postLogin()
	{
		($remember=Input::has('remember')) ? true: false;
		$auth=Auth::attempt(array(
				"email"=> Input::get('inputEmail'),
				"password"=> Input::get('inputPassword'),
				"role_id"=>2
				),$remember);
		if($auth)	return View::make('users.login_page'); 
		
		else return View::make('users.login_page')->with("messages","Tên tài khoản hoặc mật khẩu không đúng"); 
	}

	public function getLogin()
	{
		return View::make('users.login_page');
	}

	public function getLogout()
	{
		Session::flush();
		return Redirect::to("login");
	}

	public function getRegister()
	{
		return View::make('users.register');
	}

	public function postRegister()
	{
		$rules=array(
			"inputFirstName"=>"required|min:3",
			"inputLastName"=>"required|min:3",
			"inputEmail"=>"required|email",
			"inputPassword"=>"required|min:3",
			"inputWeddingDate"=>"required|date",
		);
		$validator=Validator::make(Input::all(),$rules);
		if($validator->passes())
		{
			if(User::where("email","=",Input::get('inputEmail'))->count()==1)
			{
				return View::make('users.register')
				->with("messages","Email đã tồn tại");
			}
			else
			{
				$user=new User();
				$user->firstname=e(Input::get('inputFirstName'));
				$user->lastname=e(Input::get('inputLastName'));
				$user->email=e(Input::get('inputEmail'));
				$user->password=Hash::make(e(Input::get('inputPassword')));
				$user->weddingdate=e(Input::get('inputWeddingDate'));
				$user->role_id="2";
				$user->save();
				return Redirect::to("login")
				->with("success","Bạn đã đăng kí thành công, hãy Login vào hệ thống");

			}
		}
		else
		{
			$errors=$validator->messages();
			return View::make('users.register')->with("errors",$errors);
		}
	}

	public function getLogin_admin()
	{
		return View::make("users.admin.login_page_admin");
	}

	public function postLogin_admin()
	{

	($remember=Input::has('remember')) ? true: false;
		$auth=Auth::attempt(array(
				"email"=> Input::get('inputEmail'),
				"password"=> Input::get('inputPassword'),
				"role_id"=> 1
				),$remember);
		if($auth)
		{
			Session::put("email",Input::get('inputEmail'));
			return Redirect::to("admin/home-page-admin");
		}	 
		
		else return View::make('users.admin.login_page_admin')->with("messages","Tên tài khoản hay mật khẩu không đúng hoặc bạn ko phải là admin");	
	}
	public function getLogout_admin()
	{
		Session::flush();
		return Redirect::to("admin/login-admin");
	}
}
