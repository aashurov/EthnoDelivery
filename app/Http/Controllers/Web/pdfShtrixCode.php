<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use PDF;
use App\tblParcelNewModel;

class pdfShtrixCode extends Controller
{
    public function shtrixCode($id)
    {

        $myTask1 = tblParcelNewModel::find($id);
        // PDF::SetFillColor(191, 191, 191);
        // $width = PDF::pixelsToUnits(58); 
        // $height = PDF::pixelsToUnits(40);
        // $resolution= array($width, $height);
        // PDF::AddPage('L', $resolution);
        // PDF::SetFont('dejavusans ', 'B', 10);
        $style = array(
            'position' => '',
            'align' => 'C',
            'stretch' => false,
            'fitwidth' => true,
            'cellfitalign' => '',
            'border' => true,
            'hpadding' => 'auto',
            'vpadding' => 'auto',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255),
            'text' => true,
            'font' => 'helvetica',
            'fontsize' => 8,
            'stretchtext' => 0
        );



        $pdf = new PDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        PDF::SetPrintHeader(false);
        PDF::SetPrintFooter(false);
        PDF::AddPage('L', array(58, 40));

        PDF::SetFont('dejavusans');
        PDF::SetAutoPageBreak(true, 0);
        PDF::write1DBarcode($myTask1->refNumber, 'EAN13', '5', '5', '100', 30, 0.4, $style, 'N');
        // PDF::write1DBarcode($myTask1->refNumber, 'EAN13', '15', '5', '', 18, 0.4, $style, 'N');

        PDF::lastPage();
        PDF::Output($myTask1->refNumber . '-' . 'Nakladnaya(A4).pdf');

        // PDF::writeHTMLCell($w=55, $h=2, $x='1', $y='1', $html.$html2b.$html3, $border=1, $ln=1, $fill=0, $reseth=false, $align='C', $autopadding=true);
    }
}
