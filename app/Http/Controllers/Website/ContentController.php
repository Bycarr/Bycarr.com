<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Repositories\ContentRepository;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    protected $content;
    public function __construct(ContentRepository $content)
    {
        $this->content = $content;
    }
    public function show($page, $slug = null)
    {
        $slug = empty($slug) ? $page : $slug;
        $content = $this->content->where('slug', $slug)->where('status', 1)->first();
        if (!$content) {
            abort('404');
        }
        return view('website.content', compact('content'));
    }
}
