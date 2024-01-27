<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        ddd($newsletter);

        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => "Your email will not be added to the newsletter's list."
            ]);
        }

        return redirect()->back()->withSuccess("You're no in newsletter!");
    }
}
