<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BuildMall;
use League\Csv\Reader;
use League\Csv\Stream;
use League\Csv\Statement;

class BuildMallApiController extends Controller
{
   /**
     * @OA\Info(version="1.1",title="прежде чем пользоваться Апи используй /api/parser/run - это запустит парсер и создаст БД ")
     *    
     * @OA\Get(
     *     path="/api/parser/run", 
     *     summary="запускает парсер с файла и сохраняет данные в базу данных",
     *     @OA\Response(
     *         response=200,
     *         description="ok"
     *     )      
     *) 
     */
    public function parserRun()
    {
        $path_destination = storage_path() . '/files/parserlar.csv';

        $reader = Reader::createFromPath($path_destination, 'r');
        $reader->setHeaderOffset(0);
        $reader->setDelimiter(";");
        
        foreach ($reader as $read => $data) {

            $data["Описание,,,,,,,,,,,,,,,,,,,,,,"] = str_replace([';',',', '\\'], '', $data["Описание,,,,,,,,,,,,,,,,,,,,,,"]);
            $unit = new BuildMart;
            $unit->code = $data["Код"];
            $unit->title = $data["Наименование"];
            $unit->level1 = $data["Уровень1"];
            $unit->level2 = $data["Уровень2"];
            $unit->level3 = $data["Уровень3"];
            $unit->price = $data["Цена"];
            $unit->priceSP = $data["ЦенаСП"];
            $unit->count = $data["Количество"];
            $unit->properties = $data["Поля свойств"];
            $unit->additionalBuy = $data["Совместные покупки"];
            $unit->dimension = $data["Единица измерения"];
            $unit->image = $data["Картинка"];
            $unit->isMainPage = $data["Выводить на главной"];
            $unit->description = $data["Описание,,,,,,,,,,,,,,,,,,,,,,"];
            $unit->save();
        }
    }

      /**    
     * @OA\Get(
     *     path="/api/get/all", 
     *     summary="покажет все материалы какие есть в базе данных",
     *     @OA\Response(
     *         response=200,
     *         description="successfully"
     *     )      
     *) 
     */
    public function getAll()
    {
        $buildMaterials = BuildMall::all();

        return response()->json($buildMaterials);
    }

      /**    
     * @OA\Get(
     *     path="/api/get", 
     *     summary="показать материал по айди",
     *     @OA\Parameter(
     *     name="id",
     *     in="query",
     *     description="id for need material",
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="ok"
     *     )      
     *) 
     */
    public function getOne(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer'
        ]);

        $material = BuildMall::find($request->id);

        return response()->json($material);
    }
}
