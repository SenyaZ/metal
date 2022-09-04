<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(\App\Http\Requests\Mail $req){

        $data = $req->all();
        $to = 'arseniyzenzerya@gmail.com';
        $subject = 'Новый Заказ';
        $message = 'Имя: ' .$data['name'] ."\n". 'Номер телефона: '. $data['number'];
        $headers = 'From: metalkonst@in.ua' . "\r\n" .
            'Reply-To: metalkonst@in.ua' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        return back()->with('success', 'Заявка успешно отправлена');
    }
}
