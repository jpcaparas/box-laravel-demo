<?php

namespace App\Http\Controllers\Box;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class ContentPreviewController
 *
 * @package App\Http\Controllers\Box
 */
class ContentPreviewController extends Controller
{
    /**
     * @param Request $request
     * @param         $fileId
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function __invoke(Request $request, $fileId)
    {
        return view('box.content_preview', compact('fileId'));
    }
}
