<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Card;

class CardApiController extends Controller
{
    public function index(Request $request)
    {
        $cards = Card::with(['rarities', 'editions', 'set', 'set.brand'])->get();

        return response()->json($cards, 200);
    }
}
