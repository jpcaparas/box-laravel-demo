<?php

namespace App\Http\Controllers;

/**
 * Class BoxController
 *
 * @package App\Http\Controllers
 */
class BoxController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function __invoke()
    {
        return view('box.index');
    }
}
