<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\{Request, RedirectResponse};
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\Nourishment;
use Mauricius\LaravelHtmx\Http\HtmxRequest;
use Mauricius\LaravelHtmx\Http\HtmxResponse;
use Mauricius\LaravelHtmx\Http\HtmxResponseClientRedirect;


class AdminNourishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nourishments = Nourishment::all();
        return view('admin.nourishment.index', compact('nourishments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(HtmxRequest $request) {
        if ($request->isHtmxRequest()) {
            return with(new HtmxResponse())
                ->renderFragment('admin.nourishment.create', 'admin-nourishment-create-form');
        }
        return view('admin.nourishment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HtmxRequest $request) {
        $data = $request->validate([
            'name' => 'required',
            's_price' => 'required|numeric',
            'm_price' => 'required|numeric',
            'l_price' => 'required|numeric',
            'g_price' => 'required|numeric',
            'description' => 'required|string',
        ]);
        $nourishment = Nourishment::create($data);
        $request->session()->flash('messages', 'Nourishment Created Successfully');

        return with(new HtmxResponse())
                ->addTriggerAfterSwap('showMessages')
                ->location(route('admin.nourishment.edit', $nourishment->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, HtmxRequest $request): View|HtmxResponse {
        $nourishment = Nourishment::findOrFail($id);
        if ($request->isHtmxRequest()) {
            return with(new HtmxResponse())
            ->renderFragment('admin.nourishment.show', 'admin-nourishment-show-page', compact('nourishment'));
        }
        return view('admin.nourishment.edit', compact('nourishment'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, HtmxRequest $request): View|HtmxResponse {
        $nourishment = Nourishment::findOrFail($id);
        if ($request->isHtmxRequest()) {
            return with(new HtmxResponse())
            ->renderFragment('admin.nourishment.edit', 'admin-nourishment-edit-page', compact('nourishment'));
        }
        return view('admin.nourishment.edit', compact('nourishment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HtmxRequest $request): HtmxResponse {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            's_price' => 'required',
            'm_price' => 'required',
            'l_price' => 'required',
            'g_price' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return old();
        } else {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                's_price' => 'required',
                'm_price' => 'required',
                'l_price' => 'required',
                'g_price' => 'required',
                'description' => 'required|max:255',
            ]);
            $nourishment = Nourishment::findOrFail($request->nourishment);
            $nourishment->update($validatedData);
            $request->session()->flash('messages', 'Nourishment updated successfully');
            // Using native Laravel fragment() to return a fragment specified in the nourishment.show view
        // $response = view('nourishment.show', compact('nourishment'))->fragment('nourishment-update-form');

        // Using addFragment() and addTrigger from the Laravel HTMX package
        $response = new HtmxResponse();
        $response->renderFragment('admin.nourishment.edit', 'admin-nourishment-edit-page', compact('nourishment'));
        $response->addTrigger('showMessages');
        return $response;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, HtmxRequest $request): HtmxResponse {
        Nourishment::destroy($id);
        $request->session()->flash('messages', 'Nourishment deleted successfully');
        return with(new HtmxResponse())
            ->location(route('admin.nourishment.index'))
            ->addTriggerAfterSwap('showMessages');
    }
}
