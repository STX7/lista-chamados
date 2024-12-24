<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Call;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        for($i = 1; $i <= 12; $i++){
            $callsG[$i] = DB::table('calls')->whereMonth('created_at', "$i")->count();

        }
        for($i = 1; $i <= 12; $i++){
            $certificatesG[$i] = DB::table('certificates')->whereMonth('created_at', "$i")->count();

        }

        $callsM = DB::table('calls')->whereMonth('created_at', date('m'))->count();

        $callsY = DB::table('calls')->whereYear('created_at', date('Y'))->count();
        $certificatesM = DB::table('certificates')->whereMonth('created_at', date('m'))->count();
        $certificatesY = DB::table('certificates')->whereYear('created_at', date('Y'))->count();
        return view('dashboard',['dataB'=> json_encode($callsG),'dataA'=> json_encode($certificatesG)] , compact('callsY','certificatesY','callsM','certificatesM','callsG','certificatesG'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
