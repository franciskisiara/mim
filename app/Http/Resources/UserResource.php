<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'EmployeeID' => $this->EmployeeID,
            'FirstName' => $this->FirstName,
            'LastName' => $this->LastName,
            'DisplayName' => $this->DisplayName,
            'Email' => $this->Email,
        ];
    }
}
