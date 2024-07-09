<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\BricolageController;

class BricolageRequest extends FormRequest {

public function authorize(){
    return true;
}
public function  rules(){
    return [

    ];
}




}