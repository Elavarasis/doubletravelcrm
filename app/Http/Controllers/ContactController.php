<?php namespace App\Http\Controllers;
use App\Contact;
use App\Leka;
use Input;
use Validator;
use Redirect;
use Request;
use Session;
use DB;
//use Illuminate\Support\Facades\Input;
class ContactController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Contact Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders contacts details
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		
	}

	/**
	 * Show the contact details dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$reg = Leka::find('amma');
		$reg1 = DB::table('leka')->select('id')->where('name', 'rajanraju1')->first();
		if($reg1){}else{
			DB::table('leka')->insertGetId(
					['name' => 'rajanraju1']
				);
		}
		 //$data = Leka::all();
		echo "<pre>";
        var_dump($reg1 ); echo "</pre>";exit;
		$contacts = Contact::all();
		return view('contact/contact_listing')->with('contacts', $contacts);
	}
	/**
	 * Show the contact details dashboard to the user.
	 *
	 * @return Response
	 */
	public function add()
	{
		return view('contact/add_contact');
	}
	/**
	 * Show the contact details dashboard to the user.
	 *
	 * @return Response
	 */
	public function add_contact( )
	{
		$contacts = new Contact;
		$contacts->name = Input::get('name');
		$contacts->email = Input::get('email');
		$contacts->address = Input::get('address');
		$contacts->save();
		$file = array('image' => Input::file('image'));
		$rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
		$validator = Validator::make($file, $rules);
		if ($validator->fails()) {
			return Redirect::to('contacts/add')->withInput()->withErrors($validator);
		}
		else {
			if (Input::file('image')->isValid()) {
			  $destinationPath = 'uploads'; // upload path
			  $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
			  $fileName = rand(11111,99999).'.'.$extension; // renameing image
			  Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
			  Session::flash('success', 'Upload successfully'); 
			  return Redirect::to('contacts');
			}
			else {
			  Session::flash('error', 'uploaded file is not valid');
			  return Redirect::to('contacts');
			}
		}	
		
	
		
		$contacts = Contact::all();
		return view('contact/contact_listing')->with('contacts', $contacts);
	}
	public function delete($id)
	{
		//$contacts = new Contact;
		$contacts = Contact::find($id);
		$contacts->delete();
		$contacts = Contact::all();
		return view('contact/contact_listing')->with('contacts', $contacts);
	}
	
	
	
	
	
public function upload() {	//echo "sss"; exit;
  $file = array('image' => Input::file('image'));
  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    return Redirect::to('contacts/add')->withInput()->withErrors($validator);
  }
  else {
    if (Input::file('image')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('contacts');
    }
    else {
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('contacts');
    }
  }
}



}
