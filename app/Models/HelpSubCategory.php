<?php

/**
 * Help Subcategory Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    Help Subcategory
 * @author      Trioangle Product Team
 * @version     1.5.9
 * @link        http://trioangle.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HelpSubCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'help_subcategory';

    public $timestamps = false;

    public $appends = ['category_name'];

    // Get all Active status records
    public static function active_all()
    {
    	return HelpSubCategory::whereStatus('Active')->get();
    }

    public function category()
    {
      return $this->belongsTo('App\Models\HelpCategory','id','category_id');
    }

    public function getCategoryNameAttribute()
    {
      return HelpCategory::find($this->attributes['category_id'])->name;
    }
}
