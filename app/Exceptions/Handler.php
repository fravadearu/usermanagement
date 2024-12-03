<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Report the exception.
     */
    public function report(Throwable $e): void
    {
        // parent::report($e);
    }

    /**
     * Render the exception as an HTTP response.
     */
    public function render($request, Throwable $e)
    {
        if ($e instanceof UnauthorizedException) {
            return response()->view('errors.403', ['exception' => $e->getMessage()], 403);
        }
        return parent::render($request, $e);
    }
}
