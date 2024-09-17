<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                'username' => ['required','string','max:255'],
          'useremail' => ['required','string','email','max:255','unique:users,email'],
          'userpass' => ['required','string','min:8'],
          'userconfirmpass' => ['required','string','min:8','same:userpass'],
          'usercity' => ['required','string','max:255'],
          'useraddress' => ['required','string','max:255']
        ];
    }

    // public function messages(){
    //     return [
    //         'username.required' => 'Username is required',
    //       'username.string' => 'Username must be a string',
    //       'username.max' => 'Username should not exceed 255 characters',
    //       'useremail.required' => 'Email is required',
    //       'useremail.string' => 'Email must be a string',
    //       'useremail.email' => 'Email must be a valid email',
    //       'useremail.max' => 'Email should not exceed 255 characters',
    //       'useremail.unique' => 'Email already exists',
    //       'userpass.required' => 'Password is required',
    //       'userpass.string' => 'Password must be a string',
    //       'userpass.min' => 'Password must be at least 8 characters',
    //       'userconfirmpass.required' => 'Confirm Password is required',
    //       'userconfirmpass.string' => 'Confirm Password must be a string' 
    //     ];
    // }

    public function attributes(){
        return[
                'username' => 'User Name',
          'useremail' => 'User Email Address',
          'userpass' => 'Password',
          'userconfirmpass' => 'Confirm Password',
          'usercity' => 'City',
          'useraddress' => 'Address'
        ];
    }

    protected $stopOnFirstFailure = true;
}
