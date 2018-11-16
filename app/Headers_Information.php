<?php

namespace GreenMarket;

use Illuminate\Database\Eloquent\Model;

class Headers_Information extends Model
{
    protected $table = "headers_information";

    protected $fillable = ['h1,h2,h3,h4,h5,h6'];
}
