<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class VeniController extends Controller
{
    public function mau($id)
    {
        dd($id); // Cetak nilai variabel $id ke konsol
        return view('index', compact('id'));
    }

    public function ga($id)
    {
        dd($id);
        return view('index', compact('id'));
    }

    public function input($id)
    {
        try {
            $hasil = DB::insert('INSERT into perasaan (value) values (?)', [$id]);
            return view('index', compact('hasil'));
        } catch (\Exception $e) {
            return "Terjadi kesalahan: " . $e->getMessage();
        }
    }

    public function thank()
    {
        try {
            $existingRecord = DB::select('SELECT * from terimakasih where id = 1');

            if ($existingRecord) {
                DB::update('UPDATE terimakasih set value = "Terimakasih ya sayang" where id = 1');
            } else {
                DB::insert('INSERT into terimakasih (id, value) values (1, "Terimakasih ya sayang")');
            }
            return view('home');
        } catch (\Exception $e) {
            return "Terjadi kesalahan: " . $e->getMessage();
        }
    }
}
