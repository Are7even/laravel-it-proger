<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    public static function add(array $options = [])
    {
        $model = new self();
        $model->name = $options['name'];
        $model->email = $options['email'];
        $model->subject = $options['subject'];
        $model->message = $options['message'];
        return $model->save();
    }

    public static function updateMessage($id ,array $options = [])
    {
        $model = self::getById($id);
        $model->name = $options['name'];
        $model->email = $options['email'];
        $model->subject = $options['subject'];
        $model->message = $options['message'];
        return $model->save();
    }

    public static function getById($id)
    {
        //$model = new self();
        return self::find($id);
    }

}
