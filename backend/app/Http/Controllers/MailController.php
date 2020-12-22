<?php

namespace App\Http\Controllers;

use App\Mail\DefaultMail;
use Exception;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class MailController extends BaseController
{
    use ValidatesRequests;

    public function sendMail(Request $request) {
        if ($request->post('hidden_token', null) !== config('app.hidden-token')) {
            throw new Exception('Token not valid');
        }

        if (! $mailFrom = $request->post('mail_from', null)) {
            throw new Exception('Email from missing');
        }
        if (! $mailTo = $request->post('mail_to', null)) {
            throw new Exception('Email to missing');
        }
        if (! $subject = $request->post('subject', null)) {
            throw new Exception('Subject missing');
        }
        if (! $content = $request->post('content', null)) {
            throw new Exception('Content missing');
        }

         Mail::to($mailTo)->send(new DefaultMail('projekti@skupnost-vss.si', $subject, $content));
        return 'true';

    }
}
