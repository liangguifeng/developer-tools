<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SqlFormatController extends Controller
{
    /**
     * @param Request $request
     * @return String
     */
    public function sqlFormat(Request $request)
    {
        $request->validate([
            'format_type' => 'required',
            'format_content' => 'required'
        ], [
            'format_type.required' => '格式化类型不能为空！',
            'format_content.required' => '格式化内容不能为空！'
        ]);

        return \SqlFormatter::format($request->format_content, false);
    }
}
