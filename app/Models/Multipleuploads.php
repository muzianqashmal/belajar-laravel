<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Multipleuploads extends Model
{
    protected $table ='Multipleuploads';
    protected $primaryKey = 'id';
    protected $fillable = array('filename','created_at','updated_at');
}
