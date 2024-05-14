@extends('app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-9">
                    <div class="card">
                        <form id="invoice_form" method="POST" action="{{ route('store') }}">
                            @csrf
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table class="invoice-table table table-borderless table-nowrap mb-0">
                                        <thead class="align-middle">
                                            <tr class="table-active">
                                                <th scope="col" style="width: 50px;">#</th>
                                                <th scope="col">Détail de la commande</th>
                                                <th scope="col" style="width: 120px;">Prix unitaire</th>
                                                <th scope="col" style="width: 120px;">Quantity</th>
                                                <th scope="col" class="text-end" style="width: 150px;">Amount</th>
                                                <th scope="col" class="text-end" style="width: 105px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="newlink">
                                            <tr id="1" class="product">
                                                <th scope="row" class="product-id">1</th>
                                                <td class="text-start">
                                                    <div class="mb-2">
                                                        <select class="form-select bg-light border-0 select_product"
                                                            id="productName-1" name="products[0][menu]" required>
                                                            <option value="">Selectionner un produit</option>
                                                            @foreach ($menus as $menu)
                                                                <option data-price="{{ $menu->price }}"
                                                                    value="{{ $menu->id }}">{{ $menu->name }}
                                                                    ({{ $menu->price }} CFA)</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="number"
                                                        class="form-control product-price bg-light border-0"
                                                        id="productRate-1" name="products[0][price]" step="0.01"
                                                        placeholder="0.00" required />
                                                </td>
                                                <td>
                                                    <div class="input-step">
                                                        <button type="button" class='minus'>–</button>
                                                        <input type="number" class="product-quantity" id="product-qty-1"
                                                            name="products[0][quantity]" value="1" readonly>
                                                        <button type="button" class='plus'>+</button>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control bg-light border-0 product-line-price"
                                                            id="productPrice-1" name="products[0][total]" placeholder="0.00"
                                                            readonly />
                                                    </div>
                                                </td>
                                                <td class="product-removal">
                                                    <a href="javascript:void(0)" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr id="newForm" style="display: none;">
                                                <td class="d-none" colspan="5">
                                                    <p>Add New Form</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <a href="javascript:new_link()" id="add-item"
                                                        class="btn btn-soft-secondary fw-medium"><i
                                                            class="ri-add-fill me-1 align-bottom"></i> Ajouter une ligne</a>
                                                </td>
                                            </tr>
                                            <tr class="border-top border-top-dashed mt-2">
                                                <td colspan="3"></td>
                                                <td colspan="2" class="p-0">
                                                    <table
                                                        class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Sous total</th>
                                                                <td style="width:150px;">
                                                                    <input type="text"
                                                                        class="form-control bg-light border-0"
                                                                        id="cart-subtotal" name="subtotal"
                                                                        placeholder="0.00" readonly />
                                                                </td>
                                                            </tr>
                                                            <tr class="border-top border-top-dashed">
                                                                <th scope="row">Total Amount</th>
                                                                <td>
                                                                    <input type="text"
                                                                        class="form-control bg-light border-0"
                                                                        id="cart-total" name="total" placeholder="0.00"
                                                                        readonly />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                    <button type="submit" class="btn btn-success"><i
                                            class="ri-printer-line align-bottom me-1"></i> Enregistrer</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
    </div>
    <script>
        let productCount = 1;

        function new_link() {
            productCount++;
            const newRow = document.querySelector('.product').cloneNode(true);
            newRow.id = productCount;
            newRow.querySelector('.product-id').textContent = productCount;
            updateNames(newRow, productCount - 1);
            newRow.querySelectorAll('input').forEach(input => input.value = '');
            newRow.querySelector('.product-quantity').value = 1;
            document.getElementById('newlink').appendChild(newRow);
            attachEventListeners(newRow);
        }

        function updateNames(row, index) {
            row.querySelector('.select_product').id = `productName-${productCount}`;
            row.querySelector('.select_product').name = `products[${index}][menu]`;
            row.querySelector('.product-price').id = `productRate-${productCount}`;
            row.querySelector('.product-price').name = `products[${index}][price]`;
            row.querySelector('.product-quantity').id = `product-qty-${productCount}`;
            row.querySelector('.product-quantity').name = `products[${index}][quantity]`;
            row.querySelector('.product-line-price').id = `productPrice-${productCount}`;
            row.querySelector('.product-line-price').name = `products[${index}][total]`;
        }

        function updatePriceAndAmount(row) {
            const price = parseFloat(row.querySelector('.select_product').selectedOptions[0].dataset.price);
            row.querySelector('.product-price').value = price.toFixed(2);
            calculateAmount(row);
        }

        function calculateAmount(row) {
            const price = parseFloat(row.querySelector('.product-price').value);
            const quantity = parseInt(row.querySelector('.product-quantity').value);
            const linePrice = price * quantity;
            row.querySelector('.product-line-price').value = linePrice.toFixed(2);
            calculateTotal();
        }

        function increaseQuantity(row) {
            const quantityInput = row.querySelector('.product-quantity');
            quantityInput.value = parseInt(quantityInput.value) + 1;
            calculateAmount(row);
        }

        function decreaseQuantity(row) {
            const quantityInput = row.querySelector('.product-quantity');
            if (quantityInput.value > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
                calculateAmount(row);
            }
        }

        function deleteRow(row) {
            row.remove();
            calculateTotal();
        }

        function calculateTotal() {
            let subtotal = 0;
            document.querySelectorAll('.product-line-price').forEach(input => {
                subtotal += parseFloat(input.value) || 0;
            });
            document.getElementById('cart-subtotal').value = subtotal.toFixed(2);
            document.getElementById('cart-total').value = subtotal.toFixed(2);
        }

        function attachEventListeners(row) {
            row.querySelector('.select_product').addEventListener('change', () => updatePriceAndAmount(row));
            row.querySelector('.plus').addEventListener('click', () => increaseQuantity(row));
            row.querySelector('.minus').addEventListener('click', () => decreaseQuantity(row));
            row.querySelector('.btn-danger').addEventListener('click', () => deleteRow(row));
            row.querySelector('.product-quantity').addEventListener('input', () => calculateAmount(row));
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.product').forEach(row => attachEventListeners(row));
            document.getElementById('add-item').addEventListener('click', new_link);
        });
    </script>
@endsection
