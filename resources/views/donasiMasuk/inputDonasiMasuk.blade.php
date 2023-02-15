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
                    <h3 class="card-title">Input Donasi</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{ url('donasi-masuk/store') }}">
                      @csrf
                      @method('POST')
                    <div class="card-body">
                      <label for="inputNamaMuzaki">Nama Muzaki</label>
                      <div class="form-group">
                        {{-- <input type="text" class="form-control" id="inputNamaMuzaki" name="muzakiNama" placeholder="Nama Muzaki"> --}}
                        <select class="js-example-basic-single" id="donasiMuzakiId" name="donasiMuzakiId" style="width: 100%">
                            <option>Pilih Muzaki</option>
                            @foreach ($muzaki as $muzak)
                            <option value="{{ $muzak->id }}">{{ $muzak->muzakiNama }}</option>
                            @endforeach
                          </select>
                      </div>
                      <label for="inputJenisDonasi">Jenis Donasi</label>
                      <div class="form-group">
                        <select class="js-example-basic-single" id="donasiJenisId" name="donasiJenisId" style="width: 100%">
                            <option>Pilih Jenis Donasi</option>
                            @foreach ($ref_jenis_donasi as $jenis_donasi)
                            <option value="{{ $jenis_donasi->id }}">{{ $jenis_donasi->jnsdonasiNama }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="donasiNominal">Nominal Donasi</label>
                        <input type="number" class="form-control" id="donasiNominal" name="donasiNominal" placeholder="Nominal Donasi">
                      </div>
                      <div class="form-group">
                        <label for="donasiTanggal">Tanggal Donasi</label>
                        <input type="date" class="form-control" id="donasiTanggal" name="donasiTanggal" placeholder="Tanggal Donasi">
                      </div>
                    </div>
    
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
    <!-- Select2 -->
    <script src="../../dist/js/nice-select2.js"></script>
    <!-- Page specific script -->
    <script>
    $(function () {
      bsCustomFileInput.init();
    });
    var options = {searchable: true};
    NiceSelect.bind(document.getElementById("donasiMuzakiId"), options);
    NiceSelect.bind(document.getElementById("donasiJenisId"), options);
    </script>
    </body>
    </html>
    
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
