<?php

namespace App\Helpers;
/**
 * Class ResponseHelper
 * @package App\Helpers
 * @OA\Schema(
 *
 * )
 */
class ResponseHelper
{
    /**
     * @OA\Property(property="code", type="integer", format="int64", title="Code", description="code", example=200),
     * @OA\Property(property="data", type="string", title="Data", example="Lorem Ipsum", description="Data", example="Lorem Ipsum"),
     */
    public static function response($code = 404, $data = '', $metaData = [], $pagination = '')
    {
        $response['code'] = $code;
        $response['data'] = $data;
        if (!empty($metaData)) {
            $response['meta_data'] = $metaData;
        }
        if (!empty($pagination)) {
            $response['pagination'] = $pagination;
        }
        return response()->json($response, $code);
    }

    public static function validationResponse($code, $errors = [])
    {
        $response['code'] = $code;
        $response['errors'] = $errors;
        return response()->json($response, $code);
    }
}
