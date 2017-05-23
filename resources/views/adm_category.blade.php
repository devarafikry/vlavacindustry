@extends('layouts.panel')
@section('page_heading','Category')
@section('section')

            <!-- /.row -->
            <div class="col-sm-12">
            <div class="row">
              <button class="btn btn-success" data-toggle="modal" data-target="#myModal_add">Add Category</button>
              <table class="table table-hover">
                      <!-- looping daftar kategori di sini dit terus id nya kamu tambahin jadi "myModal_id"  -->
                  <thead>
                    <tr>
                      <th>Category Name</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Sofa</td>
                      <td><button class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#myModal">Edit</button>
                        <button class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#myModal_delete">Hapus</button></td>
                    </tr>
                    <tr>
                      <td>Kursi</td>
                      <td><button class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#myModal">Edit</button>
                        <button class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#myModal_delete">Hapus</button></td>
                    </tr>
                    <tr>
                      <td>Meja</td>
                      <td><button class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#myModal">Edit</button>
                        <button class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#myModal_delete">Hapus</button></td>
                    </tr>
                  </tbody>
                </table>
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
                                <h4 class="modal-title">Sofa</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                    <label for="usr">New Name:</label>
                                    <input type="text" class="form-control" id="usr">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="myModal_delete" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Sofa ?</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                    <p>Semua produk pada kategori ini akan terhapus </p>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Ya</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="myModal_add" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Category</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                    <label for="category">New Category :</label>
                                    <input type="text" class="form-control" id="category">
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
