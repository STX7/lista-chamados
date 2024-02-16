<?php

namespace App\Http\Controllers;

use App\Models\call;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatecallRequest;
use Illuminate\Support\Facades\DB;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('callList', [
            'call' => DB::table('calls')->paginate(10)
        ]);
    }
    public function intro()
    {
        return view('call');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('call');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, call $call)
    {
        try {
            $call->create([
                'name'=>$request->name,
                'department'=>$request->department,
                'sector'=>$request->sector,
                'problem'=>$request->problem,
                'description'=>$request->description,
                'contact'=>$request->contact,
                'status'=>0,
                'address'=>$request->address,
            ]);
            return view('success');
        }catch (\Exception $e){
            return view('fail');
        }
    }

    public function show()
    {

    }

    public function edit(String $id)
    {
        $call = call::findOrFail($id);
        return view('callEdit',compact('call'));
    }
    public function update(Request $request, call $call)
    {
        $call->name = $request->name;
        $call->department = $request->department;
        $call->sector = $request->sector;
        $call->description = $request->description;
        $call->problem = $request->problem;
        $call->contact = $request->contact;
        $call->status = $request->status;
        $call->address = $request->address;

        if (!$call->save()) {
            return redirect()->back()->with('error', 'Desculpe, Aconteceu um problema ao atualizar produto.');
        }
        return redirect()->route('call.index');
    }
    public function destroy(call $call)
    {
        //
    }
}
