<?php

namespace App\Http\Requests;

use App\Models\Delivery;
use App\Models\Fruit;
use App\Models\Take;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'postal_code' => ['required', 'integer', 'digits:5'],
            'phone' => ['required', 'string'],
            'weight' => ['required', 'integer', 'min:1'],
            'fruit_id' => ['required', Rule::exists(Fruit::class, 'id')],
            'origin' => ['required', 'string'],
            'note' => ['nullable', 'string'],
            'delivery_id' => ['required', Rule::exists(Delivery::class, 'id')],
            'take_id' => ['required', Rule::exists(Take::class, 'id')],
        ];
    }
}
