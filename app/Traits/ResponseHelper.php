<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ResponseHelper
{
    protected function responseSucceed(mixed $data = [], string $message = 'Success', int $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'code' => $code,
            'data' => $data,
        ], $code);
    }

    protected function responseError(string $message = 'Failed', int $code = Response::HTTP_NOT_FOUND, ?object $errors = null): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'code' => $code,
            'errors' => $errors,
        ], $code);
    }
}
