<?php

namespace App\Exceptions;


use Symfony\Component\HttpKernel\Exception\HttpException;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;


class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Exception|Throwable $exception)
    {
        if ($exception instanceof HttpException) {
            echo "<pre>";
            var_dump($exception);
            die();
            return response()->json([
                'error' => $exception->getMessage()
            ], $exception->getStatusCode());
        }

        return parent::render($request, $exception);
    }



//    public function render($request, Throwable $exception)
//    {
//        if ($exception instanceof HttpException) {
//            $statusCode = $exception->getStatusCode();
//            $error = $exception->getMessage();
//
//            if (app()->environment() == 'local') {
//                $errorInfo = [
//                    'file' => $exception->getFile(),
//                    'line' => $exception->getLine(),
//                    'trace' => $exception->getTrace()
//                ];
//
//                return response()->json([
//                    'error' => $error,
//                    'error_info' => $errorInfo
//                ], $statusCode);
//            }
//
//            return response()->json([
//                'error' => $error,
//            ], $statusCode);
//        }
//
//        return parent::render($request, $exception);
//    }


}
