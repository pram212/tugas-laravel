<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index(){
    	$pertanyaan = DB::table('pertanyaan')->get();
    	// dd($pertanyaan);
    	return view('pertanyaan', compact('pertanyaan'));
    }

    public function create(){
    	return view('create');
    }

    public function store(Request $request){
    	$request->validate([
		    'judul' => 'required',
		    'isi' => 'required'
		]);

    	$query = DB::table('pertanyaan')->insert(
		    ['judul' => $request["judul"], 'isi' => $request["isi"]]
		);

		return redirect('/pertanyaan')->with('success', 'Yes, pertanyaanmu sudah diposting');
    }

    public function show($id){
    	$post = DB::table('pertanyaan')->where('id', $id)->first();
    	// dd($post);
    	return view('show', compact('post'));
    }

    public function edit($id){
    	$post = DB::table('pertanyaan')->where('id', $id)->first();
    	// dd($post);
    	return view('edit', compact('post'));
    }

    public function update($id, Request $request){
    	$request->validate([
		    'judul' => 'required',
		    'isi' => 'required'
		]);
    	$query = DB::table('pertanyaan')
              ->where('id', $id)
              ->update([
              	'judul' => $request['judul'],
              	'isi' => $request['isi']
              ]);
        return redirect('/pertanyaan')->with('success', 'Yes, pertanyaanmu sudah diperbarui');
    }

    public function destroy($id){
    	$query = DB::table('pertanyaan')->where('id', $id)->delete();
    	return redirect('/pertanyaan')->with('success', 'Yes, pertanyaan sudah dihapus');
    }

}
