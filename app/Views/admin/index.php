<?php $this->extend('template/dasboardTemplate'); ?>
<?php $this->section('content');?>

<div id="content">
    <div class="content-info">
        <h2>Data Users</h2>
        <a class="btn btn-primary" href="/RS/Add" role="button">Add User</a>
    </div>
    <div class="validation" style="width:95%; margin-top:10px;">
    <?php if(session()->getFlashData('message')){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Di Tambahkan
        </div>
    <?php };?>
    <?php if(session()->getFlashData('Register')){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            User Berhasil Mendaftar
        </div>
    <?php };?></div>
    <div class="content-card">
        <div class="data-table">
        <table>
            <thead>
            <tr>
                <td>No.</td>
                <td>Email</td>
                <td>Nama Pengguna</td>
                <td>User Type</td>
                <td>User Alias</td>
                <td>Password</td>
                <td>Status</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach($user as $index=>$row){ ?>
            <tr>
                <td><?php echo $index+1;?>.</td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['namaPengguna']; ?></td>
                <td><?php echo $row['userType']; ?></td>
                <td><?php echo $row['userAlias']; ?></td>
                <td><?php echo $row['Password']; ?></td>
                <td><?php 
                        $status = $row['Status'];
                        if($status == "0"){
                            $input = "Tidak Aktif";
                        }elseif($status == "1"){
                            $input = "Aktif";
                        }else{
                            $input = Null;
                        }
                        echo $input;
                    ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<?php $this->endSection();?>