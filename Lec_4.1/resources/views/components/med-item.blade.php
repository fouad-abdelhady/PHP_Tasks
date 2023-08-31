<link href="{{ asset('css\meds\meds.css') }}" rel="stylesheet">
<section class="medsList">
   @foreach($meds as $medItem)
   <div class="medItem">
      <h2>{{$medItem->name}}</h2>
      <div class="medDetails">
         <div class="itemDetail">
            <h3>Amount</h3>
            <h3>{{$medItem->amount}}</h3>
         </div>
         <div class="itemDetail">
            <h3>Unites in Packet</h3>
            <h3>{{$medItem->unitsPerPacket}}</h3>
         </div>
         <div class="itemDetail">
            <h3>Price per unit</h3>
            <h3>{{$medItem->sellingPricePerUnit}}</h3>
         </div>
         <div class="itemDetail">
            <h3>Price per packet</h3>
            <h3>{{$medItem->totalPricePerPacket	}}</h3>
         </div>
      </div>
   </div>
   @endforeach
</section>