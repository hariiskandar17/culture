<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return back();
    }

    public function send(Request $request)
    {
        try {
            // email => template html 
            Mail::send('email', ['nama' => $request->nama, 'pesan' => $request->pesan, 'email' => $request->email], function ($message) use ($request) {
                $message->subject($request->judul);
                // from(dari email,namanya)
                $message->from($request->email, $request->name);
                $message->to('abangabong100@gmail.com');
            });
            return back()->with('alert-success', "
            <script>
                Swal.fire(
                    'Berhasl!',
                    'Pesan anda telah tersampaikan',
                    'success'
                )
            </script>
            ");
        } catch (Exception $e) {
            return response(['status' => false, 'errors' => $e->getMessage()]);
        }

        // Mail::to('abangabong100@gmail.com')
        //     ->cc('abangabong100@gmail.com')
        //     ->bcc('abangabong100@gmail.com')
        //     ->send(new TestMail());

        // if (Mail::failures()) {
        //     return response(['status' => false, 'errors' => 'Gagal']);
        // }
    }
}
