<?php

namespace App\Traits\Api;

trait ResponseTrait {
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function responseSuccess($message, $data = [], $code = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        if(!empty($data)){
            $response['data'] = $data;
        }

        return response()->json($response, $code);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function responseError($message, $errorData = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        if(!empty($errorData)){
            $response['data'] = $errorData;
        }

        return response()->json($response, $code);
    }
}
