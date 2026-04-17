<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\Program;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProgramController extends Controller
{
    public function index(): View
    {
        $programs = Program::query()->orderBy('code')->get();

        return view('programs.index', compact('programs'));
    }

    public function create(): View
    {
        return view('programs.create');
    }

    public function store(StoreProgramRequest $request): RedirectResponse
    {
        Program::query()->create($request->validated());

        return redirect()->route('programs.index')->with('status', 'Program created.');
    }

    public function edit(Program $program): View
    {
        return view('programs.edit', compact('program'));
    }

    public function update(UpdateProgramRequest $request, Program $program): RedirectResponse
    {
        $program->update($request->validated());

        return redirect()->route('programs.index')->with('status', 'Program updated.');
    }
}
