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
                                <a id="multi-items" class="btn btn-success"><i class="fa fa-plus"></i><span>Tambah Makanan</span></a>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="menus" name="menus" value="">
                    <input type="hidden" id="jumlahs" name="jumlahs" value="">
                    <div class="row">
                        <div class="col-sm-8">
                            <label><b>Menu</b></label>
                            <div class="menu-fields">
                                <!-- <select class='selectpicker form-control' data-container='body' name='item_notes' id='item_notes'>
                                {% for m in menu %}
                                    <option>{{m.menu}}</option>
                                {% endfor %}
                            </select> -->
                                <div class='form-group'><input type='text' class='form-control' name='menu'></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label><b>Jumlah</b></label>
                            <div class="jumlah-fields">
                                <div class='form-group'><input type='text' class='form-control' name='jumlah'></div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="float:right">
                        <a id="changes" class="btn btn-info text-light" style="margin-right:15px"><span>Simpan Perubahan</span></a>
                        <input type="submit" class="btn btn-success" name="Simpan" id="Simpan" value="Kirim" disabled>
                    </div>
            </div>
            </form>
            <div>
            </div>
        </div>
    </main>
</div>
<script>
    $(document).ready(function() {
        //multi-items
        $("#multi-items").click(function() {
            var wrapper = $('.menu-fields');
            var wrapper1 = $('.jumlah-fields');
            $(wrapper).append("<div class='form-group'><input type='text' class='form-control' name='menu'></div>");
            $(wrapper1).append("<div class='form-group'><input type='text' class='form-control' name='jumlah'></div>");
        });

        //get val multi-tems
        $("#changes").click(function() {
            let values = [];
            let value = [];
            $.each($("input[name='menu']"), function() {
                values.push($(this).val());
            });
            $.each($("input[name='jumlah']"), function() {
                value.push($(this).val());
            });

            console.log(values.toString());
            console.log(value.toString());

            $('#menus').val(values.toString());
            $('#jumlahs').val(value.toString());

            $('#Simpan').prop('disabled', false);
        });
    });
</script>




public function storeMenuAction(){ $menus_array = explode(",", $this->request->getPost('menus')); $jumlahs_array = explode(",", $this->request->getPost('jumlahs')); //var_dump($items_notes_array); for($i=0; $i
<count($menus_array) ; $i++) { $item=n ew
    Penjualan(); $item->id_menu = $menus_array[$i]; $item->jumlah = $jumlahs_array[$i]; //var_dump($item); $item->save(); }