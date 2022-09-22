<!DOCTYPE html>
<html><head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size:12px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: left;
  background-color: #3F87EF;
  color: white;

  
}
h3 {
  text-align: center;
  padding: 8px;
}

</style>
</head><body>


<h3>Daftar Catatan Aktivitas Perserta Magang BPMPK</h3>

<?php  foreach ($user as $absns) :?>
<table >       
<tr>
              <td >Nama</td>
                <td>:</td>
                <td><?= $absns['nama']; ?></td>
            </tr>
          <tr>
              <td >NIM / NISN</td>
                <td>:</td>
                <td><?= $absns['nimnis']; ?></td>
            </tr>
          <tr>
              <td >Instansi</td>
                <td>:</td>
                <td><?= $absns['alamat_in']; ?></td>
            </tr>
          <tr>
              <td>WA</td>
                <td>:</td>
                <td><?= $absns['wa']; ?></td>
            </tr>
</table >       
<?php endforeach; ?>
<br>
<table id="customers">                           
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Aktivitas</th>
                                        <th>Uraian Aktivitas</th>
                                        <th>Foto</th>
                                        <th>TTD</th>
                                    </tr>
                               
                                  

                                    <?php 
                                $no = 1;
                                foreach ($absensi as $absn) :
                                ?>
                                
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= strftime('%d %B %Y',strtotime($absn['tanggal'])) ?></td>
                                        <td><?= $absn['jam']; ?></td>
                                        <td><?= $absn['aktivitas']; ?></td>
                                        <td><?= $absn['uraian_aktivitas']; ?></td>
                                        <td><?= base_url('assets/doc/'.$absn['foto_aktivitas']); ?></td>
                                        <td><?= base_url('assets/doc/'.$absn['ttd']); ?></td>
                          
                                    </tr>
                                <?php endforeach; ?>


                                
                            </table>
</body></html>