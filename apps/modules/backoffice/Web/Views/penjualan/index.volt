 {% extends "template/mainpegawai.volt" %} {% block content %}
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1 class="m-0 text-dark">List Penjualan</h1>
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
                            <h4 class="modal-title">Tambah Penjualan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <form class="form-horizontal" action="/pegawai/add-penjualan" method="post" enctype="multipart/form-data" role="form">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Nama Pemesan</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" value="" required>
                                    </div>
                                </div>
                                <div class="menu-fields">
                                    <label class="col-lg-2 col-sm-2 control-label">Pembelian</label>
                                    <div class="col-lg">
                                        <select class='form-control input-md' name='menu[]' id='menu' required>
                                        <option value="">Pilih Menu</option>
                                        {% for m in menu %}
                                        <option value="{{m.id}}">{{m.menu}}</option>
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
                                <a type="button" class="btn btn-info" onclick="return myFunction()"><i class="fa fa-plus"></i><span>Tambah Menu</span></a>
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
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Booking</th>
                    <th>ID Menu</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>{% for j in penjualan %}
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>{{j['id_booking']}}</td>
                    <td>{{j['id_menu']}}</td>
                    <td>{{j['jumlah']}}</td>
                    <td>{{j['total']}}</td>
                    <td>{{j['waktu']}}</td>
                </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>ID Booking</th>
                    <th>ID Menu</th>
                    <th>Jumlah</th>
                    <th>Total</th>
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
        var wrapper = $('.menu-fields');
        $(wrapper).append("<div class='menu-fields'><label class='col-lg-2 col-sm-2 control-label'>Pembelian</label><div class='col-lg'><select class='form-control input-md' name='menu[]' id='menu' required><option value=''>Pilih Menu</option>{% for m in menu %}<option value='{{m.id}}'>{{m.menu}}</option>{% endfor %}</select></div></div><div class='jumlah-fields'><label class='col-lg-2 col-sm-2 control-label'>Jumlah</label><input type='text' class='form-control' name='jumlah[]'></div>");
    }
</script>
{% endblock %}