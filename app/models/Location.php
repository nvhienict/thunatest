<?php
 
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
 
class Location
  extends Eloquent
{
  protected $table  = "location";
  
  public function vendor(){
  	return $this->hasMany('Vendor', 'id_location');
  }
}