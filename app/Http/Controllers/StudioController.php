<?php namespace App\Http\Controllers;

use App\Studios;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudioController extends Controller {

	use AdminChecks;

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$studios = Studios::all();
		$user = $this->checkUserDetails();
		return view( 'admin.studios', compact('studios','user'));
	}

}
