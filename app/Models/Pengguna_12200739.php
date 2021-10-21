<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna_12200739 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

    /**
     * method untul cek login dari table pengguna
     * berdasarkan nama dan password
     * @var String $user
     * @var String pass
     */
    public function cekLogin($user, $pass){
        return $this->where('nama', $user)
                    ->where('password', md5($pass) )->first();
    }
}