<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneNumberUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PhoneController extends Controller
{
    public function edit(Request $request): View
    {
        return view('phone.edit', [
            'user' => auth()->user(),
        ]);
    }

    public function update(PhoneNumberUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->phone = $request->input('phone');

        $user->save();

        return Redirect::route('phone.edit')->with('status', 'phone-updated');
    }
}
