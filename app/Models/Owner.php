<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'phone' , 'email' , 'Brief' , 'work' , 'image' , 'state',
    ];

    public function getImageUrlAttribute(){
        if($this->image){
            return Storage::disk('public')->url($this->image);
        }   
        return 'https://placehold.co/600x600';
    }
}
