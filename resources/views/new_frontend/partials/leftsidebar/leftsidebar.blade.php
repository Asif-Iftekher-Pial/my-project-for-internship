<div id="sidebar" class="span3">
    <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="/fronendCSS_JS_files/themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
    <ul id="sideManu" class="nav nav-tabs nav-stacked">

        {{-- @dd($catagory_names); --}}
        <li class="subMenu open"><a> Building Materials</a>
            <ul>
                @foreach($catagorylist as $data )
                
                <li><a href="{{ Route('catagorizedproduct',$data->id )}}"><i class="icon-chevron-right"></i>{{ $data->catagoryname }}</a></li>
            
                @endforeach
            </ul>
        </li>
        <li class="subMenu"><a> CLOTHES [840] </a>
        <ul style="display:none">
            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
        </ul>
        </li>
        <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
            <ul style="display:none">
            <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
            <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
            <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
            <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
            <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
            <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
            <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
            <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
        </ul>
        </li>
        <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
        <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
        <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
    </ul>
    <br/>
      <br/>
        
        <div class="thumbnail">
            <img src="/fronendCSS_JS_files/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
            <div class="caption">
              <h5>Payment Methods</h5>
            </div>
        </div>
</div>