{% extends "template/mainpegawai.volt" %} {% block content %}

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1 class="m-0 text-dark">List Menu</h1>
            </div>
            <!-- <div class="col-sm-7" style="color: blue;">
                <?php echo $this->flashSession->output() ?>
            </div> -->

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
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>{% for m in menu %}
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>{{m['menu']}}</td>
                    <td>{{ m['harga']}}</td>
                    <td>{{ m['deskripsi']}}</td>
                </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>

</body>


{% endblock %}