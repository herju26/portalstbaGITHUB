<div class="card">  
    <div class="header" >
	<div class="container">
		 <div class="header" >
                 <h4 class="title">Data Mahasiswa</h4>
                 <p class="category">STBA LIA Yogyakarta</p>
             <hr/>
         </br>
    </div>
    <div class="page" style="background-color: #fff;">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-users" aria-hidden="true"></i> Mahaiswa</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-md-4">
                                        <?php echo anchor(site_url('admin/baak/mahasiswa/create'),'<i class="fa fa-plus"></i> Tambah', 'class="btn btn-primary"'); ?>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div style="margin-top: 8px" id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1 text-right">
                                    </div>
                                    
                                </div>
                                <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        
                                        <th style="color: #000;"><b>No</b></th>
                                        <th style="color: #000;"><b>NIM</b></th>
                                        <th style="color: #000;"><b>Nama</b></th>
                                        <th style="color: #000;"><b>Sks Diakui</b></th>
                                        <th style="color: #000;"><b>Angkatan</b></th>
                                        <th style="color: #000;"><b>Jenjang</b></th>
                                        <th style="color: #000;"><b>Status Masuk</b></th>
                                        <th style="color: #000;"><b>Status aktif</b></th>
                                        <th style="color: #000;"><b>Aksi</b></th>
                                        
                                    </tr>
                                </thead>
                                    <?php
            foreach ($mahasiswa_data as $mahasiswa)
            {
                if($mahasiswa->status=='1'){
                ?>
                                    <tr>
                                        <td width="80px">
                                            <?php echo ++$start ?>
                                        </td>
                                        <td>
                                            <?php echo $mahasiswa->nim ?>
                                        </td>
                                        <td>
                                            <?php echo $mahasiswa->nama_mhs ?>
                                        </td>
                                        <td>
                                            <?php echo $mahasiswa->sks_diakui ?>
                                        </td>
                                        <td>
                                            <?php echo $mahasiswa->angkatan ?>
                                        </td>
                                        <td>
                                            <?php 
                                                foreach($jurusans as $data){
                                                    if($data->id_jurusan==$mahasiswa->id_jurusan){
                                                        echo $data->nama_jenjang.' '.$data->nama_jurusan ;       
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if($mahasiswa->id_st_msk=='1'){
                                                    echo 'Baru';    
                                                }else{
                                                    echo 'Transfer';    
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                foreach($ket_mhs as $data){
                                                    if($data->id_ket_mhs==$mahasiswa->id_ket_mhs){
                                                        echo $data->nama_ket_mhs ;       
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td style="text-align:center" width="200px">
                                            
                                            <div><a class="btn btn-primary" href="<?= site_url('admin/baak/mahasiswa/change/'.$mahasiswa->nim) ?>"><i class="pe-7s-refresh-2"></i></a>
                                            <a class="btn btn-primary" href="<?= site_url('admin/baak/mahasiswa/read/'.$mahasiswa->nim) ?>"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-warning" href="<?= site_url('admin/baak/mahasiswa/update/'.$mahasiswa->nim)?>"><i class="pe-7s-pen"></i></a></div>

                                            <!--------------------
                                            <a class="btn btn-danger"  onclick="javasciprt: return confirm('Anda yakin akan menghapus data mahasiswa? ')"  href="<?= site_url('admin/baak/mahasiswa/delete/'.$mahasiswa->nim)?>"><i class="fa fa-trash"></i></a>
                                            --------------------------------->
                                        </td>
                                    </tr>
                                    <?php    
                }
                
            }
            ?>
                                </table>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary">Total Record :
                                            <?php echo $total_rows ?></a>
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
    </div>
</div>
</br>
