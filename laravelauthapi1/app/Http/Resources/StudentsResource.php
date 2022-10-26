<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => (string)$this->id,
            'type' => 'Students',
            'attributes' => [
<<<<<<< HEAD
                'name' => $this->name,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
        ]
            ];
=======
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email'=>$this->email,                
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
>>>>>>> ba2a9a571c11f5b8b536f0a0a32be86772368c96
    }
}
