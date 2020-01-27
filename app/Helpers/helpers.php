<?php 
namespace App\Helpers;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function get_roles($id, $column) 
    {
        foreach(config('app.roles') as $Role) {
            if ($id == $Role['id']) {
                return $column ? $Role[$column] : $column;
            }
        }
        return $id;
    }
}