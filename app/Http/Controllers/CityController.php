<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller{

    /*
        @fn: readCity
        @params: -
        @return: Muestra todos los datos de la tabla ciudad en formato json
    */
    public function readCity(){
       $infoCity = City::all();
       return response()->json($infoCity);
    }


     /*
        @fn: saveCity
        @params: Objeto $request
        @return: Se insertan datos a la tabla ciudades de la base de datos.
    */
    public function saveCity(Request $request){
        $saveInfo = new City();
        $saveInfo->name = $request->name;
        $saveInfo->country = $request->country;
        $saveInfo->latitude = $request->latitude;
        $saveInfo->longitude = $request->longitude;
        $saveInfo->score = $request->score;
        $saveInfo->save();
        return response()->json($request);

    }


    /*
        @fn: getID
        @params: ID ciudad
        @return: Se busca obtener un dato en especifico enviando como dato su Identificador
    */
    public function getID($id){
       $idInfo = City::find($id);
       return response()->json($idInfo);
    }


    /*
        @fn: deleteCity
        @params: ID 
        @return: Mediante esta función se busca elimiar un registro en especifico gracias al id especificado.
    */
    public function deleteCity($id){
        $infoCity = City::find($id);
        $infoCity->delete();
        return response()->json("Dato eliminado con correctamente");
     }
    


    /*
        @fn: updateCity
        @params: ID 
        @return: Mediante esta función se busca elimiar un registro en especifico gracias al id especificado.
    */
    public function updateCity(Request $request, $id){
        $updateCity = City::find($id);
        $updateCity->name = $request->input('name');
        $updateCity->country = $request->input('country');
        $updateCity->latitude = $request->input('latitude');
        $updateCity->longitude = $request->input('longitude');
        $updateCity->score = $request->input('score');

        return response()->json("Datos actualizados correctamente");
     }

}//end class
