<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                "name" => ["required", "min:5", "max:50"],
                "date" => ["required", "date"],
                "available_tickets"  => ["required", "min:1", "max:100"],
                "description"  => ["required", "min:5", "max:300"],
                "img"=> ["required",File::image()->min("1kb")->max("2mb")],
                "user_id"=>["nullable", "exists:users,id"],
                "tags" => ["nullable"],

            ];
        
    }
}
