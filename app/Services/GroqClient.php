<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GroqClient
{
    protected ?string $apiKey = null;

    public function __construct()
    {
        $this->apiKey = config('services.groq.key');
    }

    public function post($endpoint, array $data)
{
    return Http::withoutVerifying()->withHeaders([
        'Authorization' => 'Bearer ' . $this->apiKey,
        'Content-Type'  => 'application/json',
    ])->post("https://api.groq.com/openai/v1/{$endpoint}", $data);
}
}
