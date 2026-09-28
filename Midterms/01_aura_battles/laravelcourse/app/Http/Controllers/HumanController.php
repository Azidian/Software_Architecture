<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveHumanRequest;
use App\Models\Human;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HumanController extends Controller
{
    public function create(): View
    {
        $viewData = [];

        return view('human.create')->with('viewData', $viewData);
    }

    public function save(SaveHumanRequest $request): RedirectResponse
    {
        Human::create($request->validated());

        return redirect()->route('human.index');
    }

    public function index(): View
    {
        $viewData = [];
        $viewData['humans'] = Human::orderBy('aura', 'desc')->get();

        return view('human.index')->with('viewData', $viewData);
    }

    public function battle(): View
    {
        $viewData = [];
        $viewData['humans'] = Human::orderBy('id', 'asc')->take(2)->get();

        return view('human.battle')->with('viewData', $viewData);
    }
}
