<?php

namespace AutoPlanner;

use Illuminate\Database\Eloquent\Model;

class TVChannels extends Model
{
      public $fillable = [
      'TV3',
      'TV6',
      'TV8',
      'LNK',
      'BTV',
      'TV1',
      'INFO TV',
      'PBK',
      'NTV Mir Lietuva',
      'REN Lietuva',
      'Lietuvos rytas TV',
      'Lietuvos televizija',
    ];
      protected $table = 'TVChannels';
  }
