<?php
 
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
 
class Vendor
  extends Eloquent
{
  public $table  = "vendors";
  
  public function location(){
    return $this->belongsTo('Location', 'id_location');
  }
  public function category(){
    return $this->belongsTo('Category', 'id_category');
  }
}