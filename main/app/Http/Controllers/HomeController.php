<?php

namespace App\Http\Controllers;

use App\Models\FraudDB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function Database()
    {
        $fraud = FraudDB::where('user_id', Auth::user()->id)->get();
        return view('database', compact('fraud'));
    }

    public function AddDatabase(Request $request)
    {
        if ($request->method() == 'POST') {
            // return $request;
            $fraud = new FraudDB();
            $fraud->user_id = Auth::user()->id;
            $fraud->name = $request->name;
            $fraud->mobile = $request->mobile;
            $fraud->aadhar = $request->aadhar;
            $fraud->pan = $request->pan;
            $fraud->description = $request->description;
            $fraud->type = $request->typeof;
            $fraud->address = $request->address;

            $fir = $request->file('fir');
            $letter = $request->file('letter');

            $t = time();
            $fir->getClientOriginalExtension();
            $imageFir = $t . str_replace(' ', '', $fir->getClientOriginalName());
            // $path = 'documents/PICTURES/'.$cpvForm->id;
            $fir_path = 'documents/fir';
            $fir->move($fir_path, $imageFir);

            $letter->getClientOriginalExtension();
            $imageLetter = $t . str_replace(' ', '', $letter->getClientOriginalName());
            // $path = 'documents/PICTURES/'.$cpvForm->id;
            $letter_path = 'documents/letter';
            $letter->move($letter_path, $imageLetter);

            $fraud->fir = $fir_path . '/' . $imageFir;
            $fraud->letter = $letter_path . '/' . $imageLetter;
            $fraud->save();
        }
        return view('add_database');
    }

    
}
