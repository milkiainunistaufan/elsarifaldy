<?php

namespace App\Http\Controllers\Api;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chats = Chat::all();
        $chats->each(function ($chat) {
            $chat->human_created_at = Carbon::parse($chat->created_at)->diffForHumans();
        });
        return response()->json([
            'success' => true,
            'data' => $chats
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:60',
            'chat' => 'required|string',
        ]);
        $data = $request->all();
        $data['invitation_id'] = 1;
        $chat = Chat::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Chat berhasil dibuat',
            'data' => $chat
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
