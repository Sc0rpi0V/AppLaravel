<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\AddressUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function edit(Request $request): View
    {
        return view('address.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's address information.
     */
    public function update(AddressUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->address = $request->input('address');
        $user->address2 = $request->input('address2');
        $user->city = $request->input('city');
        $user->postalcode = $request->input('postalcode');
        $user->country = $request->input('country');

        $user->save();

        return Redirect::route('address.edit')->with('status', 'address-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
