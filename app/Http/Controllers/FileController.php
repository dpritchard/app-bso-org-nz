<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Auth\AuthenticationException as AuthenticationException;

class FileController extends Controller
{

    /**
    * FileController constructor.
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
        $this->authorize('administer', File::class);

        $files = File::all();

        return view('file.admin.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->authorize('administer', File::class);

      $file = new File;

      $update = false;

      return view('file.admin.form',  compact('file', 'update'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->authorize('create', File::class);

      $this->validate($request, [
          'file' => 'required',
          'visibility' => [
              'nullable',
              Rule::in(['private', 'public'])
          ]
      ]);

      $file = new File;

      $file->name = request()->file_name ?? request()->file('file')->getClientOriginalName();

      $file->visibility = request()->visibility ?? 'public'; // NOTE: Public by default!

      $file->storage_path = request()->file('file')->store('files');

      $file->save();

      if ($request->expectsJson()) {
        return response()->json([
            'md_link' => $file->md_link(),
            'html_link' => $file->html_link()
        ]);
      } else {
          return back()->with('success', 'File saved!');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file, $name = null)
    {
        // If guest and file is private, try login...
        if(auth()->guest() && $file->visibility == 'private'){
            throw new AuthenticationException;
        }
        // If private, authorise...
        if($file->visibility == 'private'){
            $this->authorize('view', $file);
        }

        $name = $name ?? $file->name;

        return Storage::response($file->storage_path, $name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
