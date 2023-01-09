<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\topic;
use Illuminate\Http\Request;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('messages.index', [
            'topic_id' => request()->input('topic_id'),
            // 'messages' => DB::table('messages')->select('*') ou 'messages' => message::query()
            'messages' => message::query()
            ->where('topic_id', '=', request()->input('topic_id'))
            // ->first(), premier
            ->get(), //tous
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
    public function store(Request $request,$topic_id)
    {


        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request
        ->user()
        ->messages()
        ->create([
            'message' => $validated['message'],
            'topic_id' => $topic_id
        ]);

        return redirect(route('messages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($topic_id)
    {
            return view('welcome', [
            'topic' => topic::query()
            ->where('id', '=', $topic_id)
            ->get()[0],
            'messages' => message::query()
            ->where('topic_id', '=', $topic_id)
            ->get() 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        $this->authorize('update', $message);
 
        return view('messages.edit', [
            'message' => $message,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, message $message)
    {
        $this->authorize('update', $message);
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
        $message->update($validated);
        return redirect(route('messages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        $this->authorize('delete', $message);
        $message->delete();
        return redirect(route('messages.index'));
    }
}
