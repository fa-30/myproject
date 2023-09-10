<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey="id";
  
    protected $guarded=[];
    public $timestamps=false;
    use HasFactory;
    public function getPasswordWithoutHash()
    {
       
        return str_replace('$2y$', '', $this->password);
    }
}
