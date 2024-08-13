<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        /* 5.- CRUD-BASICO-V1-P1 */
        // colocar en true
        return true;
        /* /5.- CRUD-BASICO-V1-P1 */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            /* 6.- CRUD-BASICO-V1-P1 */

            /* /6.- CRUD-BASICO-V1-P1 */
        ];
    }
}
