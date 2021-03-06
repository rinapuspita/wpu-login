<!-- Main Content -->
<div id="content">
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>          
      <div class="row">
        <div class="table-responsive">

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col" class="short">No</th>
                <th scope="col">Report</th>
                <th scope="col">Action</th>                      
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Report Product Data</td>
                <td>
                <a href="<?= base_url(). 'laporan/lap_produk/' ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </a>
                 </td>                      
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Report Partner Data</td>
                <td>
                <a href="<?= base_url(). 'laporan/lap_user/' ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                  </span>
                </a>
                 </td>                      
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Report Customer Data</td>
                <td>
                <a href="<?= base_url(). 'laporan/lap_cust/' ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                  </span>
                </a>
                 </td>                      
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Lending Report</td>
                <td>
                <a href="<?= base_url(). 'laporan/lap_pinjam/' ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                  </span>
                </a>
                 </td>                      
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Return Report</td>
                <td>
                <a href="<?= base_url(). 'laporan/lap_kembali/' ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                  </span>
                </a>
                 </td>                      
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->