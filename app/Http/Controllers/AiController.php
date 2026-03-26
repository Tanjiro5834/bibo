<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\GroqClient;


class AiController extends Controller
{
    public $groqApiKey;

    public function __construct()
    {
        $this->groqApiKey = env('GROQ_API_KEY');
    }

    public function generateQuiz(Request $request, GroqClient $groqClient)
    {
        $systemPrompt = "You are a quiz generator.
        - Always return ONLY valid JSON.
        - Do NOT include reasoning, notes, explanations, markdown, or <think> tags.
        - JSON must have exactly these keys:
        - question (string)
        - choices (array of 4 strings)
        - correct_answer (string, must match one of the choices)
        - If you cannot comply, return {} only.";

        $userPrompt = $request->prompt;
        $response = $groqClient->post('chat/completions', [
            'model' => 'groq/compound',
            'messages' => [
                ['role' => 'system', 'content' => $systemPrompt],
                ['role' => 'user', 'content' => $userPrompt],
            ],
            'temperature' => 0,
        ]);

        $rawContent = $response->json()['choices'][0]['message']['content'] ?? '';

        // Strip <tool_call> tags and any text outside JSON braces
        if (preg_match('/(\{.*\})/s', $rawContent, $matches)) {
            $quizJson = json_decode($matches[1], true);
        } else {
            $quizJson = [];
        }

        return response()->json($quizJson);
    }


    public function generateImagesChoices(GroqClient $groq)
    {
        $systemPrompt = "You are a helpful assistant that generates multiple-choice image quiz questions. Task: - Create a question with images as options. - Provide exactly 4 images (URLs from Google Images). - JPG images only. - Specify which image is the correct answer. - Return the result ONLY in JSON format. - JSON keys: - 'question': string - 'images': array of 4 image URLs or search terms - 'correct_answer_index': integer (0-3, the index of the correct image in the array) Do not include any text outside the JSON. Only return the JSON object.";
        $userPrompt = "Which animal is dog?";

        $response = $groq->post('chat/completions', [
            'model' => 'groq/compound',
            'messages' => [
                ['role' => 'system', 'content' => $systemPrompt],
                ['role' => 'user', 'content' => $userPrompt],
            ],
            'temperature' => 0,
        ]);

        $rawContent = $response->json()['choices'][0]['message']['content'] ?? '';

        if (preg_match('/(\{.*\})/s', $rawContent, $matches)) {
            $quizJson = json_decode($matches[1], true);
        } else {
            $quizJson = [];
        }

        return response()->json($quizJson);
    }
}
