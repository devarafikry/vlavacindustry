<!DOCTYPE html>
<
<style>
.image {
  display: block;
  width: 50%;
  height: 50%;
}
.caption {
  position: relative;
  width: 50%;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0%;
  right: 0;
  background-color: 	#C0C0C0;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.caption:hover .overlay {
  width: 40%;
  left: 0;
}

.text {
  white-space: nowrap;
  color: #222;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>
@extends('layouts.header')
<h2>Slide in Overlay from the Right</h2>
<p>Hover over the image to see the effect.</p>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide" style="height:80%">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="caption carousel-inner" >

            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
  <a href="/ds">
                <div class="fill" style="background-image:url(<?php echo asset('storage/livingroom.jpg')?>"></div>
                <div class="overlay">
                  <div class="text">CAROUSEL 1 DESCRIPTION</div>
                </div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="/ss">
                <!-- Set the second background image using inline CSS below. -->
                <div class=" fill" style="background-image:url(<?php echo asset('storage/bedroom.jpg')?>);">
                </div>
                <div class="overlay">
                  <div class="text">CAROUSEL 2 DESCRIPTION</div>
                </div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
          </a>
            <div class="item">
              <a href="/jj">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(<?php echo asset('storage/space.jpg')?>);"></div>
                <div class="overlay">
                  <div class="text">CAROUSEL 3 DESCRIPTION</div>
                </div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
              </a>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
              <br><br>
                <h4>New</h4><?php
                for ($i=1; $i<5 ; $i++) {
                  ?><a href={{url('/product/id')}}>
                  <div class="card">
                  <img src={{asset('storage/sofas.jpg')}} height=200px width=200px alt='error' style="margin-right:25px">
                    <div >
                      <center>
                      <h4 style="padding-bottom:10px"><b>Sofa</b></h4>
                     <p>Architect & Engineer</p>
                     <p>Rp.1.600.000</p>
                       <img src="{{asset('storage/star.jpg')}}" height=50px>
                    </center>
                    </div>
                  </div>
                </a>
                  <?php
                  if($i%5==0){?>
                      <br><br>
                    <?php
                  }
                }
                ?>
            </div>
              <hr>

            <div class="col-lg-12 "><br><br>
                <h4>Best Seller</h4>
                <?php
                for ($i=1; $i<5 ; $i++) {
                  ?><a href={{url('/product/id')}}>
                  <div class="card">
                  <img src={{asset('storage/sofas.jpg')}} height=200px width=200px alt='error' style="margin-right:25px">
                    <div >
                      <center>
                      <h4 style="padding-bottom:10px"><b>Sofa</b></h4>
                     <p>Architect & Engineer</p>
                     <p>Rp.1.600.000</p>
                       <img src="{{asset('storage/star.jpg')}}" height=50px>
                    </center>
                    </div>
                  </div>
                </a>
                  <?php
                  if($i%5==0){?>
                      <br><br>
                    <?php
                  }
                }
                ?>
            </div>
            <hr>

            <div class="col-lg-12"><br><br><br><br>
                <center><h2>Our Activity</h2><center>
                  <br><br>
                  <center>
                    <ul class="nav navbar-nav center">
                      <div class="col-md-4"><li style="margin-left:30px" >
                          <center><a href="#"><img src={{asset('storage/news1.png')}} height=200px width=300px alt='error'><center> <br>54 Personil Keamanan Dilibatkan dalam Brawijaya Bersholawat Bersama Kyai Kanjeng</a> <br><br> Universitas Brawijaya (FT UB.
Diikuti 92 tim dari 40 perguruan tinggi negeri dan swasta serta melibatkan 558 peserta, ajang kontes robot tahunan regional IV ini menjadi sorotan karena banyak juara nasional KRI berkumpul. </center>
                      </li>
                      </div>
                      <div class="col-md-4"><li style="margin-left:30px">
                          <center><a href="#"><img src={{asset('storage/news2.png')}}  height=200px width=300px alt='error'> <center> <br>54 Personil Keamanan Dilibatkan dalam Brawijaya Bersholawat Bersama Kyai Kanjeng</a> <br><br> Universitas Brawijaya (FT UB.
Diikuti 92 tim dari 40 perguruan tinggi negeri dan swasta serta melibatkan 558 peserta, ajang kontes robot tahunan regional IV ini menjadi sorotan karena banyak juara nasional KRI berkumpul. </center>
                      </li>
                      </div>
                      <div class="col-md-4">  <li style="margin-left:30px">
                            <center><a href="#"><img src={{asset('storage/news3.png')}}  height=200px width=300px alt='error'><center> <br>54 Personil Keamanan Dilibatkan dalam Brawijaya Bersholawat Bersama Kyai Kanjeng</a> <br><br> Universitas Brawijaya (FT UB.
  Diikuti 92 tim dari 40 perguruan tinggi negeri dan swasta serta melibatkan 558 peserta, ajang kontes robot tahunan regional IV ini menjadi sorotan karena banyak juara nasional KRI berkumpul. </center>
                        </li>
                      </div>
                    </ul>
              </center>
            </div>
            <hr>

        </div>


    </div>
    <!-- /.container -->
  @extends('layouts.footer')
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
