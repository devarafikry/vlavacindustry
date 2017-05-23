@extends('layouts.panel')
@section('page_heading','Landing')
@section('section')

            <!-- /.row -->
            <div class="col-sm-12">
            <div class="row">
            <h2> Landing 1</h2>
            <button class="btn btn-success" data-toggle="modal" data-target="#landing_1">Edit Landing 1</button><br><br>
            <img src={{asset('storage/livingroom.jpg')}} height=250px  alt='error' style="margin-right:25px">
            <h3>Description :</h3>
            <p> Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
              Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
              Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
              Lorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
              <h3>URL Link :</h3>
              <a>Landing 1 Url</a>

              <hr>
              <h2> Landing 2</h2>
              <button class="btn btn-success" data-toggle="modal" data-target="#landing_1">Edit Landing 2</button><br><br>
              <img src={{asset('storage/bedroom.jpg')}} height=250px  alt='error' style="margin-right:25px">
              <h3>Description :</h3>
              <p> Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
                Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
                Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
                Lorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
                <h3>URL Link :</h3>
                <a>Landing 2 Url</a>

                <hr>
                <h2> Landing 3</h2>
                <button class="btn btn-success" data-toggle="modal" data-target="#landing_1">Edit Landing 3</button><br><br>
                <img src={{asset('storage/space.jpg')}} height=250px  alt='error' style="margin-right:25px">
                <h3>Description :</h3>
                <p> Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
                  Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
                  Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
                  Lorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
                  <h3>URL Link :</h3>
                  <a>Landing 3 Url</a>

                  <hr>
            </div>
            <!-- /.row -->
                        <!-- /.panel-footer -->
            </div>


                        <!-- Modal -->
                        <div id="landing_1" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Landing 1 Edit</h4>
                              </div>
                              <div class="modal-body">
                                <button class="btn btn-danger" >Upload Image</button>
                                <div class="form-group">
                                    <label for="landing1_description">Description :</label>
                                    <input type="text" class="form-control" id="landing1_description">
                                    <label for="landing1_url">URL Link :</label>
                                    <input type="text" class="form-control" id="landing1_url">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div id="landing_2" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Landing 2 Edit</h4>
                              </div>
                              <div class="modal-body">
                                <button class="btn btn-danger" >Upload Image</button>
                                <div class="form-group">
                                    <label for="landing2_description">Description :</label>
                                    <input type="text" class="form-control" id="landing2_description">
                                    <label for="landing1_url">URL Link :</label>
                                    <input type="text" class="form-control" id="landing2_url">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div id="landing_3" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Landing 3 Edit</h4>
                              </div>
                              <div class="modal-body">
                                <button class="btn btn-danger" >Upload Image</button>
                                <div class="form-group">
                                    <label for="landing3_description">Description :</label>
                                    <input type="text" class="form-control" id="landing3_description">
                                    <label for="landing3_url">URL Link :</label>
                                    <input type="text" class="form-control" id="landing1_url">
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
