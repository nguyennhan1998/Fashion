@php
    $myCart = session()->has("my_cart")?session("my_cart"):[];
    $count_item  = count($myCart);
    $productIds = [];
    foreach ($myCart as $item){
        $productIds[] = $item["product_id"];
    }
    $grandTotal = 0;
    $products = \App\Product::find($productIds);
    foreach ($products as $p){
        foreach ($myCart as $item){
            if($p->__get("id") == $item["product_id"])
                $grandTotal += ($p->__get("price")*$item["qty"]);
        }
    }
@endphp
<a href="{{asset("{{url("/shopping-cart)}}" class="card-bag"><img src="{{asset("img/icons/bag.png")}}" alt=""><span>{{$count_item}}</span></a>
