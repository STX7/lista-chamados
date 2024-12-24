<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = DB::table('certificates')->paginate(5);
        return view('certificate.list',compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try{
            return view('certificate.add');
        }catch(Exception $e){
            return view('fail');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->name == null){
            return redirect()->back()->with('error', 'error');
        }else {
            try {
                $certificate = new Certificate;
                $certificate->name =  $request->name;
                $certificate->surname =  $request->surname;
                $certificate->status = $request->status;
                $certificate->identification = $request->identification;
                $certificate->email =  $request->email;
                $certificate->number =  $request->number;
                $certificate->cnpj =  $request->cnpj;
                $certificate->validity =  date('d-m-Y', strtotime('+1 year'));
                $certificate->save();
                return redirect()->route('certificate.list')->with('success', 'Sucesso.');
            } catch (Exception) {
                return redirect()->back()->with('error', 'error');
            }
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $search=trim($request->get('search'));
        $certificates=DB::table('certificates')
        ->select('id','name', 'surname','number')
        ->where('name','LIKE','%'.$search.'%')
        ->orWhere('surname','LIKE','%'.$search.'%')
        ->orWhere('number','LIKE','%'.$search.'%')
        ->orderBy('status','desc')
        ->paginate(5);
        return view('certificate.list',compact('certificates'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $certificate = Certificate::find($id);
            return view('certificate.edit',compact('certificate'));
        }catch(Exception){
            return redirect()->back()->with('error', 'error');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        try{
            $certificate->name =  $request->name;
            $certificate->surname =  $request->number;
            $certificate->status = $request->status;
            $certificate->validity = $request->address;
            $certificate->email =  $request->email;
            $certificate->department =  $request->department;
            $certificate->description =  $request->description;
            $certificate->problem =  $request->problem;
            $certificate->comment =  $request->comment;
            $certificate->sector =  $request->sector;
            $certificate->save();
            return redirect()->route('certificate.list')->with('success','Sucesso.');

           }catch(Exception $e){
            return redirect()->back()->with('error', 'Erro');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        $certificate->status = 4;
        return route("certificate.list");
    }


}
