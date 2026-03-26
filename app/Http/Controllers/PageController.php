<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('pages.user.dashboard');
    }

    public function curriculum()
    {
        return view('pages.user.curriculum');
    }

    public function games()
    {
        return view('pages.user.games');
    }

    public function profile()
    {
        return view('pages.user.profile');
    }

    public function leaderboard()
    {
        return view('pages.user.leaderboard');
    }

    public function settings()
    {
        return view('pages.user.settings');
    }

    public function research()
    {
        return view('pages.user.research');
    }

    
    public function tutor()
    {
        return view('pages.user.tutor');
    }

    public function tutorChat(Request $request)
{
    try {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $message = $request->input('message');
        $groq = new \App\Services\GroqClient();

        $systemPrompt = "You are Bibo, a friendly AI tutor for Filipino students.";

        $response = $groq->post('chat/completions', [
            'model' => 'llama-3.3-70b-versatile',
            'messages' => [
                ['role' => 'system', 'content' => $systemPrompt],
                ['role' => 'user', 'content' => $message],
            ],
            'temperature' => 0.7,
            'max_tokens' => 500,
        ]);

        $reply = $response->json()['choices'][0]['message']['content'] ?? 'No response.';

        return response()->json(['response' => $reply]);

    } catch (\Exception $e) {
        \Log::error('TutorChat error: ' . $e->getMessage());
        return response()->json(['response' => 'DEBUG: ' . $e->getMessage()], 200);
    }
}

    public function achievements()
    {
        return view('pages.user.achievements');
    }
}
