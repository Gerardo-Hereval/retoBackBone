<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;


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
        $zp= array("zip_code" => $zip[0]->d_codigo,
            "locality" => $zip[0]->d_estado,
            "federal_entity" => array("key" => $zip[0]->c_estado,
                "name" => $zip[0]->d_ciudad,
                "code" => $zip[0]->c_CP));
        //lo ingresamos a un for por los codigos postales que tienen más asentamientos
        for ($i = 0, $long = count($zip); $i < $long; ++$i) {
            $zp1[$i] = array("key" => $zip[$i]->id_asenta_cpcons,
                "name" => $zip[$i]->d_asenta,
                "zona_type" => $zip[$i]->d_zona,
                "senttlement_type" => array("name" => $zip[$i]->d_tipo_asenta));
        };
        //continuamos obteniendo la data en otro array
        $zp2=array("municipality" => array("key" => $zip[0]->c_mnpio, "name" => $zip[0]->D_mnpio));
        //mandamos como reponse el json de la información obtenida de la base de dato
        $zip_code= $zp + array("settlements"=>$zp1) + $zp2;
        return $zip_code;
    }
}
