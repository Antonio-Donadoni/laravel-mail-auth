<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class GuestController extends Controller
{

  public function index() {

    $comps = Company::all();
    return view('company_index', compact('comps'));
  }

  public function show($id) {

  $comp = Company::findOrFail($id);

  return view('company_show', compact('comp'));
  }
}
