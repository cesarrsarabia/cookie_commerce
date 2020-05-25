@extends('layouts.master')

@section('header_content')
<style>
    p{
        color:red
    }
</style>

@endsection

@section('content')
<!-- checkout-area start -->
{!! Form::open(['route' => ['storeVenta'],'method' => 'POST']) !!}
<div class="checkout-area ptb-100">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">

                <div class="checkbox-form">
                    <h3>Dirección de Envio</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>País<span class="required">*</span></label>
                                <input name="pais" type="text" placeholder="" value="México" readonly/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Estado <span class="required">*</span></label>
                                <input name="estado" type="text" placeholder="" />

                                @error('estado')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Municipio<span class="required">*</span></label>
                                <input name="municipio" type="text" placeholder="" />
                                @error('municipio')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Calle<span class="required">*</span></label>
                                <input name="calle" type="text" placeholder="" />
                                @error('calle')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Num. Ext <span class="required">*</span></label>
                                <input name="num_exterior" type="text" />
                                @error('num_exterior')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>C. Postal<span class="required">*</span></label>
                                <input name="cod_postal" type="text" />
                                @error('cod_postal')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Telefono <span class="required">*</span></label>
                                <input name="telefono" type="text" />
                                @error('telefono')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="your-order">
                    <h3>Pedido</h3>
                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">Producto</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cartProductos as $cartProducto)
                                <tr class="cart_item">
                                    <td class="product-name">
                                        {{$cartProducto->nombre_product}} <strong class="product-quantity"> ×
                                            {{$cartProducto->cantidad}}</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">${{$cartProducto->precio * $cartProducto->cantidad}}</span>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                            <tfoot>

                                <tr class="order-total">
                                    <th>Total Pedido</th>
                                    <td><strong><span class="amount">${{$total}}</span></strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">

                <div class="checkbox-form">
                    <h3>Metodo de Pago</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Nombre Titular<span class="required">*</span></label>
                                <input name="nombre_titular" type="text" placeholder="" />
                                @error('nombre_titular')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Numero Tarjeta<span class="required">*</span></label>
                                <input id="numTarjeta" maxlength="19" name="num_tarjeta" type="text" placeholder="" />
                                @error('num_tarjeta')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>F. Vencimiento <span class="required">*</span></label>
                                <input name="f_vencimiento" type="text" placeholder="" />
                                @error('f_vencimiento')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>CVV<span class="required">*</span></label>
                                <input id="cvv" name="cvv" type="text" placeholder="" maxlength="3" />
                                @error('cvv')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-7">
                <div class="order-button-payment">
                    <input type="submit" value="Ordenar" />
                </div>
            </div>

        </div>

    </div>
</div>
{!! Form::close()!!}
<!-- checkout-area end -->
@endsection


@section('scripts')


<script type="text/javascript">
    document.getElementById('numTarjeta').addEventListener('input', function (e) {
        e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
            });


        function setInputFilter(textbox, inputFilter) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
            });
        });
        }

        setInputFilter(document.getElementById("cvv"), function(value) {
            return /^-?\d*$/.test(value);
             });
             
</script>

@endsection