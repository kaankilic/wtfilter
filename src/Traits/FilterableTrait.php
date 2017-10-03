<?php 
namespace Kaankilic\WTFilter\Traits;
use Kaankilic\WTFilter\Facades\WTFilter;
trait FilterableWords
{
    public function filterable(){
      return [
          "sources" => ["title"],
          "flag" => "has_profanity"
      ];
    }
    protected static function boot(){
        parent::boot();
        static::creating(function($model){
           self::checkProfanity();
        });
        static::updating(function($model){
           self::checkProfanity();
        });
    }
    public static function checkProfanity(){
        $config = self::filterable();
        if (is_array($config["sources"])){
            foreach($source in $sources){
                $model->{{$source}} = WTFilter::filter($model->{{$source}});
            }
        }
        if(is_string($config["sources"])){
            $model->{{$source}} = WTFilter::filter($model->{{$source}});
        }
    }   
}
?>
