@extends('layouts.header')
<style>
h4 {
    margin: 20px 10px 10px;
}
p {
    margin: 10px;
}
.black-background {background-color:#000000;}
.white {color:#ffffff;}

#carousel-example-generic {
    margin: 20px auto;
    width: 400px;
}

#carousel-custom {
    margin: 20px auto;
    width: 600px;
    height: 400px;
}
#carousel-custom .carousel-indicators {
    margin: 10px 0 0;
    overflow: auto;
    position: static;
    text-align: left;
    white-space: nowrap;
    width: 100%;
}
#carousel-custom .carousel-indicators li {
    background-color: transparent;
    -webkit-border-radius: 0;
    border-radius: 0;
    display: inline-block;
    height: 100px;
    margin: 0 !important;
    width: auto;
}
#carousel-custom .carousel-indicators li img {
    display: block;
    opacity: 0.5;
}
#carousel-custom .carousel-indicators li.active img {
    opacity: 1;
}
#carousel-custom .carousel-indicators li:hover img {
    opacity: 0.75;
}
#carousel-custom .carousel-outer {
    position: relative;
}
</style>

<div class="container" style="padding-top : 120px; margin-bottom: 20%;" >
<div class="row">
  <div class="col-md-8">
    <h6><a href={{url('/')}}>Home</a>-><a href={{url('/roomlist/livingroom/product')}}>Sofa</a></h6>
    <div id='carousel-custom'  class='carousel slide' data-ride='carousel'>
        <div class='carousel-outer'>
            <!-- Wrapper for slides -->
            <div class='carousel-inner'>
          
            @foreach($img as $imgsingle)
            @if($imgsingle == $img[0])
             <div class='item active'>
                    <img src={{asset('storage/'.$imgsingle->image)}}  alt='' />
                </div>
         
            @else
                      <div class='item '>
                    <img src={{asset('storage/'.$imgsingle->image)}} alt='' />
                </div>
            @endif
            @endforeach
            </div>

            <!-- Controls -->
            <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                    <span class="icon-prev"></span>
            </a>
            <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                    <span class="icon-next"></span>
            </a>
        </div>

        <!-- Indicators -->
        <ol class='carousel-indicators mCustomScrollbar'>
           <?php $i =1 ?>
            @foreach($img2 as $img2single)

            @if($img2single == $img2[0])
             <li data-target='#carousel-custom' data-slide-to='0' class='item active'>    <img src={{asset('storage/'.$img2single->image)}} alt='' width=150px height=100px /></li>
                  
            @else
         
               <li data-target='#carousel-custom' data-slide-to=<?php echo $i?> class="item"><img src={{asset('storage/'.$img2single->image)}} alt='' width=150px height=100px /></li>

            <?php $i = $i +1;?>
            @endif
            @endforeach
        </ol>
    </div>
  </div>
  <div class="col-md-4">
  @foreach($detail as $detail)
<h3>Product Name </h3>
<h4>{{$detail->nama}}</h4>
<h4>

</h4>
<hr>
<h3>Harga</h3>
<h4>Rp. {{number_format($detail->harga,0,",",".")}}</h4>
<hr>
<h3>Dimension</h3>
<h4>{{$detail->dimensi}}</h4>
<hr>
<h3>Material</h3>
<h4>{{$detail->material}}</h4>
<hr>
<h3>Description</h3>
<p>{{$detail->deskripsi}}
</p>
    @endforeach
<br>
<form action={{url('/addtocart/')}} method="post">
<input type="submit" class="btn btn-default" value="Add To Cart" style="color:white; width: 10em; background-color: #555555" />
</form>
  </div>
  <div class="col-md-2">
 

  </div>

</div>
</div>
@extends('layouts.footer')
