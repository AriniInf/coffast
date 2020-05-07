<div id="page-container" class="sidebar-inverse side-scroll page-header-fixed main-content-boxed">
    <main id="main-container" style="padding-top: 5vw">
        <div class="content" style="padding-top: 0">
            <div id="hides" class="notif-block" style="height:5vh;  overflow-y: auto;"></div>
            <div class="table-wrapper" style="height:70vh">
                <form action="/pelanggan/store-menu" method="POST">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Tambah <b>Pesanan</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <a id="multi-items" class="btn btn-info"><i class="fa fa-plus"></i><span>Tambah Makanan</span></a>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="menus" name="menus" value="">
                    <input type="hidden" id="jumlahs" name="jumlahs" value="">
                    <div class="row">
                        <div class="col-sm-8">
                            <label><b>Detail Item</b></label>
                            <div class="menu-fields">
                                <div class='form-group'><input type='text' class='form-control' name='menu'></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label><b>Tipe Item</b></label>
                            <div class="jumlah-fields">
                                <div class='form-group'><input type='text' class='form-control' name='jum'></div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="float:right">
                        <a id="changes" class="btn btn-warning text-light" style="margin-right:15px"><span>Simpan Perubahan</span></a>
                        <input type="submit" class="btn btn-success" name="Simpan" id="Simpan" value="Kirim" disabled>
                    </div>
            </div>
            </form>
            <div>
            </div>
        </div>
    </main>
</div>

<script src="../assets/js/form.js"></script>