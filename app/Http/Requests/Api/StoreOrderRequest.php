<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreOrderRequest extends FormRequest
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
            'payment_method_id' => 'nullable|exists:payment_methods,id',
            'customer_name' => 'nullable|string|max:255',
            'customer_phone' => 'nullable|string|max:255',
            'customer_address' => 'nullable|string',
            'discount_amount' => 'nullable|numeric|min:0',
            'order_details' => 'required|array|min:1',
            'order_details.*.product_id' => 'required|exists:products,id',
            'order_details.*.quantity' => 'required|integer|min:1',
            'order_details.*.price' => 'required|numeric|min:0',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'payment_method_id.exists' => 'Metode pembayaran yang dipilih tidak valid',
            'order_details.required' => 'Detail pesanan harus diisi',
            'order_details.min' => 'Minimal harus ada 1 item dalam pesanan',
            'order_details.*.product_id.required' => 'ID produk harus diisi',
            'order_details.*.product_id.exists' => 'Produk yang dipilih tidak valid',
            'order_details.*.quantity.required' => 'Jumlah produk harus diisi',
            'order_details.*.quantity.min' => 'Jumlah produk minimal 1',
            'order_details.*.price.required' => 'Harga produk harus diisi',
            'order_details.*.price.min' => 'Harga produk tidak boleh negatif',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Http\Exceptions\HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            respondWithData(422, false, 'Validasi gagal', [
                'errors' => $validator->errors()
            ])
        );
    }
}
