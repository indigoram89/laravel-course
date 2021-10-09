<?php

namespace App\Http\Controllers;

use App\Rules\Phone;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ValidationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['nullable', 'string', 'max:50'],
            'age' => ['nullable', 'integer', 'min:18', 'max:100'], // 123
            'amount' => ['nullable', 'numeric', 'min:1', 'max:9999999'], // 123.45
            'gender' => ['nullable', 'string', 'in:mail,femail'],
            'zip' => ['required', 'digits:6'], // 123456
            'subscription' => ['nullable', 'boolean'], // true/false/1/0/yes/no
            'agreement' => ['accepted'], // true/1/yes
            'password' => ['required', 'string', 'min:7', 'confirmed'], // password_confirmation
            'current_password' => ['required', 'string', 'current_password'], // текущий пароль
            'email' => ['required', 'string', 'email', 'exists:users'], // mail@example.com
            'website' => ['nullable', 'string', 'url'], // https://example.com
            'uuid' => ['nullable', 'string', 'uuid'], // sdfsdf-sdfsd-sdfsdf-sdfsdf
            'ip' => ['nullable', 'string', 'ip'], // 127.0.0.1
            'birth_date' => ['nullable', 'string', 'date'], // 2021-10-09/09-10-2021
            'delivery' => ['required', 'array', 'size:2'], // ['date' => '2021-10-09', 'time' => '12:30:00']
            'delivery.date' => ['required', 'string', 'date_format:Y.m.d'], // 2021-10-09
            'delivery.time' => ['required', 'string', 'date_format:H:i:s'], // 12:30:00
            'start_date' => ['required', 'string', 'data', 'after_or_equal:today'],
            'finish_date' => ['required', 'string', 'data', 'after:start_date'],
            'services' => ['nullable', 'array', 'min:1', 'max:10'], // [1,2,3,4,5]
            'services.*' => ['required', 'integer'], // [1,2,3,4,5]
            // 'country_id' => ['required', 'integer', 'exists:coutries,id'],
            'country_id' => ['required', 'integer', Rule::exists('countries', 'id')->where('active', true)],
            // 'phone' => ['required', 'string', 'unique:users,phone'],
            'phone' => ['required', 'string', new Phone, Rule::unique('users')->ignore(123)],
            'avatar' => ['required', 'file', 'image', 'max:1024'],
            'secret' => ['required', 'string', function ($attribute, $value, \Closure $fail) {
                if ($value !== config('example.foo')) {
                    $fail(__('Неверный секретый ключ.'));
                }
            }],
        ]);

        dd($validated);
    }
}
