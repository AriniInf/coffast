{% extends "template/mainadmin.volt" %} {% block content %}
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1 class="m-0 text-dark">List Barang</h1>
            </div>
            <!-- <div class="col-sm-7" style="color: blue;">
                <?php echo $this->flashSession->output() ?>
            </div> -->
            <div class="col-sm-1">
                <button style="float: right;" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#add-data">Tambah</button>
            </div>
            <div class="modal fade" id="add-data">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Barang</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <form class="form-horizontal" action="/admin/tambah-barang" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Nama Barang</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="barang" name="barang" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="harga" name="harga" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer form-group">
                                <button class="btn btn-info" type="submit">Simpan</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
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
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>{% for b in barang %}
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>{{b['barang']}}</td>
                    <td>{{ b['jumlah']}}</td>
                    <td>{{ b['harga']}}</td>
                    <td>{{ b['deskripsi']}}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#edit-data{{b['id']}}"><i class="fas fa-pencil-alt">
                        </i>  Edit</button>
                        <div class="modal fade" id="edit-data{{b['id']}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Barang</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                    </div>
                                    <form class="form-horizontal" action="/admin/edit-barang/{{b['id']}}" method="post" enctype="multipart/form-data" role="form">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="col-lg">
                                                    <input type="hidden" class="form-control" id="id" name="id" value="{{b['id']}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Barang</label>
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" id="barang" name="barang" value="{{b['barang']}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{b['jumlah']}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" id="harga" name="harga" value="{{b['harga']}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{b['deskripsi']}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-info" type="submit"> Simpan</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a type="button" class="btn btn-danger btn-md" href="/admin/hapus-barang/{{b['id']}}" onclick="return deleteDialog();"><i class="fas fa-trash">
                        </i> Hapus</a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
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
        return confirm("Yakin ingin menghapus barang ini?")
    }
</script>

{% endblock %}