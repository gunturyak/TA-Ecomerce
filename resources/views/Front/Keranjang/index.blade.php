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
                                        <th scope="col">Products</th>
                                        <th scope="col">Varian</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Handle</th>
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
                        <div class="mt-5">
                            <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Coupon Code">
                            <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Apply Coupon</button>
                        </div>
                        <div class="row g-4 justify-content-end">
                            <div class="col-8"></div>
                            <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                                <div class="bg-light rounded">
                                    <div class="p-4">
                                        <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="mb-0 me-4">Subtotal:</h5>
                                            <p class="mb-0 subtotal">Rp. {{ $subtotal }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-0 me-4">Shipping</h5>
                                            <div class="">
                                                <p class="mb-0">Flat rate: Rp. 2.500</p>
                                            </div>
                                        </div>
                                        <p class="mb-0 text-end">Shipping to Indonesia.</p>
                                    </div>
                                    <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                                        <h5 class="mb-0 ps-4 me-4">Total</h5>
                                        <p class="mb-0 total">Rp. {{ $total }}</p>
                                    </div>
                                    <button class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button">Proceed Checkout</button>
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
    });
</script>