<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Company;
use App\Mail\UserAction;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


  public function create() {

    return view('company_form');

  }

  public function store(Request $request) {

    $data = $request -> all();
    Company::create($data);
    // 
    // $action = 'CREATE';
    // $user = Auth::user();

    // Mail::to('admin@thissite.com')->send(new UserAction($user, $comp, $action));

    return redirect() -> route ('company-index');
  }

  public function destroy($id) {

  $comp = Company::findOrFail($id);
  $comp -> delete();
  $action = 'DELETE';
  $user = Auth::user();
  Mail::to('admin@thissite.com')->send(new UserAction($user, $comp, $action));

  return redirect() -> route ('company-index');
  }

  public function edit($id) {

  $comp = Company::findOrFail($id);
  return view('company_edit', compact('comp'));
  }

  public function update($id, Request $request) {

  $data = $request -> all();
  $comp = Company::findOrFail($id);
  $comp -> update($data);

  $action = 'EDIT';
  $user = Auth::user();
  Mail::to('admin@thissite.com')->send(new UserAction($user, $comp, $action));

  return redirect() -> route ('company-index');
  }
}
