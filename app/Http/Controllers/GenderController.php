<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenderUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class GenderController extends Controller
{
    public function edit(Request $request): View
    {
        return view('gender.edit', [
            'user' => auth()->user(),
        ]);
    }

    public function update(GenderUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        
        $user->gender = $request->input('gender', null); 
        
        $user->save();
        
        return Redirect::route('gender.edit')->with('status', 'gender-updated');
    }
    
    
}
