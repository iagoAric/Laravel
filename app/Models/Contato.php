<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Contato extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'ramal',
        'coordenacao',
        'instituto',
    ];

    public function getContatos(string $search = '')
    {
        $contatos =$this->where(function ($query) use ($search){
            if ($search) {
                $query->where('ramal', $search);
                $query->orwhere('name', 'LIKE', "%{$search}%"); 
          }
        })->paginate(5);

        return $contatos;
    }
}


