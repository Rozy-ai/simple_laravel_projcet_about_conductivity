<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThermalConductivityController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function calculate(Request $request)
    {
        function calculateConductivity($temp1, $temp2, $length, $area, $heat_flow) {

            if($length === 0 || $length == null || $length === '0'){
                return "Don't division by zero";
            }

            // Градиент температуры (изменение температуры на единицу длины)
            $temp_gradient = ($temp2 - $temp1) / $length;
            
            // Рассчитаем коэффициент теплопроводности, используя закон Фурье
            if($area * $temp_gradient == 0){
                return "Don't division by zero";
            }

            $conductivity = -$heat_flow / ($area * $temp_gradient);
            
            return "Coefficient of thermal conductivity: " . $conductivity . " W/(m K)";

        }
        // Входные данные
        $temp1 = $request->first_end; // Температура на первом конце стержня (в градусах Цельсия)
        $temp2 = $request->second_end; // Температура на втором конце стержня (в градусах Цельсия)
        $length = $request->length; // Длина стержня (в метрах)
        $area = $request->area; // Площадь поперечного сечения стержня (в квадратных метрах)
        $heat_flow = $request->flow; // Тепловой поток (в ваттах)

        
        // Рассчитайте теплопроводность
        $conductivity = calculateConductivity($temp1, $temp2, $length, $area, $heat_flow);
        
        // Вывод коэффициента теплопроводности
        return view('calculate', ['result' => $conductivity]);
    }
}
