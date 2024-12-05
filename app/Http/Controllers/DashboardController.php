<?php

namespace App\Http\Controllers;

use Anthropic\Laravel\Facades\Anthropic;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $response = null;

        if ($request->isMethod('POST')) {
            $result = OpenAI::chat()->create([
                'model' => 'gpt-4o-mini',
                'messages' => [
                    ['role' => 'user', 'content' => $request->msg],
                ],
            ]);
    
            $response = $result->choices[0]->message->content;
        }

        return view('dashboard', [
            'response' => $response,
            'msg' => $request->msg,
        ]);

        
        /*$result = Anthropic::messages()->create([
            'model' => 'claude-3-opus-20240229',
            'max_tokens' => 1024,
            'messages' => [
                ['role' => 'user', 'content' => $content],
            ],
        ]);

        dd($result->content[0]->text);*/
    }
}
