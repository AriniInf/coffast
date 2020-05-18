{% extends "template/mainpemilik.volt" %} {% block content %}
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1 class="m-0 text-dark">List Admin</h1>
            </div>
            <div class="col-sm-7" style="color: blue;">
                <?php echo $this->flashSession->output() ?>
            </div>
            <div class="col-sm-1">
                <button style="float: right;" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#add-data">Tambah</button>
            </div>
            <div class="modal fade" id="add-data">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Admin</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <form class="form-horizontal" action="/pemilik/tambah-admin" method="post" enctype="multipart/form-data" role="form">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-lg-10">
                                        <input type="hidden" id="id" name="id" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label">Username</label>
                                    <div class="col-lg">
                                        <input type="r=text" class="form-control" id="username" name="username" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label">No Identitas</label>
                                    <div class="col-lg">
                                        <input type="r=text" class="form-control" id="noiden" name="noiden" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="nama" name="nama" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Password</label>
                                    <div class="col-lg">
                                        <input type="password" class="form-control" id="password" name="password" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg col-sm control-label">Email</label>
                                    <div class="col-lg">
                                        <input type="email" class="form-control" id="email" name="email" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Notelp</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="notelp" name="notelp" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>


<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Identitas</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>{% for ad in admin %}
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>{{ad['nama']}}</td>
                    <td>{{ad['noiden']}}</td>
                    <td>{{ad['email']}}</td>
                    <td>{{ad['alamat']}}</td>
                    <td>{{ad['notelp']}}</td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm" href="/admin/delete-pegawai/{{ad['id']}}" onclick="return deleteDialog();"><i class="fas fa-trash">
                        </i>  Hapus</a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Identitas</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>

    </div>
    <!-- /.card-body -->
</div>

</body>
<script>
    function deleteDialog() {
        return confirm("Are you sure you want to delete this record?")
    }
</script>
{% endblock %}