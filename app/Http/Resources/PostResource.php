<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    //depine property
    public $status;
    public $message;
    public $resource;

    /**
     *
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resource
     * @return void
     */

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return[
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}
