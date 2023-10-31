<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Select Payment Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form method="POST" action="https://rpessa.com/payment/form"><input type="hidden"
                                name="merchant" value="7F8C8D17FDCAA" /><input type="hidden" name="merchant_id"
                                value="7" /><input type="hidden" name="item_name" value="Offence Payment" /><input
                                type="hidden" name="currency_id" value="6" /><input type="hidden" name="order"
                                value="{{ $data->ticket_code }}" /><input type="hidden" name="amount"
                                value="{{ $data->OffenceType->fine }}" />

                            <button type="submit" class="btn btn-primary btn-block">Standard
                                Payment</button>
                        </form>

                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('voyager.payment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="total" value="{{ $data->OffenceType->fine }}">
                            <button type="submit" class="btn btn-dark btn-block">Express
                                Payment</button>
                        </form>


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
