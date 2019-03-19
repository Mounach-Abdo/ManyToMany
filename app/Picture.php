<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public function aticle()
    {
        return $this->belonsTo('App\Article');
    }
  
    public static function store($request, $id) 
    {
        if($request->hasFile('img')){
            $file=$request->file('img')->store('pictures','public');
            $picture = new Picture();
            //$picture->name =$request->file('picture')->path;
            $picture->name= 'photo';
            $picture->extention=$request->img->extension();
            $picture->path = $file;
            $picture->article_id=$id;
            $picture->save();
        }
       return $picture;
    }


}
