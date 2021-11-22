<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    private $genres = [
        'action',
        'sci-fi',
        'horror',
        'thriller',
        'comedy'
    ];

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
            'title' => 'string|max:255',
            'director' => 'string|max:255',
            'image_url' => 'url',
            'duration' => 'number|min:1|max:600',
            'release_date' => 'date',
            'genre' => 'in:' . implode(',', $this->genres),
        ];
    }
}
