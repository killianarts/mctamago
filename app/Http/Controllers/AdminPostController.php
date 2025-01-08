<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use Illuminate\View\View;
use Illuminate\Http\{Request, RedirectResponse};
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Enums\PostStatusChoices;
use Mauricius\LaravelHtmx\Http\{HtmxRequest, HtmxResponse, HtmxResponseClientRedirect};


class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $posts = Post::all();
        // $posts = Post::where('category', PostStatusChoices::Food)->get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(HtmxRequest $request) {
        if ($request->isMethod('post')) {
            Log::info('What is the status?', [$request->get('status')]);
            $data = $request->validate([
                'title' => 'required|string',
                'preview_text' => 'required|string',
                'body' => 'required|string',
                'status' => [Rule::enum(PostStatusChoices::class)],
            ]);
            $post = Post::create($data);
            $request->session()->flash('messages', 'Post Created Successfully');
            return with(new HtmxResponse())
                ->addTriggerAfterSwap('showMessages')
                ->location(route('admin.post.list'));
        }
        if ($request->isHtmxRequest()) {
            return with(new HtmxResponse())
                ->renderFragment('admin.post.create', 'admin-post-create-form');
        }
        return view('admin.post.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post, HtmxRequest $request) {
        if ($request->isMethod('post')) {
            if ($request->has('update')) {
                $data = $request->validate([
                    'title' => 'required|string',
                    'preview_text' => 'required|string',
                    'body' => 'required|string',
                    'status' => [Rule::enum(PostStatusChoices::class)],
                ]);
                $post->update($data);
                $request->session()->flash('messages', 'Post updated successfully');
                $response = new HtmxResponse();
                $response->addTriggerAfterSwap('showMessages');
                $response->renderFragment('admin.post.edit', 'admin-post-edit-page', compact('post'));
                return $response;
            } elseif ($request->has('delete')) {
                $post->delete();
                $request->session()->flash('messages', 'Post deleted successfully');
                return with(new HtmxResponse())
                    ->location(route('admin.post.list'))
                    ->addTriggerAfterSwap('showMessages');
            }
        } else {
            return view('admin.post.edit', compact('post'));
        }
    }
}
