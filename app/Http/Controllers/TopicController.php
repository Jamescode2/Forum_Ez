<?php

namespace App\Http\Controllers;

use App\Models\topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('topics.index', [
            'topics' => topic::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'topic' => 'required|string|max:255',
        ]);
 
        $request->user()->topics()->create($validated);

        return redirect(route('topics.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(topic $topic)
    {
        $this->authorize('update', $topic);
 
        return view('topics.edit', [
            'topic' => $topic,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, topic $topic)
    {
        $this->authorize('update', $topic);
 
        $validated = $request->validate([
            'topic' => 'required|string|max:255',
        ]);
 
        $topic->update($validated);
 
        return redirect(route('topics.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(topic $topic)
    {
        $this->authorize('delete', $topic);
 
        $topic->delete();
 
        return redirect(route('topics.index'));
    }
}
