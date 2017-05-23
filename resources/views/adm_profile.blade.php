@extends('layouts.panel')
@section('page_heading','Vlavac Profile')
@section('section')

            <!-- /.row -->
            <div class="col-sm-12">
            <div class="row">
              <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Edit Profile</button>
              <center>
              <br><img src={{asset('storage/vlavac.png')}} height=150px width=150px alt='error' style="margin-right:25px">
            </center>
            <b><h4> Deskripsi : </h4></b>
            <p>Lorem ipsum dolor sit amet, his vocent luptatum delicata cu, ut utamur nonumes qui, quod voluptua electram qui ad. Magna facer explicari ne eam, nisl omittam vivendum ei sea, cu per omnes oblique. Usu nihil accusata et. Est id exerci debitis, verear dignissim nam an. Eu enim voluptua definitiones sea. Ea his nihil definiebas, minim populo efficiantur et vel, has ea docendi urbanitas. Iusto facilis albucius usu ut. Et veri platonem sententiae mei. Eligendi insolens has ex, id vix maiorum apeirian, quas consulatu referrentur eu sit. Eam et habeo interesset, augue denique vim ea, cum euripidis dissentias repudiandae in. Copiosae atomorum sea ei, est prima eleifend ne. Ut pro impetus temporibus.
            </p>

            <b><h4> Lokasi : </h4></b>
            <p> Jl. Mojokerto No.8, Gading Kasri, Klojen, Kota Malang, Jawa Timur 65115</p>
            <a> Lokasi Vlavac </a>

            <b><h4> Email : </h4></b>
            <p> vlavac@vlavac.com</p>
            <a> Instagram URL </a>
            <a> Facebook URL </a>
            <b><h4> Phone Number : </h4></b>
            <p> 0812381092489</p>

            </div>
            <!-- /.row -->
                        <!-- /.panel-footer -->
            </div>

                  <!-- Looping juga disini, terus id nya kamu tambahin jadi "myModal_id" -->
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Profile</h4>
                              </div>
                              <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Change Logo</button>
                                <div class="form-group">

                                    <label for="profile_description">Description :</label>
                                    <input type="text" class="form-control" value="Lorem ipsum dolor sit amet, his vocent luptatum delicata cu, ut utamur nonumes qui, quod voluptua electram qui ad. Magna facer explicari ne eam, nisl omittam vivendum ei sea, cu per omnes oblique. Usu nihil accusata et. Est id exerci debitis, verear dignissim nam an. Eu enim voluptua definitiones sea. Ea his nihil definiebas, minim populo efficiantur et vel, has ea docendi urbanitas. Iusto facilis albucius usu ut. Et veri platonem sententiae mei. Eligendi insolens has ex, id vix maiorum apeirian, quas consulatu referrentur eu sit. Eam et habeo interesset, augue denique vim ea, cum euripidis dissentias repudiandae in. Copiosae atomorum sea ei, est prima eleifend ne. Ut pro impetus temporibus." id="profile_description">

                                    <label for="profile_location">Lokasi :</label>
                                    <input type="text" class="form-control" value="Jl. Mojokerto No.8, Gading Kasri, Klojen, Kota Malang, Jawa Timur 65115" id="profile_location">

                                    <label for="profile_location_url">URL Google Maps :</label>
                                    <input type="text" class="form-control" value="www.sekiandanterimakasih" id="profile_location_url">

                                    <label for="profile_email">Email :</label>
                                    <input type="text" class="form-control" value="vlavac@vlavac.com" id="profile_email">

                                    <label for="profile_instagram">URL Instagram :</label>
                                    <input type="text" class="form-control" value="www.sekiandanterimakasih" id="profile_instagram">

                                    <label for="profile_facebook">URL Facebook :</label>
                                    <input type="text" class="form-control" value="www.sekiandanterimakasih" id="profile_facebook">

                                    <label for="profile_phone_number">Phone Number :</label>
                                    <input type="text" class="form-control" value="08128930740" id="profile_phone_number">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                    <!-- /.panel .chat-panel -->
                <!-- /.col-lg-4 -->

@stop
