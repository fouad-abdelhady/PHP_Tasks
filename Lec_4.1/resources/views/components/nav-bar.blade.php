<link href="{{ asset('css\common\nav-bar.css') }}" rel="stylesheet">
<nav id="navBar">
    <a href="/meds"class = {{$current == 'Medicines'? 'selected': ''}}>Medicines</a>
    <a href="/shipments"class = {{$current == 'Shipments'? 'selected': ''}}>Shipments</a>
    <a href="/suppliers"class = {{$current == 'Suppliers'? 'selected': ''}}>Suppliers</a>
</nav>

<header>
    <h1>{{$current}}</h1>
</header>