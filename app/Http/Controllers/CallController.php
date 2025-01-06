<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Call;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCallRequest;
use App\Http\Requests\UpdateCallRequest;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calls = DB::table('calls')->orderBy('status')->paginate(5);
        return view('call.list',compact('calls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try{
            return view('call.add');
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
                $call = new Call;
                $call->name =  $request->name;
                $call->number =  $request->number;
                $call->status = 0;
                $call->address = $request->address;
                $call->email =  $request->email;
                $call->department =  $request->department;
                $call->description =  $request->description;
                $call->problem =  $request->problem;
                $call->properties =  $request->properties;
                $call->comment =  $request->comment;
                $call->sector =  $request->sector;
                $call->save();
                return redirect()->back()->with('success', 'success');
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
        $calls=DB::table('calls')
        ->select('id','department', 'problem','status')
        ->where('name','LIKE','%'.$search.'%')
        ->orWhere('department','LIKE','%'.$search.'%')
        ->orWhere('problem','LIKE','%'.$search.'%')
        ->orderBy('status','desc')
        ->paginate(5);
        return view('call.list',compact('calls'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function profile($id)
    {
        try{
            $call = Call::find($id);
            return view('call.profile',compact('call'));
        }catch(Exception){
            return redirect()->view('404');
        }
    }

    public function edit($id)
    {
        try{
            $call = Call::find($id);
            return view('call.edit',compact('call'));
        }catch(Exception){
            return redirect()->back()->with('error', 'error');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Call $call)
    {
        try{
            $call->name =  $request->name;
            $call->number =  $request->number;
            $call->status = $request->status;
            $call->email =  $request->email;
            $call->department =  $request->department;
            $call->description =  $request->description;
            $call->problem =  $request->problem;
            $call->properties =  $request->properties;
            $call->sector =  $request->sector;
            $call->save();
            return redirect()->route('call.index');

           }catch(Exception $e){
            return redirect()->back()->with('error', 'Erro');
        }

    }

    public function final(Request $request, Call $call)
    {
        try{
            $call = Call::find($request->id);
            $call->status = $request->status;
            $call->save();
            return redirect()->route('call.index');

           }catch(Exception $e){
            return redirect()->back()->with('error', 'Erro');
        }
    }

    public function search(Request $request)
    {
        $search=trim($request->get('search'));
        $calls=DB::table('calls')
        ->select('id','department', 'description', 'created_at', 'problem','status')
        ->where('name','LIKE','%'.$search.'%')
        ->orWhere('department','LIKE','%'.$search.'%')
        ->orWhere('problem','LIKE','%'.$search.'%')
        ->orderBy('status')
        ->paginate(5);
        return view('call.list',compact('calls'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Call $call, $id)
    {
        $call = Call::find($id);
        $call->status = 4;
        return route("call.list");
    }
}
