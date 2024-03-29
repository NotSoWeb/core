<?php namespace Notsoweb\Core\Http\Traits\Catalogs;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

 /**
 * Extensión de los enums
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.1
 */
trait Extended
{
    /**
     * Obtener todos los registros en un array
     * 
     * Regresa los registros de la forma valor descripción. Requiere la existencia de la función
     * asModel() que retorna un array con los datos de una instancia.
     */
    public static function all()
    {
        $cases = static::cases();
        $models = [];

        foreach ($cases as $case) {
            $models[] = $case->asModel();
        }

        return $models;
    }

    /**
     * Obtener todos los registros en un array excepto el pasado
     */
    public static function allExcept($key)
    {
        $cases = static::cases();
        $models = [];

        foreach ($cases as $case) {
            if($case != $key){
                $models[] = $case->asModel();
            }
        }

        return $models;
    }
}