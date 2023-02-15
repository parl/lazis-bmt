@include('partials.main')
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Update Muzaki</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{ url('muzaki/update') }}">
                      @csrf
                      @method('POST')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Id</label>
                        <input type="text" class="form-control" value="{{ $muzaki->id }}" id="inputIdBarang" name="id" readonly>
                      </div>  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Muzaki</label>
                        <input type="text" class="form-control" value="{{ $muzaki->muzakiNama }}" id="inputNamaBarang" name="muzakiNama" placeholder="Nama Barang">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nomor HP Muzaki</label>
                        <input type="text" class="form-control" value="{{ $muzaki->muzakiNoHp }}" id="inputSatuanBarang" name="muzakiNoHp" placeholder="Satuan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">NPWP Muzaki</label>
                        <input type="text" class="form-control" value="{{ $muzaki->muzakiNPWP }}"id="inputKategoriBarang" name="muzakiNPWP" placeholder="Kategori">
                      </div>
                     
                      {{-- <div class="form-group">
                        <label for="exampleInputFile">Kategori</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div> --}}
                      {{-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> --}}
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
                  
              </div>
                  <!-- /.card-body -->
            </div>
                <!-- /.card -->
          </div>
              <!--/.col (right) -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    
    <!-- Page specific script -->
    <script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>
    </body>
    </html>
    
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
