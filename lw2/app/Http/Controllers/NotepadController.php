<?php

namespace App\Http\Controllers;

use App\Models\Notepad;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\View\View;

class NotepadController extends Controller
{
    public function index(): View
    {
        $notepads = Notepad::all();

        return view('notepads.index', compact('notepads'));
    }

    public function create(): View
    {
        return view('notepads.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Notepad::create($request->all());
        
        return redirect()->route('notepads.index')->with('success', 'notepad create successfully');
    }

    public function edit(Notepad $notepad): View
    {
        return view('notepads.edit',compact('notepad'));   
    }

    public function update(Request $request, Notepad $notepad): RedirectResponse
    {
        $notepad->update($request->all());

        return redirect()->route('notepads.index')->with('success', 'notepad updated successfully');
    }

    public function destroy(Notepad $notepad)
    {
        $notepad->delete();

        return redirect()->route('notepads.index')->with('success','notepad has been deleted successfully');
    }
    
    public function show(Notepad $notepad): View
    {
        return view('notepads.show',compact('notepad'));   
    }

}

