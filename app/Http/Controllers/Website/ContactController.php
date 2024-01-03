<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('website.contact');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'nullable|email',
            'contact' => 'nullable',
            'address' => 'nullable',
            'company' => 'nullable',
            'queries' => 'nullable'
        ]);
        try {
            DB::beginTransaction();
            $data = $request->all();
            Contact::create($data);
            DB::commit();
            return redirect()->back()->with('flash_success', 'Your contact has been saved successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('flash_error', 'Oops! something went wrong.');
        }
        dd($request->all());
    }
}
