<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Traits\DestroyTrait;
use App\Traits\FileTrait;
use App\Traits\StoreTrait;
use App\Traits\SvgTrait;
use App\Traits\UpdateTrait;

class BaseController extends Controller
{
    use StoreTrait, UpdateTrait, DestroyTrait;
    use FileTrait;
    use SvgTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }
}