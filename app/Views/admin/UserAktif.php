<?php $this->extend('template/dasboardTemplate'); ?>
<?php $this->section('content');?>

<div id="content">
    <div class="content-info">
        <h2>User Active</h2>
    </div>
    <div class="validation" style="width:95%; margin-top:10px;">
    <?php if(session()->getFlashData('success')){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Di Edit
        </div><?php };?>
        <?php if(session()->getFlashData('notif')){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Pengguna Berhasil Di Non Aktifkan
    </div><?php };?>
    </div>
    <div class="content-card">
        <div class="data-table">
        <table>
        <thead>
                <tr>
                    <td>Aksi</td>
                    <td>Email</td>
                    <td>Nama Pengguna</td>
                    <td>User Type</td>
                    <td>User Alias</td>
                    <td>Password</td>
                    <td>Status</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach($user as $index=>$row){ if($row['Status'] == "1"){?>
                <tr>
                    <td>
                        <a href="/RS/edit/<?php echo $row['email']; ?>" class="button blue"><ion-icon name="create-outline"></ion-icon></a>
                    </td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['namaPengguna']; ?></td>
                    <td><?php echo $row['userType']; ?></td>
                    <td><?php echo $row['userAlias']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td><a href="/RS/nonaktif/<?php echo $row['email']; ?>" class="button-user green">
                        <?php 
                            $status = $row['Status'];
                            if($status == "0"){
                                $input = "Tidak Aktif";
                            }elseif($status == "1"){
                                $input = "Aktif";
                            }else{
                                $input = Null;
                            }
                            echo $input;
                        ?></a></td>
                    </tr>
                <?php } }?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<?php $this->endSection();?>