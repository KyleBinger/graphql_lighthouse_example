<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Set;

class SetApiController extends Controller
{
    public function index(Request $request)
    {
        $sets = Set::with(['brand', 'cards', 'cards.rarities', 'cards.editions'])->get();

        return response()->json($sets, 200);
    }
}
