@extends('layouts.panel')
@section('page_heading','Product')
@section('section')

            <!-- /.row -->
            <div class="col-sm-12">
            <div class="row">
              <button class="btn btn-success" data-toggle="modal" data-target="#myModal_add">Add Product</button>
              <table class="table table-hover">
                      <!-- looping daftar kategori di sini dit terus id nya kamu tambahin jadi "myModal_id"  -->
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Category</th>
                      <th>Room</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Sofa Xtreme</td>
                      <td>Sofa</td>
                      <td>Living Room, Bedroom</td>
                      <td><button class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#myModal">Edit</button>
                        <button class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#myModal_delete">Hapus</button></td>
                    </tr>
                    <tr>
                      <td>Kursi Xtreme</td>
                      <td>Kursi</td>
                      <td>Living Room, Bedroom</td>
                      <td><button class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#myModal">Edit</button>
                        <button class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#myModal_delete">Hapus</button></td>
                    </tr>
                    <tr>
                      <td>Meja Xtreme</td>
                      <td>Meja</td>
                      <td>Living Room, Bedroom</td>
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
                                    <label for="product_name">Product Name :</label>
                                    <input type="text" class="form-control" value="Sofa" id="product_name" >
                                    <!-- Looping cateogry disini -->
                                    <label for="sel1">Product Category :</label>
                                     <select class="form-control" id="product_category">
                                       <option>Sofa</option>
                                       <option>Kursi</option>
                                       <option>Meja</option>
                                       <option selected>Lampu</option>
                                     </select>

                                    <label for="product_name">Product Description :</label>
                                    <input type="text" class="form-control" value="Sofa adalah..." id="product_name" >

                                    <label for="product_name">Product Price :</label>
                                    <input type="text" class="form-control" value="Rp 900.000" id="product_name" >

                                    <label for="product_name">Product Dimension :</label>
                                    <input type="text" class="form-control" value="10 x 10 x 10 cm" id="product_name" >

                                    <label for="product_name">Product Material :</label>
                                    <input type="text" class="form-control" value="Wooden PC" id="product_name" >

                                    <label for="product_name">Product Rating :</label>
                                    <input type="text" class="form-control" value="5" id="product_name" >
                                </div>
                                <b> Room :</b> <br>
                                <label class="checkbox-inline"><input type="checkbox" checked="checked" value="">Living Room</label>
                                <label class="checkbox-inline"><input type="checkbox" checked="checked" value="">Bedroom</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Workspace</label>
                                <label class="checkbox-inline"><input type="checkbox" checked="checked" value="">Living Room</label>
                                <label class="checkbox-inline"><input type="checkbox" checked="checked" value="">Bedroom</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Workspace</label>
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
                                <h4 class="modal-title">Hapus Sofa ?</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                    <p>Product ini akan terhapus </p>
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
                                <h4 class="modal-title">Add Product</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name :</label>
                                    <input type="text" class="form-control"  id="product_name" >
                                    <!-- Looping cateogry disini -->
                                    <label for="sel1">Select Category:</label>
                                     <select class="form-control" id="product_category">
                                       <option>Sofa</option>
                                       <option>Kursi</option>
                                       <option>Meja</option>
                                       <option>Lampu</option>
                                     </select>

                                    <label for="product_name">Product Description :</label>
                                    <input type="text" class="form-control"  id="product_name" >

                                    <label for="product_name">Product Price :</label>
                                    <input type="text" class="form-control"  id="product_name" >

                                    <label for="product_name">Product Dimension :</label>
                                    <input type="text" class="form-control"  id="product_name" >

                                    <label for="product_name">Product Material :</label>
                                    <input type="text" class="form-control"  id="product_name" >

                                    <label for="product_name">Product Rating :</label>
                                    <input type="text" class="form-control"  id="product_name" >
                                </div>
                                <b> Room :</b> <br>
                                <label class="checkbox-inline"><input type="checkbox"  value="">Living Room</label>
                                <label class="checkbox-inline"><input type="checkbox"  value="">Bedroom</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Workspace</label>
                                <label class="checkbox-inline"><input type="checkbox"  value="">Living Room</label>
                                <label class="checkbox-inline"><input type="checkbox"  value="">Bedroom</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Workspace</label>
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
