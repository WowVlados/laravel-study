<?php

namespace App\Http\Controllers;

use App\Mail\NewContact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {

                $mail = new NewContact(
                    $req->get('name'),
                    $req->get('email'),
                    $req->get('number'),
                );

                Mail::to('info@test.com')->send($mail);

                session()->flash('success', trans('messages.report.success'));

                return redirect()
                    ->back();

    }
}
