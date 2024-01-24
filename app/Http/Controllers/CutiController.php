<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpWord\TemplateProcessor;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // AMBIL TEMPLATE YANG SUDAH ADA
        $template = new TemplateProcessor('assets/template/templatecuti.docx');

        // SET VALUE TEXT YANG DIBUTUHKAN
        $template->setValues([
            'no_surat' => '21.121.21212',
            'nama' => 'Ridhal Fajri Yz',
            'tanggal' => '24 Januari 2024'
        ]);

        // SET IMAGE TTD
        $template->setImageValue('qrcode', [
            'path' => 'assets/template/qr-code.png',
            'width' => 100,
            'height' => 100,
            'ratio' => false
        ]);

        // KASIH NAMA FILE
        $pathToSave = 'result_surat.docx';

        //SIMPAN 
        $template->saveAs($pathToSave);

        //DOWNLOAD FILE
        return response()->download($pathToSave)->deleteFileAfterSend(true);
        // $templatePath = public_path('assets/template/templatecuti.docx');
        // $template = new TemplateProcessor($templatePath);

        // $imagePath = public_path('assets/template/qr-code.png');
        // $template->setImageValue('qrcode', array('path' => $imagePath, 'width' => 100, 'height' => 100, 'ratio' => false));

        // $pathToSave = 'result_surat.docx';
        // $data = $template->saveAs($pathToSave);
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
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuti $cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuti $cuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuti $cuti)
    {
        //
    }
}
