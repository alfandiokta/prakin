<!DOCTYPE html>
<html><body>
<table >
                              
<tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Nama</th>
                                        <th>NIM/NISN</th>
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
                                        <td><?= $absn['tanggal']; ?></td>
                                        <td><?= $absn['jam']; ?></td>
                                        <td><?= $absn['nama']; ?></td>
                                        <td><?= $absn['nimnis']; ?></td>
                                        <td><?= $absn['aktivitas']; ?></td>
                                        <td><?= $absn['uraian_aktivitas']; ?></td>
                                        <td><img  width="100px"src="<?= '../assets/doc/'.$absn['foto_aktivitas'] ?>"></td>
                                        <td><img  width="100px"src="<?= '../assets/doc/'.$absn['foto_ttd'] ?>"></td>
                          
                                    </tr>
                                <?php endforeach; ?>


                                
                            </table>
</body></html>