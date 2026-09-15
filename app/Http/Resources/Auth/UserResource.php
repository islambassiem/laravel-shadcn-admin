<?php

declare(strict_types=1);

namespace App\Http\Resources\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin User
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nickname' => $this->name,
            'email' => $this->email,
            'name_en' => $this->employee?->full_name_en,
            'name_ar' => $this->employee?->full_name_ar,
            'employee_code' => $this->employee?->employee_code,
            'image' => $this->employee?->image,
        ];
    }
}
