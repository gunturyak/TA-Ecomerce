<x-frontend>
    <div class="container-fluid py-5">
        <div class="untree_co-section before-footer-section">
            <div class="container">
                <!-- Cart Page Start -->
                <div class="container-fluid py-5">
                    <div class="container py-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Varian</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(session('cart') as $id => $details)
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset($details['image']) }}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                            </div>
                                        </th>
                                        <td>
                                            <p class="mb-0 mt-4">{{ $details['name'] }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 mt-4">Rp. {{ $details['price'] }}</p>
                                        </td>
                                        <td>
                                            <div class="input-group quantity mt-4" style="width: 100px;">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-minus rounded-circle bg-light border update-cart" data-id="{{ $id }}" data-action="minus">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control form-control-sm text-center border-0 quantity-input" value="{{ $details['quantity'] }}">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-plus rounded-circle bg-light border update-cart" data-id="{{ $id }}" data-action="plus">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 mt-4 total-price">Rp. {{ $details['price'] * $details['quantity'] }}</p>
                                        </td>
                                        <td>
                                            <form action="{{ route('remove-from-cart', $id) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-md rounded-circle bg-light border mt-4" type="submit">
                                                    <i class="fa fa-times text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="row g-4 justify-content-end">
                            <div class="col-8"></div>
                            <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                                <div class="bg-light rounded">
                                    <div class="p-4">
                                        <h1 class="display-6 mb-4">Total <span class="fw-normal">Belanja</span></h1>
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="mb-0 me-4">Subtotal:</h5>
                                            <p class="mb-0 subtotal">Rp. {{ $subtotal }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-0 me-4">Biaya Kirim</h5>
                                            <div class="">
                                                <p class="mb-0"> Rp. 2.500</p>
                                            </div>
                                        </div>
                                        <p class="mb-0 text-end">Pengiriman ke Indonesia.</p>
                                    </div>
                                    <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                                        <h5 class="mb-0 ps-4 me-4">Total</h5>
                                        <p class="mb-0 total">Rp. {{ $total }}</p>
                                    </div>
                                    @auth
                                    <button id="proceed-checkout" class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button">Proceed Checkout</button>
                                    @else
                                    <a href="{{ url('Login') }}" class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4">Masuk ke Pembayaran</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart Page End -->
            </div>
        </div>
    </div>
</x-frontend>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Event handler untuk tombol plus dan minus
        $('.update-cart').click(function(e) {
            e.preventDefault();

            var action = $(this).attr('data-action');
            var quantityInput = $(this).closest('div.quantity').find('.quantity-input');
            var currentQuantity = parseInt(quantityInput.val());

            if (action === 'plus') {
                quantityInput.val(currentQuantity + 1);
            } else if (action === 'minus' && currentQuantity > 1) {
                quantityInput.val(currentQuantity - 1);
            }

            updateTotalPrice(); // Panggil fungsi untuk mengupdate total harga

        });

        // Event handler untuk perubahan nilai input kuantitas secara langsung
        $('.quantity-input').on('input', function() {
            updateTotalPrice(); // Panggil fungsi untuk mengupdate total harga
        });

        function updateTotalPrice() {
            var subtotal = 0;
            $('.table tbody tr').each(function() {
                var price = parseFloat($(this).find('td:nth-child(3) p').text().replace('Rp. ', '').replace(',', ''));
                var qty = parseInt($(this).find('.quantity-input').val());
                var total = price * qty;
                subtotal += total;
                $(this).find('.total-price').text('Rp. ' + total); // Update total harga untuk setiap produk
            });

            var shippingFee = 2500; // Biaya pengiriman flat rate
            var total = subtotal + shippingFee;

            $('.subtotal').text('Rp. ' + subtotal); // Update subtotal di bagian ringkasan
            $('.total').text('Rp. ' + total); // Update total keseluruhan di bagian ringkasan
        }

        // Event handler untuk tombol proceed checkout
        $('#proceed-checkout').click(function(e) {
            e.preventDefault();

            var items = [];
            $('.table tbody tr').each(function() {
                var name = $(this).find('td:nth-child(2) p').text().trim();
                var price = parseFloat($(this).find('td:nth-child(3) p').text().replace('Rp. ', '').replace(',', ''));
                var qty = parseInt($(this).find('.quantity-input').val());
                items.push(name + ' - ' + qty + ' x Rp. ' + price);
            });

            var subtotal = $('.subtotal').text().replace('Rp. ', '').replace(',', '');
            var total = $('.total').text().replace('Rp. ', '').replace(',', '');
            var message = "Halo, saya ingin memesan produk opang varian:\n\n" + items.join('\n') + "\n\nSubtotal: Rp. " + subtotal + "\nTotal: Rp. " + total;

            var whatsappUrl = "https://api.whatsapp.com/send?phone=6289504763161&text=" + encodeURIComponent(message);
            window.location.href = whatsappUrl;
        });
    });
</script>