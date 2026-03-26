<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiClient
{
    protected string $apiKey;
    protected string $baseUri;

    public function __construct()
    {
        $this->apiKey = config('services.gemini.key') ?? '';
        $this->baseUri = config('services.gemini.base_uri', 'https://generativelanguage.googleapis.com');
    }

    public function generateContent(string $prompt, array $options = [])
    {
        $model = $options['model'] ?? 'gemini-pro';
        $maxTokens = $options['max_tokens'] ?? 500;
        $temperature = $options['temperature'] ?? 0.7;

        $response = Http::withoutVerifying()->post("{$this->baseUri}/v1beta/models/{$model}:generateContent?key={$this->apiKey}", [
            'contents' => [
                [
                    'parts' => [
                        [
                            'text' => $prompt
                        ]
                    ]
                ]
            ],
            'generationConfig' => [
                'temperature' => $temperature,
                'maxOutputTokens' => $maxTokens,
            ]
        ]);

        if ($response->successful()) {
            $data = $response->json();
            return $data['candidates'][0]['content']['parts'][0]['text'] ?? 'No response generated.';
        }

        return 'Error: ' . $response->body();
    }
}