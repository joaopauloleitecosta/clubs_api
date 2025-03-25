<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public static function success($data): JsonResponse
    {
        return response()->json(
            [
                'status_code' => 200,
                'message' => 'success',
                'data' => $data
            ],
            200
        );
    }
}