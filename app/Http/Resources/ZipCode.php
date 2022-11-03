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
        $data= array("zip_code" => $zip[0]->d_codigo,
            "locality" => $zip[0]->d_estado,
            "federal_entity" => array("key" => $zip[0]->c_estado,
                "name" => $zip[0]->d_ciudad,
                "code" => $zip[0]->c_CP));
        //lo ingresamos a un for por los codigos postales que tienen más asentamientos
        for ($i = 0, $long = count($zip); $i < $long; ++$i) {
            $data1[$i] = array("key" => $zip[$i]->id_asenta_cpcons,
                "name" => $zip[$i]->d_asenta,
                "zona_type" => $zip[$i]->d_zona,
                "senttlement_type" => array("name" => $zip[$i]->d_tipo_asenta));
        };
        //continuamos obteniendo la data en otro array
        $data2=array("municipality" => array("key" => $zip[0]->c_mnpio, "name" => $zip[0]->D_mnpio));
        //creamos una variable con las arrays para imprimirlo
        $zip_code = $data + array("settlements"=>$data1) + $data2;
        //mandamos como reponse el json de la información obtenida de la base de dato

        return $zip_code;
    }
}
