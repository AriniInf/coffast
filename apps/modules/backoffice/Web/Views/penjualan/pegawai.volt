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
                                    <label class="col-lg-2 col-sm-2 control-label">Nama Pemesan</label>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" value="" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <div class="menu-fields">
                                            <div class='form-group'>
                                                <label class="col-lg-2 col-sm-2 control-label">Menu</label>
                                                <select name='menu[]'>
                                            {% for m in menu %}
                                            <option value={{m.id}}>{{m.menu}}</option>
                                            {% endfor %}
                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="jumlah-fields">
                                            <div class='form-group'>
                                                <label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                                                <input type='text' class='form-control' name='jum[]'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer form-group">
                                <button class="btn btn-info" type="submit">Simpan</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                                <div class="col-sm-6">
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
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Booking</th>
                        <th>Menu</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Waktu</th>
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
                        <th>Menu</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Waktu</th>
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
            var wrapper1 = $('.jumlah-fields');
            $(wrapper).append("<div class ='form-group'><select name='menu[]''>{% for m in menu %}<option value='{{m.id}}'>{{m.menu}}</option>{% endfor %}</select></div>");
            $(wrapper1).append("<div class='form-group'><input type='text' class='form-control' name='jum[]'></div>");
        }
    </script>
    {% endblock %}