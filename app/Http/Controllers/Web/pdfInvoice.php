<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use PDF;
use App\tblParcelNewModel;
use Carbon\Carbon;
// use app\Providers\AppServiceProvider;

class pdfInvoice extends Controller
{
    public function pdf($id)
    {

        $myTask1 = tblParcelNewModel::find($id);
        $deliveryDate = date('Y');
        $date = date('d-m-Y г.', strtotime($myTask1->parcelCreateDate));
        PDF::AddFont('dejavusans', '', 'dejavusans.php');
        PDF::SetFont('dejavusans', '', 10, '', false);
        PDF::SetTitle($myTask1->refNumber . '-' . 'Накладная');
        PDF::AddPage('L', 'A5');
        PDF::Write(0, 'Накладная №: ' . $myTask1->refNumber, '', 0, 'C', true, 0, false, false, 0);
        PDF::SetFillColor(191, 191, 191);
        PDF::SetFont('dejavusans ', 'B', 10);
        PDF::Cell(115, 5, 'ИНФОРМАЦИЯ ОБ ОТПРАВИТЕЛЕ', 1, '0', 'C', 1, 0, '', '', true);
        PDF::Cell(74, 5, 'ИНФОРМАЦИЯ О ПЛАТЕЖЕ', 1, '0', 'C', 1, 0, '', '', true);
        PDF::Ln();
        PDF::SetFont('dejavusans ', '', 10);
        PDF::SetFillColor(255, 255, 255);
        PDF::Cell(115, 5, 'Компания: ' . $myTask1->senderCompanyName, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Cell(74, 5, 'Стоимость: ' . $myTask1->parcelPriceRU . ' рубль, ' . $myTask1->parcelPriceUZS . ' сум', 1, '0', 'L', 1, 0, '', '', true);
        $txt = date("m/d/Y h:m:s");

        PDF::Ln();
        PDF::SetFillColor(255, 255, 255);
        PDF::Cell(115, 5, 'ФИО отправителя: ' . $myTask1->senderUserName, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Cell(74, 5, 'Тариф: ' . $myTask1->parcelPlanName,  1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();
        PDF::SetFillColor(255, 255, 255);
        PDF::Cell(115, 5, 'Контакты: ' . $myTask1->senderUserPhone, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Cell(74, 5, 'Плательшик: ' . $myTask1->parcelPayerName, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();
        PDF::SetFillColor(255, 255, 255);
        PDF::Cell(115, 5, 'Адрес: ' . $myTask1->senderUserAdress, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Cell(74, 5, 'Дата отправки: ' . $date, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();


        PDF::SetFillColor(191, 191, 191);
        PDF::SetFont('dejavusans ', 'B', 10);
        PDF::Cell(189, 5, 'ИНФОРМАЦИЯ О ПОЛУЧАТЕЛЕ', 1, '0', 'C', 1, 0, '', '', true);
        PDF::Ln();
        PDF::SetFont('dejavusans ', '', 10);
        PDF::SetFillColor(255, 255, 255);
        PDF::Cell(189, 5, 'Компания: ' . $myTask1->recipientCompanyName, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();
        PDF::Cell(189, 5, 'ФИО получателя: ' . $myTask1->recipientUserName, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();
        PDF::Cell(189, 5, 'Контакты: ' . $myTask1->recipientUserPhone, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();
        PDF::Cell(189, 5, 'Адрес: ' . $myTask1->recipientUserAdress, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();

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

        PDF::SetFillColor(191, 191, 191);
        PDF::SetFont('dejavusans ', 'B', 10);
        PDF::Cell(189, 5, 'ИНФОРМАЦИЯ О ПОСЫЛКЕ', 1, '0', 'C', 1, 0, '', '', true);
        PDF::SetFont('dejavusans ', '', 10);
        PDF::SetFillColor(255, 255, 255);
        PDF::Ln();
        PDF::Cell(189, 5, 'Вес посылки (кг): ' . $myTask1->parcelWeight, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();
        PDF::Cell(189, 5, 'Посылка (название): ' . $myTask1->parcelDescription, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();
        PDF::Cell(189, 5, 'Тип доставки: ' . $myTask1->parcelDeliveryTypeName, 1, '0', 'L', 1, 0, '', '', true);
        PDF::Ln();
        PDF::Ln();
        PDF::Write(0, 'Подпись отправителя ' . $date . '  _________', '', 0, 'L', true, 0, false, false, 0);

        PDF::Ln();
        PDF::Write(0, 'Сотрудник принял ФИО: ' . $myTask1->senderManagerName . '  ___________', '', 0, 'L', true, 0, false, false, 0);
        PDF::Ln();
        PDF::Write(0, 'Подпись получателя  ____ - __________ ' . $deliveryDate . ' г.' . ' ' . '_________', '', 0, 'L', true, 0, false, false, 0);
        PDF::Ln();
        if ($myTask1->parcelCourierName == 0) {
            PDF::Write(0, 'Курьер доставил ФИО:', '', 0, 'L', true, 0, false, false, 0);
        } else {
            PDF::Write(0, 'Курьер доставил ФИО: ' . $myTask1->parcelCourierName . '        (подпись)', '', 0, 'L', true, 0, false, false, 0);
        }
        PDF::Ln();
        PDF::write1DBarcode($myTask1->refNumber, 'EAN13', '150', '95', '', 18, 0.4, $style, 'N');
        PDF::writeHTMLCell(0, 0, '150', '120', 'www.ethno.uz', 0, 0, false, "L", true);
        PDF::lastPage();
        PDF::Output($myTask1->refNumber . '-' . 'Nakladnaya(A5).pdf');
    }
}
