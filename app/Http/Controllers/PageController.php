<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;




class PageController extends Controller
{
    /**
    * PageController constructor.
    */
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('administer', Page::class);

        $pages = Page::all()->sortBy('uri');

        return view('page.admin.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('administer', Page::class);

        $page = new Page;

        $update = false;

        return view('page.admin.form', compact('page', 'update'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Page::class);

        $this->validate($request, [
            'title' => 'required',
            'uri' => 'unique:pages'
        ]);

        $page = new Page;
        $page->uri = $request->uri ?? '';
        $page->title = $request->title;
        $page->body = $request->body;
        $page->save();

        return redirect($page->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($uri = '')
    {
        $page = Page::where(['uri' => $uri])->firstOrFail();

        $title = $page->title;

        $body = markdown($page->body);

        return view('page.show', compact('page'));

        // Here is an idea, if the page does exists, create.
        // Need to protect special routes, though...
        // $page = Page::firstOrNew(['uri' => $uri]);
        //
        // if($page->exists){
        //     return view('page.show', compact('page'));
        // }
        //
        // if(auth()->user()->can('administer', Page::class)){
        //     $page->title = "This page does not exist, but you can create it here!";
        //     $update = false;
        //     return view('page.admin.form', compact('page', 'update'));
        // } else {
        //     abort(404);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $this->authorize('administer', Page::class);

        $update = true;

        return view('page.admin.form', compact('page', 'update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $this->authorize('create', Page::class);

        $this->validate($request, [
            'title' => 'required',
            'uri' => 'unique:pages'
        ]);

        $page->uri = $request->uri ?? '';
        $page->title = $request->title;
        $page->body = $request->body;
        $page->save();

        return redirect($page->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
