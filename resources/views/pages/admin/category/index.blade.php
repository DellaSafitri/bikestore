@extends('layouts.admin')


@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>tabel <small>kategori</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data kategori</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Kategori</th>
                          <th>photo</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($categories as $item)
                        <tr>
                          <td>{{ $loop->interation }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->photo }}</td>
                        </tr>
                        
                      </tbody>
                    </table>  
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

              
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection