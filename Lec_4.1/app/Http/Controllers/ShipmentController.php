<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShipmentController extends Controller
{
    function getShipments(){
        $result =  DB::table('shipments AS s')
        ->select('s.id AS shipmentId', 'su.name AS supplierName', DB::raw('COUNT(sm.id) AS medsCount'), DB::raw('SUM(sm.buyingPricePerUnit * sm.amount) AS totalCost'))
        ->join('suppliers AS su', 's.supplier_id', '=', 'su.id')
        ->join('shipment_meds AS sm', 's.id', '=', 'sm.shipment_id')
        ->join('meds AS m', 'sm.med_id', '=', 'm.id')
        ->groupBy('s.id', 'su.name')
        ->get();

        return view('pages/shipments', ['shipments' => $result]);
    }
}
