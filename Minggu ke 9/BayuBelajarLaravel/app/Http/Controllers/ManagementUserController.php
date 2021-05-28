<?php

namespace App\Http\Controllers;
use illuminate\Http\request;


class ManagementUserController Extends Controller
{
	public function index(){
		return "Method ini nantinya akan mengembalikan semua data user";
	}
	public function create(){
		return"Method ini nantinya akan di gunakan untuk menamnpilkan form untuk menambah data user.";
	}
	public function store(request $request){
		return"Method ini nantinya akan di gunakan untuk menciptakan data user yang baru.";
	}
	public function show($id){
		return"Method ini nantinyaakan di gunakan untuk mengambil satu data dari user dengan id-".$id;
	}
	public function edit($id){
		return"Method ini natinya akan digunakan untuk menampilkan from untuk mengubah data edit dengan id-".$id;
	}
	public function update(request $request, $id){
		return"Method ini nantinya akan digunakan untuk mengunah data user id-".$id;
	}
	public function destroy($id){
		return"Method ini nantinya digunakan untuk menghapus data user dengan id-".$id;
	}
}