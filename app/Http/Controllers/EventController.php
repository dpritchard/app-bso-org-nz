<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Category;
use App\Contact;

class EventController extends Controller
{
    /**
    * DatasetController constructor.
    */
    public function __construct()
    {
        $this->middleware('auth')->except(['indexFuture', 'indexHistoric', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('administer', Event::class);

        $events = Event::orderBy('start', 'desc')->get();

        return view('event.admin.index', ['events' => $events, 'title' => 'All Events']);
    }

    /**
     * Display a listing of future events.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFuture()
    {
        $events = Event::future()->orderBy('start')->get();

        return view('event.index', ['events' => $events, 'title' => 'Future Events']);
    }

    /**
     * Display a listing of historic events.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexHistoric()
    {
        $events = Event::historic()->orderBy('start', 'desc')->get();

        return view('event.index', ['events' => $events, 'title' => 'Past Events']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('administer', Event::class);

        $event = new Event;

        $event->contact()->associate(new Contact);

        $event->category()->associate(new Category);

        // $event = create(Event::class);
        // $event->contact()->associate(create('App\Contact'));
        // $event->category()->associate(Category::find(3));

        $update = false;

        $categories = Category::select(['id', 'type'])->get();

        $contacts = Contact::select(['id', 'name', 'email', 'phone'])->get();

        return view('event.admin.form', compact('event', 'update', 'categories', 'contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Event::class);
        $this->validate($request, [
            'title' => 'required',
            'contact_name' => 'required',
            'category' => 'required',
            'start' => 'required|date_format:"Y-m-d H:i"',
            'finish' => 'nullable|date_format:"Y-m-d H:i"'
        ]);

        $contact = Contact::firstOrCreate(['name' => $request->contact_name]);
        $contact->email = $request->contact_email;
        $contact->phone = $request->contact_phone;
        $contact->save();
        $category = Category::findOrFail($request->category);

        $event = new Event;
        $event->start = $request->start .= ':00';
        $event->finish = is_null($request->finish) ? $request->finish : $request->finish .= ':00';
        $event->title = $request->title;
        $event->body = $request->body;
        $event->contact()->associate($contact);
        $event->category()->associate($category);
        $event->save();

        return redirect($event->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $this->authorize('administer', Event::class);

        $update = TRUE;

        $categories = Category::select(['id', 'type'])->get();

        $contacts = Contact::select(['id', 'name', 'email', 'phone'])->get();

        return view('event.admin.form', compact('event', 'update', 'categories', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->authorize('create', Event::class);

        $this->validate($request, [
            'title' => 'required',
            'contact_name' => 'required',
            'category' => 'required',
            'start' => 'required|date_format:"Y-m-d H:i"',
            'finish' => 'nullable|date_format:"Y-m-d H:i"'
        ]);

        $contact = Contact::firstOrCreate(['name' => $request->contact_name]);
        $contact->email = $request->contact_email;
        $contact->phone = $request->contact_phone;
        $contact->save();
        $category = Category::findOrFail($request->category);

        $event->start = $request->start .= ':00';
        $event->finish = is_null($request->finish) ? $request->finish : $request->finish .= ':00';
        $event->title = $request->title;
        $event->body = $request->body;
        $event->contact()->associate($contact);
        $event->category()->associate($category);
        $event->save();

        return redirect($event->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
