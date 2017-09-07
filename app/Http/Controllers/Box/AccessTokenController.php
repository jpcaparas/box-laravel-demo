<?php

namespace App\Http\Controllers\Box;

use App\Http\Controllers\Controller;
use JPCaparas\Box\Box;

/**
 * Class AccessTokenController
 *
 * @package App\Http\Controllers\Box
 */
class AccessTokenController extends Controller
{
    /**
     * @param Box $box
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function __invoke(Box $box)
    {
        return response()->json(['token' => $box->auth()->accessToken()], 200);
    }
}
