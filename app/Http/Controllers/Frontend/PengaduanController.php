<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengaduan;

class PengaduanController extends Controller
{
    public function pengaduan (Request $request)
    {
    	$pengaduan = new Pengaduan;
    	$pengaduan->nama_pelapor = $request->namaPelapor;
    	$pengaduan->alamat_pelapor = $request->alamatPelapor;
    	$pengaduan->email_pelapor = $request->emailPelapor;
    	$pengaduan->tlp_pelapor = $request->tlpPelapor;
    	$pengaduan->nama_pasien = $request->namaPasien;
    	$pengaduan->kelamin_pasien = $request->kelaminPasien;
    	$pengaduan->umur_pasien = $request->umurPasien;
    	$pengaduan->alamat_pasien = $request->alamatpasien;
    	$pengaduan->email_pasien = $request->emailPasien;
    	$pengaduan->tlp_pasien = $request->tlpPasien;
    	$pengaduan->nama_product = $request->product;
    	$pengaduan->no_notifikasi = $request->notifikasi;
    	$pengaduan->ukuran_kemasan = $request->kemasan;
    	$pengaduan->no_batch = $request->batch;
    	if ($request->krim != null){
    		$pengaduan->bentuk_sediaan = 'cream';
    	} elseif ($request->gel != null){
    		$pengaduan->bentuk_sediaan = 'gel';
    	} elseif ($request->cair != null){
    		$pengaduan->bentuk_sediaan = 'cair';
    	} elseif ($request->kental != null){
    		$pengaduan->bentuk_sediaan = 'cairan kental';
    	} elseif ($request->aerosol != null){
    		$pengaduan->bentuk_sediaan = 'aerosol';
    	} elseif ($request->padat != null){
    		$pengaduan->bentuk_sediaan = 'padat';
    	} elseif ($request->lain != null){
    		$pengaduan->bentuk_sediaan = $request->lain;
    	}
    	$pengaduan->produsen = $request->produsen;
    	$pengaduan->distributor = $request->distributor;
    	$pengaduan->tgl_kejadian = $request->tgl;
    	$pengaduan->efek = $request->efek;

        $fileName = time().'.'.$request->foto->getClientOriginalExtension(); 
        $request->foto->move(public_path('foto'), $fileName);
        $pengaduan->foto = $fileName; 

        $pengaduan->tindakan = $request->tindakan;
        // dd($pengaduan);
        $pengaduan->save();

        $status = 200;
        $message = "Terimakasih, pengaduan anda akan kami tindak lanjuti";

        return redirect()->back()->with(['flash_status' => 200,'flash_message' => 'Berhasil Menyimpan Data']);

    }
}
