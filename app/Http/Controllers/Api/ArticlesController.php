<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
/*
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
*/

class ArticlesController extends Controller
{
    use DisableAuthorization;

    protected $model = Article::class;    
}
