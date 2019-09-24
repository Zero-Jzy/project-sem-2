
    <p>You have checked out successfully.</p>
    <p>Receiver : {{$order->name}}</p>
    <p>Address : {{$order->addressTxt}}</p>
    <p>Phone : {{$order->phone}}</p>
    @foreach($list as $item)
        <p>{{$item['name']}}</p>
        <img src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/{{$item['image']}}">
    @endforeach
    <p>tien : {{$amount}}</p>
