<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Nourishment;
use Mauricius\LaravelHtmx\Http\HtmxResponse;
use Mauricius\LaravelHtmx\Http\HtmxRequest;

class NourishmentController extends Controller
{
    public function show(Request $request): View {
        $nourishment = Nourishment::findOrFail($request->nourishment_id);
        return view('nourishment.show', compact('nourishment'));
    }
    public function update(HtmxRequest $request): String {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            's_price' => 'required',
            'm_price' => 'required',
            'l_price' => 'required',
            'g_price' => 'required',
            'description' => 'required|max:255',
        ]);
        $nourishment = Nourishment::findOrFail($request->nourishment_id);
        $nourishment->update($validatedData);
        $request->session()->flash('messages', 'Nourishment updated successfully');
        // Using native Laravel fragment() to return a fragment specified in the nourishment.show view
        // $response = view('nourishment.show', compact('nourishment'))->fragment('nourishment-update-form');

        // Using addFragment() and addTrigger from the Laravel HTMX package
        $response = new HtmxResponse();
        $response->renderFragment('nourishment.show', 'nourishment-update-form', compact('nourishment'));
        $response->addTrigger('showMessages', 'showMessages');
        return $response;
    }
    public function showMessages(Request $request) {
        return view('messages');
    }

    public function destroy(Request $request): RedirectResponse {
        Nourishment::destroy($request->nourishment_id);
        return to_route('nourishment.list')->with('success', 'Nourishment deleted successfully.');
    }
    public function list(): View {
        $nourishments = Nourishment::all();
        return view('nourishment.list', ['nourishments' => $nourishments]);
    }
    public function create(): View {
        return view('nourishment.create');
    }
    public function store(Request $request): RedirectResponse {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            's_price' => 'required',
            'm_price' => 'required',
            'l_price' => 'required',
            'g_price' => 'required',
            'description' => 'required|max:255',
        ]);

        $nourishment = Nourishment::create($validatedData);

        return to_route('nourishment.show', ['nourishment_id' => $nourishment->id])->with('success', 'Nourishment created successfully.');
    }
}
