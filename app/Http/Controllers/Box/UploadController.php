<?php

namespace App\Http\Controllers\Box;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use JPCaparas\Box\Box;

/**
 * Class UploadController
 *
 * @package App\Http\Controllers\Box
 */
class UploadController extends Controller
{
    /**
     * @param Request $request
     * @param Box     $box
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function __invoke(Request $request, Box $box)
    {
        $file = $request->file('file');
        $filename = sprintf('%1$s_%2$s.%3$s',
            Carbon::now()->timestamp . '.',
            str_slug($request->input('file_name')),
            $file->getClientOriginalExtension()
        );

        $fileId = $box->file()->upload($file, $filename);

        return redirect(route('box.content_preview', [
            'fileId' => $fileId
        ]));
    }
}
