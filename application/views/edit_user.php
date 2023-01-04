<!-- content @s -->
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Edit User</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 2,595 users.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <form action="<?= base_url('register/update') ?>" method="post">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="preview-block">
                                    <span class="preview-title-lg overline-title">Form User</span>
                                    <div class="row gy-4">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="nama">Nama Lengkap</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="nama" class="form-control form-control-lg" id="nama" placeholder="Input placeholder" value="<?= $row->full_name ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="email">Email</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="Input placeholder" value="<?= $row->email ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="nomor">Nomor Telp</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="nomor" class="form-control form-control-lg" id="nomor" placeholder="Input placeholder" value="<?= $row->no_hp ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-06">Level User</label>
                                                <div class="form-control-wrap ">
                                                    <div class="form-control-select">
                                                        <select class="form-control form-control-lg" id="default-06" name="level">
                                                            <option value="admin">Admin</option>
                                                            <option value="user">User</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="preview-hr">
                                    <span class="preview-title-lg overline-title">KEAMANAN</span>
                                    <div class="row gy-4">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="nama">Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control form-control-lg" id="nama" placeholder="Input placeholder">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="email">Konfirmasi Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control form-control-lg" id="email" placeholder="Input placeholder">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="preview-hr">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary">Update User</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->