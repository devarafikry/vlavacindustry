@extends('layouts.header')
<!-- Page Content -->
<div class="container" style="padding-top : 120px">
	<?php   if($room_name == 'Living Room'){
			$room = "livingroom";
		} else if($room_name == 'Bed Room'){
			$room = "bedroom";
		} else if($room_name == 'Dining Room'){
			$room = "diningroom";
		} else if($room_name == 'Business Space'){
			$room = "businessspace";
		} else if($room_name == 'Kitchen'){
			$room = "kitchen";
		}
		?>
  <div class="row"> <h6><a href="{{url('/')}}">Home</a>-><a href="{{url('/roomlist/'.$room)}}">{{$room_name}}</a>-><a>{{$category}}</a></h6>
				<div class="col-sm-4 " style="margin-top: 35px;">
				 <nav class="navbar navbar-default navbar-fixed-side" style="width: 300px;">
				 <div style="margin-left: 15px;">
					<left>
				<b><H4>Kursi</H4></b>
				<hr>
					<h5><a href="#">Kursi</a></h5>
					<h5><a href="#">Meja</a></h5><br>
					<hr>
					<h4>Harga</h4>
					<hr>
					
					<div class="tes">
						<div style="width: 120px; display: inline-block;" >

							<div class="input-group input-group-sm">
						<span class="input-group-addon" id="sizing-addon3">Rp.</span>
						<input type="text" class="form-control" placeholder="min" aria-describedby="sizing-addon3">
					</div>

					</div>
					<label class="connector">ke</label>
					<div style="width: 120px; display: inline-block;">
					<div class="input-group input-group-sm">
						<span class="input-group-addon" id="sizing-addon3">Rp.</span>
						<input type="text" class="form-control" placeholder="max" aria-describedby="sizing-addon3">
					</div>
					</div>
					</div>
					<button  class="btn btn-default" style="width:auto"> Filter </button>
					<br>
					<hr>

					</left>

				 </div>

					</nav>

				</div>
    <div class="col-sm-8">
			<div class="btn-group">
			  <button type="button" style="width:100px" class="btn btn-default btn-xs  dropdown-toggle" data-toggle="dropdown">Sort By <span class="caret"></span>
							    <span class="sr-only">Toggle Dropdown</span></button>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a href="#">Harga Termurah</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="#">Harga Termahal</a></li>

			    <li role="separator" class="divider"></li>
			    <li><a href="#">Rating</a></li>
			  </ul>
			</div>
        <hr>
       @foreach($product as $product)
	
		<a href={{url('/product/'.$product->id)}}>
            <div class="card">
            <img src={{asset('storage/'.$product->img)}} height=200px width=200px alt='error' style="margin-right:25px">
              <div >
                <center>
                <h4 style="padding-bottom:10px"><b>{{$product->nama}}</b></h4>
							 <p>Architect & Engineer</p>
							 <p>Rp. {{number_format($product->harga,0,",",".")}}</p>
								 <img src="{{asset('storage/star.jpg')}}" height=50px>
              </center>
              </div>
            </div>
          </a>
            <?php
            if(count($product)>3){?>
                <br><br>
              <?php
            }
          
        ?>
        	@endforeach
    </div>
  </div>



</div>
@extends('layouts.footer')
