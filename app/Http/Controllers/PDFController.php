<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade as PDF;
use App\Models\PDF;

class PDFController extends Controller
{
    public function exportpdf()
    {
        $data = ['title' => 'Welcome to Laravel PDF Export'];
        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('laravel-pdf.pdf');
    }

    public function downloadPDF()
    {
        $data = ['title' => 'TIKET KONSER LIVEWIRE FESTIVAL'];
        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('tiket-konser.pdf');
    }
}
