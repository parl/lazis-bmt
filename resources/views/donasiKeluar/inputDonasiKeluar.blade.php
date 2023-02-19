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
                  <form method="POST" action="{{ url('donasi-keluar/store') }}">
                      @csrf
                      @method('POST')
                    <div class="card-body">
                      <label for="inputNamaMuzaki">Nama Asnaf</label>
                      <div class="form-group">
                        {{-- <input type="text" class="form-control" id="inputNamaMuzaki" name="muzakiNama" placeholder="Nama Muzaki"> --}}
                        <select class="js-example-basic-single" id="donasiOutAsnafId" name="donasiOutAsnafId" style="width: 100%">
                            <option>Pilih Asnaf</option>
                            @foreach ($asnaf as $asnf)
                            <option value="{{ $asnf->id }}">{{ $asnf->asnafNama }}</option>
                            @endforeach
                          </select>
                      </div>
                      <label for="donasiOutJenisId">Jenis Donasi</label>
                      <div class="form-group">
                        <select class="js-example-basic-single" id="donasiOutJenisId" name="donasiOutJenisId">
                            <option>Pilih Jenis Donasi</option>
                            @foreach ($ref_jenis_donasi as $jenis_donasi)
                            <option value="{{ $jenis_donasi->id }}">{{ $jenis_donasi->jnsdonasiNama }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="donasiOutNominal">Nominal Donasi</label>
                        <input type="text" class="form-control" id="donasiOutNominal" name="donasiOutNominal" placeholder="Nominal Donasi">
                      </div>
                      <div class="form-group">
                        <label for="donasiOutTanggal">Tanggal Donasi</label>
                        <input type="date" class="form-control" id="donasiOutTanggal" name="donasiOutTanggal" placeholder="Tanggal Donasi">
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
    <!-- Nice Select2 -->
    <script src="../../dist/js/nice-select2.js"></script>
    <script src="../../dist/js/main.js"></script>
    <!-- Page specific script -->
    <script>
    function formatRupiah(input) {
      // console.log(input.value);
      let sisa = input.value.length % 3,
        rupiah = input.value.substr(0, sisa),
        ribuan = input.value.substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      input.value = rupiah;
      console.log(rupiah);
    }
    $(function () {
      bsCustomFileInput.init();
    });
    var options = {searchable: true};
    NiceSelect.bind(document.getElementById("donasiOutJenisId"), options);
    NiceSelect.bind(document.getElementById("donasiOutAsnafId"), options);
    
    </script>
    </body>
    </html>
    
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
