<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserDosesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'med_id' => $this->med_id,
            'quantity' => $this->quantity,
            'unit' => $this->unit,
            'time' => $this->time
        ];
    }
}

// class DataResource extends JsonResource
// {
//     public function toArray($request)
//     {
//         return [
//             'id' => $this->id,
//             'quantity' => $this->quantity,
//             'unit' => $this->unit,
//             'time' => $this->time,
//             'med_id' => $this->med_id  
//         ];
//     }
// }
