<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use Illuminate\View\View;
use Illuminate\Http\{Request, RedirectResponse};
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\Nourishment;
use App\Enums\NourishmentCategory;
use Mauricius\LaravelHtmx\Http\{HtmxRequest, HtmxResponse, HtmxResponseClientRedirect};


class AdminNourishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $nourishments = Nourishment::all();
        // $nourishments = Nourishment::where('category', NourishmentCategoryChoices::Food)->get();
        return view('admin.nourishment.index', compact('nourishments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(HtmxRequest $request) {
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'name' => 'required',
                'image_url' => 'nullable|file|image|mimes:jpg,jpeg,png|max:20480',
                'category' => [Rule::enum(NourishmentCategory::class)],
                's_price' => 'required|numeric',
                'm_price' => 'required|numeric',
                'l_price' => 'required|numeric',
                'g_price' => 'required|numeric',
                'description' => 'required|string',
            ]);
            if ($request->hasFile('image_url')) {
                $now = date_create();
                $image_name = date_format($now, 'U') . $request->image_url->getClientOriginalName();
                $imagePath = $request->file('image_url')
                    ->storeAs('images/nourishment', $image_name, 'public');
                $data['image_url'] = $imagePath;
            }
            $nourishment = Nourishment::create($data);
            $request->session()->flash('messages', 'Nourishment Created Successfully');
            return with(new HtmxResponse())
                ->addTriggerAfterSwap('showMessages')
                ->location(route('admin.nourishment.list'));

        }
        if ($request->isHtmxRequest()) {
            return with(new HtmxResponse())
                ->renderFragment('admin.nourishment.create', 'admin-nourishment-create-form');
        }
        return view('admin.nourishment.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Nourishment $nourishment, HtmxRequest $request) {
        Log::info('REQUEST DATA:', [$request->all()]);
        if ($request->isMethod('post')) {
            if ($request->has('update')) {
                $data = $request->validate([
                    'name' => 'required',
                    'category' => [Rule::enum(NourishmentCategoryChoices::class)],
                    'image_url' => 'nullable|file|image|mimes:jpg,jpeg,png|max:20480',
                    's_price' => 'required|numeric',
                    'm_price' => 'required|numeric',
                    'l_price' => 'required|numeric',
                    'g_price' => 'required|numeric',
                    'description' => 'required|string',
                ]);
                if ($request->hasFile('image_url')) {
                    $now = date_create();
                    $image_name = date_format($now, 'U') . $request->image_url->getClientOriginalName();
                    $imagePath = $request->file('image_url')->storeAs('images/nourishment', $image_name, 'public');
                    $data['image_url'] = $imagePath;
                }
                $nourishment->update($data);
                Log::debug('Updated Model:', $nourishment->fresh()->toArray());
                $request->session()->flash('messages', 'Nourishment updated successfully');
                $response = new HtmxResponse();
                $response->addTriggerAfterSwap('showMessages');
                $response->renderFragment('admin.nourishment.edit', 'admin-nourishment-edit-page', compact('nourishment'));
                return $response;
            } elseif ($request->has('delete')) {
                $nourishment->delete();
                $request->session()->flash('messages', 'Nourishment deleted successfully');
                return with(new HtmxResponse())
                    ->location(route('admin.nourishment.list'))
                    ->addTriggerAfterSwap('showMessages');
            }
        } else {
            return view('admin.nourishment.edit', compact('nourishment'));
        }
    }
}
