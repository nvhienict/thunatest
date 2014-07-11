<?php
 
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
 
class Category
  extends Eloquent
{
  protected $table  = "categories";
  
  public static function vendor(){
  	return $this->hasMany('Vendor', 'id_category');
  }
}