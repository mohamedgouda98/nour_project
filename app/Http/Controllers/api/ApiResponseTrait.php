<?php
namespace App\Http\Controllers\api;



trait ApiResponseTrait{

    /**
     * [
     *  data => 
     *  status =>
     *  code =>
     * ]
     */


     public function apiResponse($data = null , $errors = null , $code = 200){

        $array = [
            'data' => $data,
            'status' => in_array($code , $this->succesCode()) ? true : false,
            'errors' => $errors
        ];

        return response($array , $code);
     }

     public function succesCode(){
        return [200 , 201 , 202];
    }


}

?>