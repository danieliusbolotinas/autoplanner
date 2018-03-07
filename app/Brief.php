<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    public $fillable = [
    'client',
    'brand',
    'product',
    'project_name',
    'project_number',
    'client_representitive',
    'agency_manager',
    'campaign_start_date',
    'campaign_end_date',
    'target_group',
    'agency_commission',
    'budget',
    'spot_duration'
  ];
    protected $table = 'brief';
}
