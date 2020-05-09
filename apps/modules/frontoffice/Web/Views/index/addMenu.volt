{% extends "template/base.volt" %}{% block content %}
<div id="page-container" class="sidebar-inverse side-scroll page-header-fixed main-content-boxed">
    <main id="main-container" style="padding-top: 5vw">
        <div class="content" style="padding-top: 0">
            <div id="hides" class="notif-block" style="height:5vh;  overflow-y: auto;"></div>
            <div class="table-wrapper" style="height:70vh">
                <form action="/pelanggan/store-menu" method="POST" class="php-email-form">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Tambah <b>Pesanan</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <a type="button" class="btn btn-info" onclick="return myFunction()"><i class="fa fa-plus"></i><span>Tambah Makanan</span></a>
                                <!-- <button onclick="myFunction()">Click me</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label><b>Detail Item</b></label>
                            <div class="menu-fields">
                                
                                <div class='form-group'>
                                    <select name='menu[]'>
                                    {% for m in menu %}
                                        <option value="{{m.id}}">{{m.menu}}</option>
                                    {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label><b>Jumlah Item</b></label>
                            <div class="jumlah-fields">
                                <div class='form-group'><input type='text' class='form-control' name='jum[]'></div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="float:right">
                        <!-- <a id="changes" class="btn btn-warning text-light" style="margin-right:15px"><span>Simpan Perubahan</span></a> -->
                        <input type="submit" class="btn btn-success" name="Simpan" id="Simpan" value="Kirim">
                    </div>
            </div>
            </form>
            <div>
            </div>
        </div>
    </main>
</div>

<!-- <script>
$(document).ready(function() {
    //multi-items
    $("#multi-items").click(function() {
        var wrapper = $('.menu-fields');
        var wrapper1 = $('.jumlah-fields');
        $(wrapper).append("<div class ='form-group'><select name='menu[]''>{% for m in menu %}<option value='{{m.id}}'>{{m.menu}}</option>{% endfor %}</select></div>");
        $(wrapper1).append("<div class='form-group'><input type='text' class='form-control' name='jum[]'></div>");
    });
});
</script> -->
<script>
function myFunction() {
  var wrapper = $('.menu-fields');
        var wrapper1 = $('.jumlah-fields');
        $(wrapper).append("<div class ='form-group'><select name='menu[]''>{% for m in menu %}<option value='{{m.id}}'>{{m.menu}}</option>{% endfor %}</select></div>");
        $(wrapper1).append("<div class='form-group'><input type='text' class='form-control' name='jum[]'></div>");
}
</script>

{% endblock %}