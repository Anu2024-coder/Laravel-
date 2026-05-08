<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class demoController extends Controller
{
    // Show form
    public function show(){
        return view('studentform');
    }

    // INSERT (CREATE)
    public function insert(Request $request){
        DB::table('teachers')->insert([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect('/read');
    }

    // READ
    public function read(){
        $data = DB::table('teachers')->get();
        return view('read', compact('data'));
    }

    // EDIT (fetch single record)
    public function edit($id){
        $data = DB::table('teachers')->where('id', $id)->first();
        return view('edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id){
        DB::table('teachers')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

        return redirect('/read');
    }

    // DELETE
    public function delete($id){
        DB::table('teachers')
            ->where('id', $id)
            ->delete();

        return redirect('/read');
    }
}