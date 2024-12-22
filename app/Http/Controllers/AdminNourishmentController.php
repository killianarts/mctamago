<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\{Request, RedirectResponse};
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\Nourishment;
use Mauricius\LaravelHtmx\Http\{HtmxRequest, HtmxResponse, HtmxResponseClientRedirect};


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
        Log::info('file info:', [$request->hasFile('image_url')]);
        $data = $request->validate([
            'name' => 'required',
            'image_url' => 'nullable|file|image|mimes:jpg,jpeg,png|max:20480',
            's_price' => 'required|numeric',
            'm_price' => 'required|numeric',
            'l_price' => 'required|numeric',
            'g_price' => 'required|numeric',
            'description' => 'required|string',
        ]);
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('public/image_uploads');
            $data['image_url'] = $imagePath;
        }
        $nourishment = Nourishment::create($data);
        $request->session()->flash('messages', 'Nourishment Created Successfully');
        return with(new HtmxResponse())
                ->addTriggerAfterSwap('showMessages')
                ->location(route('admin.nourishment.edit', $nourishment->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Nourishment $nourishment, HtmxRequest $request): View|HtmxResponse {
        if ($request->isHtmxRequest()) {
            return with(new HtmxResponse())
            ->renderFragment('admin.nourishment.show', 'admin-nourishment-show-page', compact('nourishment'));
        }
        return view('admin.nourishment.edit', compact('nourishment'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HtmxRequest $request): View|HtmxResponse {
        $nourishment = Nourishment::findOrFail($request->nourishment);
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
        Log::info('Update request method', ['method' => $request->method(), 'data' => $request->all(), 'input' => $request->input()]);
        $data = $request->validate([
            'name' => 'required',
            'image_url' => 'nullable|file|image|mimes:jpg,jpeg,png|max:20480',
            's_price' => 'required|numeric',
            'm_price' => 'required|numeric',
            'l_price' => 'required|numeric',
            'g_price' => 'required|numeric',
            'description' => 'required|string',
        ]);
        Log::info('After validate()', [$data]);
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('public/image_uploads', 'local');
            $data['image_url'] = $imagePath;
        }
        $nourishment = $request->nourishment;
        $nourishment->update($data);
        Log::info('After update():', [$nourishment]);
        $request->session()->flash('messages', 'Nourishment updated successfully');
        $response = new HtmxResponse();
        $response->addTrigger('showMessages');
        $response->location(route('admin.nourishment.edit', $nourishment));
        return $response;
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
