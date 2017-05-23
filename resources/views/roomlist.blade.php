@extends('layouts.header')
<!-- Page Content -->
<div class="container" style="padding-top : 120px;margin-bottom: 7%;">
  <div class="row">
    <div class="col-sm-4">
<h6><a href={{url('/')}}>Home</a>-><a>{{$room_name}}</a></h6>
<br><br>
<a><h4>Living Room</a></h4>
<a>Bed Room</a> <br>
<a>Dining Room</a><br>
<a>Business Room</a><br>
<a>Kitchen</a>
    </div>
    <div class="col-sm-8">
        <h3> {{$room_name}} </h3>
        <hr>
        <?php
        if($room_name == 'Living Room'){
          $room_name = "livingroom";
        } else if($room_name == 'Bed Room'){
          $room_name = "bedroom";
        } else if($room_name == 'Dining Room'){
          $room_name = "diningroom";
        } else if($room_name == 'Business Space'){
          $room_name = "businessspace";
        } else if($room_name == 'Kitchen'){
          $room_name = "kitchen";
        }
        else if($room_name == 'New'){
          $room_name = "new";
        } else if($room_name == 'Best Seller'){
          $room_name = "bestseller";
        }
          for ($i=1; $i<10 ; $i++) {
            ?><a href={{url('/roomlist/'.$room_name.'/sofa')}}>
            <div class="card">
            <img src={{asset('storage/sofas.jpg')}} height=200px width=200px alt='error' style="margin-right:25px">
              <div >
                <center>
                <h4 style="padding-bottom:10px"><b>Sofa</b></h4>
              </center>
              </div>
            </div>
          </a>
            <?php
            if($i%3==0){?>
                <br><br>
              <?php
            }
          }
        ?>
    </div>
  </div>



</div>
@extends('layouts.footer')
