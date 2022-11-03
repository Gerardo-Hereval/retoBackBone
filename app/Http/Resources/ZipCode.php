<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\DB;


class ZipCode extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $zip = $this->collection;
        //obtenemos la informacion de la base de datos y empezamos a organizar el json mediante arrays
        $data= array("zip_code" => $zip[0]->zip_code,
            "locality" => $zip[0]->ciudad,
            "federal_entity" => array("key" => $zip[0]->clave_entidad,
                "name" => $zip[0]->entidad,
                "code" => $zip[0]->cp_vacio));
        //lo ingresamos a un for por los codigos postales que tienen más asentamientos
        for ($i = 0, $long = count($zip); $i < $long; ++$i) {
            $data1[$i] = array("key" => $zip[$i]->identificador_uni_asent,
                "name" => $zip[$i]->asentamiento,
                "zona_type" => $zip[$i]->zona_ubi_asent,
                "senttlement_type" => array("name" => $zip[$i]->tipo_asentamiento));
        };
        //continuamos obteniendo la data en otro array
        $data2=array("municipality" => array("key" => $zip[0]->clave_municipio, "name" => $zip[0]->municipio));
        //creamos una variable con las arrays para imprimirlo
        $zip_code = $data + array("settlements"=>$data1) + $data2;
        //mandamos como reponse el json de la información obtenida de la base de dato

        return $zip_code;
    }
}
