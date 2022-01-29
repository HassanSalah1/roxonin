<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class RoleUpdateRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => ['required', 'string', 'min:3', 'max:125', 'unique:roles,name,' . $this->role->id],
      'permissions' => ['nullable'],
      'permissions.*' => ['nullable', 'exists:permissions,id'],
    ];
  }
}
