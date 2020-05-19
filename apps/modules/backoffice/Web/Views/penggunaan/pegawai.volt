{% extends "template/mainpegawai.volt" %} {% block content %}
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1 class="m-0 text-dark">List Penggunaan</h1>
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
                            <h4 class="modal-title">Tambah Penggunaan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <form class="form-horizontal" action="/pegawai/tambah-penggunaan" method="post" enctype="multipart/form-data" role="form">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
                                    <div class="col-lg">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="" required>
                                    </div>
                                </div>
                                <div class="barang-fields">
                                    <label class="col-lg-2 col-sm-2 control-label">Penggunaan</label>
                                    <div class="col-lg">
                                        <select class='form-control input-md' name='barang[]' id='barang' required>
                                        <option value="">Pilih Barang</option>
                                        {% for b in barang %}
                                        <option value="{{b.id}}">{{b.barang}}</option>
                                        {% endfor %}
                                    </select>
                                    </div>
                                    <!-- </div> -->
                                    <!-- <div class="jumlah-fields"> -->
                                    <label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                                    <input type='text' class='form-control' name='jumlah[]'>
                                </div>
                            </div>
                            <div class="modal-footer form-group">
                                <button class="btn btn-info" type="submit">Simpan</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                                <a type="button" class="btn btn-info" onclick="return myFunction()"><i class="fa fa-plus"></i><span>Tambah Barang</span></a>
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
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>{% for guna in penggunaan %}
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>{{guna['barang']}}</td>
                    <td>{{guna['jumlah']}}</td>
                    <td>{{guna['waktu']}}</td>
                    <td> <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#edit-data{{guna['id']}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit</button>
                        <div class="modal fade" id="edit-data{{guna['id']}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Pembelian</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                    </div>
                                    <form class="form-horizontal" action="/pegawai/edit-penggunaan/{{guna['id']}}" method="post" enctype="multipart/form-data" role="form">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="col-lg">
                                                    <input type="hidden" class="form-control" id="id" name="id" value="{{guna['id']}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
                                                <div class="col-lg">
                                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{guna['waktu']}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{guna['jumlah']}}" required>
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
                    </td>
                </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>

    </div>
    <!-- /.card-body -->
</div>

</body>
<script>
    function myFunction() {
        var wrapper = $('.barang-fields');
        $(wrapper).append("<div class='menu-fields'><label class='col-lg-2 col-sm-2 control-label'>Pembelian</label><div class='col-lg'><select class='form-control input-md' name='barang[]' id='menu' required><option value=''>Pilih Barang</option>{% for b in barang %}<option value='{{b.id}}'>{{b.barang}}</option>{% endfor %}</select></div></div><div class='jumlah-fields'><label class='col-lg-2 col-sm-2 control-label'>Jumlah</label><input type='text' class='form-control' name='jumlah[]'></div>");
    }
</script>
{% endblock %}