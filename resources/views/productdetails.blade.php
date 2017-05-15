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

<div class="container" style="padding-top : 120px">
<div class="row">
  <div class="col-md-8">
    <h6><a href={{url('/')}}>Home</a>-><a href={{url('/roomlist/livingroom/product')}}>Sofa</a></h6>
    <div id='carousel-custom'  class='carousel slide' data-ride='carousel'>
        <div class='carousel-outer'>
            <!-- Wrapper for slides -->
            <div class='carousel-inner'>
                <div class='item active'>
                    <img src={{asset('storage/sf2.jpeg')}} alt='' />
                </div>
                <div class='item'>
                    <img src={{asset('storage/sf1.jpeg')}}  alt='' />
                </div>
                <div class='item'>
                    <img src={{asset('storage/sf2.jpeg')}} alt='' />
                </div>

                <div class='item'>
                    <img src={{asset('storage/sf1.jpeg')}}  alt='' />
                </div>
                <div class='item'>
                    <img src={{asset('storage/sf2.jpeg')}} alt='' />
                </div>
                <div class='item'>
                    <img src={{asset('storage/sf1.jpeg')}} alt='' />
                </div>

                <div class='item'>
                    <img src={{asset('storage/sf2.jpeg')}} alt='' />
                </div>
                <div class='item'>
                    <img src={{asset('storage/sf1.jpeg')}}  alt='' />
                </div>
                <div class='item'>
                    <img src={{asset('storage/sf2.jpeg')}}  alt='' />
                </div>
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
            <li data-target='#carousel-custom' data-slide-to='0' class='active'>    <img src={{asset('storage/sf2.jpeg')}} alt='' width=150px height=100px /></li>
            <li data-target='#carousel-custom' data-slide-to='1'><img src={{asset('storage/sf1.jpeg')}} alt='' width=150px height=100px /></li>
            <li data-target='#carousel-custom' data-slide-to='2'> <img src={{asset('storage/sf2.jpeg')}} alt='' width=150px height=100px /></li>
            <li data-target='#carousel-custom' data-slide-to='3'><img src={{asset('storage/sf1.jpeg')}} alt='' width=150px height=100px /></li>
            <li data-target='#carousel-custom' data-slide-to='4'> <img src={{asset('storage/sf2.jpeg')}} alt='' width=150px height=100px /></li>
            <li data-target='#carousel-custom' data-slide-to='5'><img src={{asset('storage/sf1.jpeg')}} alt='' width=150px height=100px /></li>
            <li data-target='#carousel-custom' data-slide-to='6'> <img src={{asset('storage/sf2.jpeg')}} alt='' width=150px height=100px /></li>
            <li data-target='#carousel-custom' data-slide-to='7'> <img src={{asset('storage/sf1.jpeg')}} alt='' width=150px height=100px /></li>
            <li data-target='#carousel-custom' data-slide-to='8'> <img src={{asset('storage/sf2.jpeg')}} alt='' width=150px height=100px /></li>
        </ol>
    </div>
  </div>
  <div class="col-md-4">
<h3>Product Name </h3>
<h4>Rp. 1.500.000,00 </h4>
<hr>
<h3>Dimension</h3>
<h4>90 x 80 x 2000 cm</h4>
<hr>
<h3>Material</h3>
<h4>Wood</h4>
<h4>Stainless Steel</h4>
<hr>
<h3>Description</h3>
<p>Lorem ipsum dolor sit amet, ex corpora laboramus abhorreant mei. Solum lucilius elaboraret no cum, sit at perfecto interpretaris. Wisi interpretaris eos ei, an eum posse dissentias adversarium. Pri no paulo similique, verterem scripserit an est.
Sed ea tation sanctus probatus, sit movet nonumy vituperatoribus ea, ut amet ceteros temporibus pri. An eum tincidunt consectetuer, id quo nibh iusto euripidis, duo nostro virtute fierent ad. Senserit maluisset necessitatibus ex eos. Cu mea amet maiestatis. Id sea labore molestie. Eum novum legimus graecis no.
</p>
<br>
<form action={{url('/addtocart/')}} method="post">
<input type="submit" class="btn btn-default" value="Add To Cart" style="color:white; width: 10em; background-color: #555555" />
</form>
  </div>

</div>
</div>
@extends('layouts.footer')
