{% extends "template/base.volt" %}{% block content %}
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background: url(../assets/frontoffice/img/slide/slide-1.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animated fadeInDown"><span>Hi</span> {{ session.get('auth')['username'] }}</h2>
                            <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et
                                tempore modi architecto.</p>
                            <div>
                                <a href="#menu" class="btn-menu animated fadeIn scrollto">Our Menu</a>
                                <a href="#book-a-table" class="btn-book animated fadeIn scrollto">Book a Table</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background: url(../assets/frontoffice/img/slide/slide-2.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et
                                tempore modi architecto.</p>
                            <div>
                                <a href="#menu" class="btn-menu animated fadeIn scrollto">Our Menu</a>
                                <a href="#book-a-table" class="btn-book animated fadeIn scrollto">Book a Table</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">

            <div class="section-title">
                <h2>Check our tasty <span>Menu</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Show All</li>
                        <li data-filter=".filter-makanan">Makanan</li>
                        <li data-filter=".filter-minuman">Minuman</li>
                    </ul>
                </div>
            </div>



            <div class="row menu-container">
                {% for makan in makanan %}
                <div class="col-lg-6 menu-item filter-makanan">
                    <div class="menu-content">
                        <a href="#">{{makan['menu']}}</a><span>Rp {{makan['harga']}}</span>
                    </div>
                    <div class="menu-ingredients">
                        {{makan['deskripsi']}}
                    </div>
                </div>
                {% endfor %} {% for minum in minuman %}
                <div class="col-lg-6 menu-item filter-minuman">
                    <div class="menu-content">
                        <a href="#">{{minum['menu']}}</a><span>Rp {{minum['harga']}}</span>
                    </div>
                    <div class="menu-ingredients">
                        {{minum['deskripsi']}}
                    </div>
                </div>
                {% endfor %}
            </div>

        </div>
    </section>
    <!-- End Menu Section -->


    <!-- ======= Events Section ======= -->
    <section id="specials" class="events">
        <div class="container">

            <div class="section-title">
                <h2>Our Specials <span>Menu</span> in this kedai</h2>
            </div>

            <div class="owl-carousel events-carousel">
                {% for spes in spesial %}
                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>{{spes['menu']}}</h3>
                        <div class="price">
                            <p><span>Rp {{spes['harga']}}</span></p>
                        </div>
                        <p class="font-italic">
                            {{spes['deskripsi']}}
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                    </div>
                </div>
                {% endfor %}

            </div>

        </div>
    </section>
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container">

            <div class="section-title">
                <h2>Book a <span>Table</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <form action="/pelanggan/book" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Date" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="time" class="form-control" name="waktu" id="waktu" placeholder="Time" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="# of people" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="catatan" rows="5" placeholder="Catatan"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" id="Simpan">Lanjutkan</button></div>
            </form>
        </div>
    </section>
    <!-- End Book A Table Section -->



</main>

{% endblock %}