<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAIController extends Controller
{
    public function question()
    {
        return view('openai.index');
    }

    public function chat(Request $request)
    {
        $question = $request->input('question');
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $question],
            ],
        ]);

        return view('openai.result', [
            'result' => $result['choices'][0]['message']['content']
        ]);
    }
}
