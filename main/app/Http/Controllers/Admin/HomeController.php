<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FraudDB;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.dashboard');
    }
    public function table()
    {
        return view('admin.table');
        # code...
    }

    public function organization()
    {
        return view('admin.add_organization');
        # code...
    }

    public function addOrganization(Request $request)
    {
        $pas = time();
        // return $request;
        $org = new User;
        $org->name = $request->company_name;
        $org->contact_no = $request->contact_no;
        $org->mobile = $request->mobile;
        $org->email = $request->email;
        $org->address = $request->address;
        $org->password = Hash::make($pas);
        $org->tmp = $pas;
        $org->save();

        return view('admin.add_organization');
    }

    public function allOrganization()
    {
        $org = User::get();
        return view('admin.all_organization', compact('org'));
        # code...
    }

    public function Database(Request $request)
    {
        $fraud = FraudDB::get();
        return view('admin.database', compact('fraud'));
    }

    public function AddDatabase(Request $request)
    {
        if ($request->method() == 'POST') {
            // return $request;
            $fraud = new FraudDB();
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
        return view('admin.add_database');
    }
}
