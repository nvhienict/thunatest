<?php

class VendorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make("users.admin.home_page_admin");
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make("users.admin.add_vendor");
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules= array(
		"inputName"=>"required|min:3",
		"inputAddress"=>"required|min:6",
		"inputAboutUs"=>"required|min:10",
		'inputImage'  => 'required|image'
		);
		$validator=Validator::make(Input::all(),$rules);
		if($validator->passes())
		{
			if(Vendor::where("name","=",Input::get('inputName'))->count()==1)
			{
				return View::make('users.admin.add_vendor')
				->with("messages","Vendor đã tồn tại");
			}
			else
			{
				$file = Input::file('inputImage');
			   	$destinationPath    = 'images/'; // The destination were you store the image.
			   	$filename           = $file->getClientOriginalName();
			   	$upload_success     = $file->move($destinationPath, $filename);
			   	$path=$destinationPath.$filename;
				$vendor=new Vendor();
				$vendor->name=e(Input::get('inputName'));
				$vendor->address=e(Input::get('inputAddress'));
				$vendor->website=e(Input::get('inputWebsite'));
				$vendor->blog=e(Input::get('inputBlog'));
				$vendor->slogan=e(Input::get('inputSlogan'));
				$vendor->about_us=e(Input::get('inputAboutUs'));
				$vendor->id_location=Input::get('location');
				$vendor->id_category=Input::get("category");
				$vendor->avatar=$path;
				$vendor->save();
				return Redirect::to("admin/home-page-admin")
				->with("success","Bạn đã đăng kí thành công, hãy Login vào hệ thống");

			}
		}
		else
		{
			$errors=$validator->messages();
			return View::make('users.admin.add_vendor')
			->with("errors",$errors);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vendor=Vendor::where("id","=",$id)->get()->first();
		return View::make("users.admin.edit_vendor")->with("vendor",$vendor);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules= array(
		"inputName"=>"required|min:3",
		"inputAddress"=>"required|min:6",
		"inputAboutUs"=>"required|min:10",
		);
		$validator=Validator::make(Input::all(),$rules);
		if($validator->passes())
		{
			if(Input::get('inputHiddenName')!=Input::get('inputName'))
			{
				if(Vendor::where("name","=",Input::get('inputName'))->count()==1)
				{
					$vendor=Vendor::where("id","=",$id)->get()->first();
					return View::make("users.admin.edit_vendor")
					->with("messages","Vendor đã tồn tại")->with("vendor",$vendor);
				}
			}
			if(Input::hasfile('inputImage'))
			{
				$file = Input::file('inputImage');
			   	$destinationPath    = 'images/'; // The destination were you store the image.
			   	$filename           = $file->getClientOriginalName();
			   	$upload_success     = $file->move($destinationPath, $filename);
			   	$path=$destinationPath.$filename;
			}
			else $path=Input::get("inputHiddenImage");
			$vendor=Vendor::find($id);
			$vendor->name=e(Input::get('inputName'));
			$vendor->address=e(Input::get('inputAddress'));
			$vendor->website=e(Input::get('inputWebsite'));
			$vendor->blog=e(Input::get('inputBlog'));
			$vendor->slogan=e(Input::get('inputSlogan'));
			$vendor->about_us=e(Input::get('inputAboutUs'));
			$vendor->id_location=Input::get('location');
			$vendor->id_category=Input::get("category");
			$vendor->avatar=$path;
			$vendor->save();
        	return Redirect::to("admin/home-page-admin");
		}
		else
		{
			$errors=$validator->messages();
			$vendor=Vendor::where("id","=",$id)->get()->first();
			return View::make('users.admin.edit_vendor')
			->with("vendor",$vendor)
			->with("errors",$errors);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Vendor::destroy($id);
		return Redirect::to('admin/home-page-admin');
	}


}
