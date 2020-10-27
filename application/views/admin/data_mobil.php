<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>

          <table class="table table-hover table-striped table-border">
              <thead >
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Type</th>
                  <th>Merk</th>
                  <th>No. Plat</th>
                  <th>Status</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                  <?php
                  $no=1;
                  foreach($mobil as $mb) : ?>
                  <td><?php echo $no++ ?></td>
                  <td></td>
                  <td><?php echo $mb->kode_type ?></td>
                  <td><?php echo $mb->merk ?></td>
                  <td><?php echo $mb->no_plat ?></td>
                  <td><?php 
                  if ($mb ->status == "0"){
                      echo "<span class='badge badge-danger '>Tidak Tersedia</span>";
                  }else{
                    echo "<span class='badge badge-success '>Tersedia</span>";
                  }
                  ?></td>
                  
                  <?php endforeach; ?> 
                   
              </tbody>

          </table>
    </section>
</div>