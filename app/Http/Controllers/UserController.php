<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


class UserController extends Controller
{

	public function store(request $request)
	{
		$path=$request->file('image')->store
		('upload');
		echo $path;
		echo "     Your file/s have/s been uploaded. Press Back to get to page.";
	}
}



?>