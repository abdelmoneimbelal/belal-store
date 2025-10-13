<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCategoryRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
            {
                $parentId = $this->filled('parent_id') ? $this->input('parent_id') : null;

                return [
                    'name' => [
                        'required',
                        'max:255',
                        Rule::unique('product_categories', 'name')
                            ->where(function ($q) use ($parentId) {
                                if (is_null($parentId)) {
                                    $q->whereNull('parent_id');
                                } else {
                                    $q->where('parent_id', $parentId);
                                }
                            }),
                    ],
                    'status' => 'required',
                    'parent_id' => 'nullable',
                    'cover' => 'required|mimes:jpg,jpeg,png|max:2000',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                // Support both possible route parameter names
                $category = $this->route('product_category') ?? $this->route('productCategory');
                $currentId = is_object($category) ? $category->id : $category;
                $parentId = $this->filled('parent_id')
                    ? $this->input('parent_id')
                    : (is_object($category) ? $category->parent_id : null);

                return [
                    'name' => [
                        'required',
                        'max:255',
                        Rule::unique('product_categories', 'name')
                            ->ignore($currentId, 'id')
                            ->where(function ($q) use ($parentId) {
                                if (is_null($parentId)) {
                                    $q->whereNull('parent_id');
                                } else {
                                    $q->where('parent_id', $parentId);
                                }
                            }),
                    ],
                    'status' => 'required',
                    'parent_id' => 'nullable',
                    'cover' => 'nullable|mimes:jpg,jpeg,png|max:2000',
                ];
            }
            default: break;
        }
    }
}
