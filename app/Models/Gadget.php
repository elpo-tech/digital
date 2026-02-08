<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gadget extends Model
{
    use HasFactory;

    public $table = 'gadgets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'email',
        'phone',
        'trec',
        'thw',
        'tsw',
        'brand',
        'model',
        'serial',
        'color',
        'pro',
        'ram',
        'tsto',
        'sto',
        'os',
        'screen',
        'keyb',
        'touch',
        'port',
        'cdes',
        'access',
        'shw',
        'ssw',
        'sdes',
        'rec',
        'hw',
        'sw',
        'pos',
        'amnt',
        'bal',
        'tid',
        'status',
        'descr',
        'foth1',
        'foth2',
        'foth3',
        'foth4',
        'foth5',
        'foth6',
        'foth7',
        'foth8',
        'foth9',
        'foth10',
    ];
}
