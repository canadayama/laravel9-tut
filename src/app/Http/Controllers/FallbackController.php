<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Undocumented class
 */
class FallbackController extends Controller
{
    /**
     * Undocumented function
     */
    public function __invoke()
    {
        return view('fallback.index');
    }
}
