<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): JsonResponse
    {
        Mail::to(config('services.contact.email'))
            ->send(new ContactFormSubmitted($request->validated()));

        return response()->json([
            'message' => "Thanks — your message has been received. We'll be in touch shortly.",
        ]);
    }
}
