<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Feedback;
use App\Models\CompanyContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $companyContacts = CompanyContact::first(); // Получаем контакты компании
        return view('contacts', compact('companyContacts'));
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->route('contacts')->with('success', 'Сообщение отправлено!');
    }
}