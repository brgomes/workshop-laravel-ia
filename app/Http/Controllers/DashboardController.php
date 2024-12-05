<?php

namespace App\Http\Controllers;

use Anthropic\Laravel\Facades\Anthropic;

class DashboardController extends Controller
{
    public function index()
    {
        $content = 'Conte uma piada sobre programação';
        $result = Anthropic::messages()->create([
            'model' => 'claude-3-opus-20240229',
            'max_tokens' => 1024,
            'messages' => [
                ['role' => 'user', 'content' => $content],
            ],
        ]);

        dd($result->content[0]->text);
    }
}
