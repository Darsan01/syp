<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    
    public function sendMail()
    {
        $details = [
            'title' => 'Testing Email',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam facilis atque mollitia esse alias, beatae culpa ullam nobis reprehenderit temporibus impedit. Fugiat quis blanditiis praesentium! Temporibus quia voluptatibus dolores consequatur!'
        ];

        // Send email using Laravel Mail facade
        Mail::send('emails.test', $details, function($message) {
            $message->to('recipient@example.com', 'John Doe')
                    ->subject('Test Email');
        });

        return "Email sent successfully";
    }
}

