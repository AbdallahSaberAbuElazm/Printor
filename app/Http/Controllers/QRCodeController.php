<?php

namespace App\Http\Controllers;
use QrCode;

class QRCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function simpleQr()
    {
        $qr = QrCode::class;
       return $qr::size(300)->generate('A basic example of QR code!');
    }

    public function colorQr()
    {
        $qr = QrCode::class;
        return $qr::size(300)
                     ->backgroundColor(255,55,0)
                     ->generate('Color QR code example');
    }

    public function imageQr()
    {
        $qr = QrCode::class;
        $image = $qr::format('png')
                 ->merge('', 0.5, true)
                 ->size(500)->errorCorrection('H')
                 ->generate('Image qr code example');
        return response($image)->header('Content-type','image/png');
    }

    public function emailQrCode()
    {
        $qr = QrCode::class;
       return $qr::size(500)
                ->email('laratutorials@gmail.com', 'Welcome to Lara Tutorials!', 'This is !.');
    }

    public function qrCodePhone()
    {
        $qr = QrCode::class;
        return $qr::phoneNumber('111-222-6666');
    }

    public function textQrCode()
    {
        $qr = QrCode::class;
        return $qr::SMS('111-222-6666', 'Body of the message');
    }
}
