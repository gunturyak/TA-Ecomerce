<x-frontend>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Tentang Produk</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{url('shop')}}">Belanja</a></li>
            <li class="breadcrumb-item active text-white">Tentang Produk</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-12 col-xl-12">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <img src="{{ url('/') }}/front/img/ubi.jpeg" class="img-fluid" alt="Product Image">
                        </div>
                        <div class="col-md-6">
                            <p>Opak udang, camilan tradisional yang memadukan kearifan lokal dengan kelezatan yang unik, adalah perpaduan sempurna antara ubi yang gurih dan udang segar yang kaya rasa.
                            <p>Ubi merupakan bahan utama dari pembuatan opak udang.Ubi yang digunakan adalah ubi pilihan yang ditanam secara alami tanpa menggunakan bahan kimia berbahaya Ubi memberikan rasa manis alami yang otentik, yang berpadu sempurna dengan gurihnya udang.Ubi yang diolah dengan teknik khusus menghasilkan tekstur yang renyah dan memuaskan,Ubi kaya akan serat, vitamin, dan mineral yang baik untuk kesehatan tubuh.Tahap pembuatan opang udang yaitu pertama Ubi dikupas, dikukus, dan dihaluskan sebelum dicampur dengan adonan udang, kemudian dikeringkan.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12 col-xl-12">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <img src="{{ url('/') }}/front/img/baput.jpg" class="img-fluid" alt="Product Image">
                        </div>
                        <div class="col-md-6">

                            <p>Bawang putih ini merupakan bahan tambahan dari pembuatan opak udang. Bawang putih memiliki banyak manfaat dan karakteristik yang membuatnya menjadi pilihan utama dalam pembuatan opang,Bawang putih memiliki aroma yang kuat dan khas serta rasa yang tajam. Bawang putih memiliki tekstur yang renyah ketika mentah, tetapi menjadi lembut saat dimasak, sehingga mudah diolah dalam berbagai bentuk dan teknik memasak. Bawang putih berfungsi sebagai penambah rasa yang kuat dalam opang, memberikan kedalaman dan kekayaan pada cita rasa masakan, Bawang putih dikenal memiliki berbagai manfaat kesehatan, seperti meningkatkan sistem kekebalan tubuh, menurunkan tekanan darah, dan memiliki sifat antiinflamasi.</p>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12 col-xl-12">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <img src="{{ url('/') }}/front/img/udang.jpg" class="img-fluid" alt="Product Image">
                        </div>
                        <div class="col-md-6">

                            <p>Udang adalah salah satu bahan utama yang digunakan dalam pembuatan opang. Udang memiliki rasa yang manis dan gurih, serta aroma laut yang segar. Ketika dimasak, udang mengeluarkan rasa umami yang kuat, Udang kaya akan protein, rendah lemak, dan mengandung berbagai vitamin dan mineral seperti vitamin B12, fosfor, dan selenium.</p>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.btn-plus, .btn-minus').on('click', function(e) {
                const isPositive = $(this).hasClass('btn-plus');
                const input = $(this).closest('.quantity').find('input[name="quantity"]');
                if (input.is('input')) {
                    input.val(Math.max(1, parseInt(input.val()) + (isPositive ? 1 : -1)));
                }
            });
        });
    </script>

    <!-- Single Product End -->
</x-frontend>