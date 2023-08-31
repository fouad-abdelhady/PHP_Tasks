<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css\shipments.css') }}" rel="stylesheet">
    <title>Shipments</title>
</head>
<body>
    <x-NavBar current="Shipments"/>
    <section class="shipmentsContainer">
        @foreach($shipments as $shipment)
        <div class="shipmentItem">
            <h2>{{$shipment->supplierName}}</h2>
            <div class="shipmentDetails">
                <div class="shipmentDetail">
                    <h3>Medicines Count: </h3>
                    <h3>{{$shipment->medsCount}}</h3>
                </div>
                <div class="shipmentDetail">
                    <h3>Total Value: </h3>
                    <h3>{{$shipment->totalCost}} $</h3>
                </div>
            </div>
        </div>

    @endforeach
    </section>
</body>
</html>