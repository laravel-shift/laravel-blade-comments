<?php

namespace Spatie\BladeComments\Commenters\RequestCommenters;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

interface RequestCommenter
{
    public function comment(Request $request, Response $response): ?string;
}
