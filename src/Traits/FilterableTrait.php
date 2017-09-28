<?php 
namespace Kaankilic\WTFilter\Traits;
use Kaankilic\WTFilter\Facades\WTFilter;
trait FilterableTrait
{
    public function filterable(){
      return [];
    }
    protected static function boot(){
        parent::boot();
    }
}
?>
