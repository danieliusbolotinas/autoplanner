<?php

namespace AutoPlanner;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    public $fillable = [
    'client',
    'brand',
    'product',
    'project name',
    'project number',
    'client name',
    'agency manager',
    'campaign start date',
    'campaign end date',
    'target group',
    'agency commission'
  ];
    protected $table = 'brief';
}
