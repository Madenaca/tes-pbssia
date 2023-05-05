<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Karyawan extends Controller
{
    // buat fungsi index (tampil data karyawan)
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    function index() {
        // echo "Halaman Tampil Data Karyawan";
        // echo env("API_URL");
        $url = env("API_URL")."view";

        // ambil service "get" dari server
        $request = $this->client->get($url);
        // menampilkan hasil
        $response = $request->getBody();
        
        // tampilkan data
        // foreach (json_decode($response)->karyawan as $hasil) {
        //     echo $hasil->nama_karyawan."<br>";
        // }
        // echo $response;
        $data["result"] = json_decode($response);

        // panggil view "vw_karyawan"
        return view("vw_karyawan", $data);
    }
}
