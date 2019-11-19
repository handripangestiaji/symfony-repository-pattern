<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\JsonResponse;

trait ApiResponse
{
    /**
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function sendSuccessResponse($result, string $message, int $code = 200) 
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $result
        ];

        return new JsonResponse($response, $code);
    }

    /**
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function sendErrorResponse(string $error, $errorMessages = [], int $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error
        ];

        if (!empty($errorMessages)) {
            foreach ($errorMessages->getMessages() as $key => $value) {
                $response['data'][$key] = $value;
            }
        }

        return new JsonResponse($response, $code);
    }
}