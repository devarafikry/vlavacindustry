@extends('layouts.header')
<!-- Page Content -->

<div class="container" style="padding-top : 120px">
  <div class="row">    <h6><a href="{{url('/')}}">Home</a>-><a>Add To Cart</a></h6>

    <div class="col-sm-8 col-sm-offset-2" style="  min-height:100%;">

      <table class="table">
         <thead>
           <tr>
             <th>Image</th>
             <th>Name</th>
             <th>Quantity</th>
             <th>Price</th>
             <th>Total Price</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>  <img src={{asset('storage/sofas.jpg')}} height=100px width=100px alt='error' style="margin-right:0px"></td>
             <td>Sofa Bagus</td>
             <td>5</td>
             <td>Rp 5.000.000</td>
             <td>Rp. 25.000.000</td>
           </tr>
           <tr>
             <td>  <img src={{asset('storage/sofas.jpg')}} height=100px width=100px alt='error' style="margin-right:0px"></td>
             <td>Sofa Bagus</td>
             <td>5</td>
             <td>Rp 5.000.000</td>
             <td>Rp. 25.000.000</td>
           </tr>
           <tr>
             <td>  <img src={{asset('storage/sofas.jpg')}} height=100px width=100px alt='error' style="margin-right:0px"></td>
             <td>Sofa Bagus</td>
             <td>5</td>
             <td>Rp 5.000.000</td>
             <td>Rp. 25.000.000</td>
           </tr>
         </tbody>
       </table>
       <hr>
       <p style="text-align:right"><h4 style="text-align:right">Total : Rp 75.000.000</h4></p>

  <br><br>
       <p style="text-align:center">Sebelum melanjutkan anda wajib membaca prosedur pembelian produk dari vlavac industry yang terdapat pada halaman <a>ini</a>.
         Untuk menambah produk lain, klik tombol "Continue Shopping". Untuk melanjutkan kan pembelian, klik tombol "Checkout".</p><br><br>
              <input type="submit" class="btn btn-default pull-right" value="Checkout" style="color:white; width: 10em; background-color: #555555; padding-right:10px"/>
              <input type="submit" class="btn btn-default pull-right" value="Continue Shopping" style=" width: 10em;"/>
    </div>

  </div>



</div>
@extends('layouts.footer')
