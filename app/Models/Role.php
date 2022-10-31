<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kirschbaum\PowerJoins\PowerJoins;


class Role extends Model
{
    use HasFactory;
    use PowerJoins;

    public $table = 'roles';

    protected $fillable = ['title'];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function permissions(){
        return $this->belongsTomany(Permission::class,'roles_permissions','role_id');
    }

    public function users(){
        return $this->belongsTomany(User::class,'roles_users');
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
