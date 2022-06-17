@extends('common.master')
@section('content')
<div class="content-wrapper">
    <!-- <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card bg-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">Hi, Welcomeback!</h4>
                    <button class="btn btn-info d-none d-md-block">Import</button>
                </div>
            </div>
        </div>
    </div> -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card px-2">
                <div class="card-body">
                    <!-- <div class="container-fluid">
                        <h3 class="text-right my-5">Invoice&nbsp;&nbsp;#INV-17</h3>
                        <hr>
                    </div> -->
                    <div class="container-fluid d-flex justify-content-between">
                        <div class="col-lg-3 pl-0">
                            <p class="mt-5 mb-2"><b>Fily Admin</b></p>
                            <p>104,<br>Minare SK,<br>Canada, K1A 0G9.</p>
                        </div>
                        <div class="col-lg-3 pr-0">
                            <p class="mt-5 mb-2 text-right"><b>Invoice to</b></p>
                            <p class="text-right">Gaala & Sons,<br> C-201, Beykoz-34800,<br> Canada, K1A 0G9.</p>
                        </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-between">
                        <div class="col-lg-3 pl-0">
                            <p class="mb-0 mt-5">Licensee Id No : 01/2007/0003</p>
                            <!-- <p class="mb-0 mt-5">Invoice Date : {{date('d M Y')}}</p> -->
                            <p>Invoice Date : {{date('d M Y')}}</p>
                            <!-- <p>Due Date : 25th Jan 2017</p> -->
                        </div>
                    </div>
                    <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                        <div class="table-responsive w-100">
                            <table class="table" id="tableDiv">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>#</th>
                                        <th>Brand Name</th>
                                        <th class="text-right">Rate</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr class="text-right" id="row_1">
                                        <td class="text-left">1</td>
                                        <td class="text-left">
                                            <select class="form-control" name="brand_name[]" id="brand_name_1">
                                                <option value=""> --Select-- </option>
                                                @foreach($liquor_details as $liquor)
                                                <option value="{{$liquor->id}}">{{$liquor->brand_name." ".$liquor->measure}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" name="rate[]" id="rate_1"
                                                placeholder="Rate" readonly></td>
                                        <td><input type="text" class="form-control" name="quantity[]" id="quantity_1"
                                                placeholder="Quantity"></td>
                                        <td><input type="text" class="form-control" name="amount[]" id="amount_1"
                                                placeholder="Amount" readonly></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="col-12">
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label"> &nbsp;</label>
                            <div class="col-sm-12">
                                <center><button type="button" class="btn btn-success" id="dynamic_add"><i
                                            class="fa fa-plus"></i> Add Another</button></center>
                            </div>
                        </div>
                    </div> -->
                    <div class="container-fluid d-flex w-100">
                        <a href="javascript:void(0)" class="btn btn-success float-right mt-4" id="dynamic_add"><i
                                class="mdi mdi-plus"></i>Add</a>
                        <!-- <hr> -->
                    </div>
                    <!-- <div class="container-fluid mt-5 d-flex w-100">
                        <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i
                                class="mdi mdi-printer mr-1"></i>Print</a>
                        <a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-telegram mr-1"></i>Send
                            Invoice</a>

                    </div> -->
                    <div class="container-fluid mt-5 w-100">
                        <!-- <p class="text-right mb-2">Sub - Total amount: $12,348</p> -->
                        <!-- <p class="text-right">vat (10%) : $138</p> -->
                        <h4 class="text-right mb-5">Total : <span id="subtotal">0.00</span></h4>
                        <hr>
                    </div>
                    <div class="container-fluid w-100">
                        <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i
                                class="mdi mdi-printer mr-1"></i>Print</a>
                        <a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-telegram mr-1"></i>Send
                            Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection

@section('script')


<script>
var count = 20;
// var x = $('#table tbody > tr').length;
var x = $('#tableDiv > tbody > tr').length;
// alert(x);
$('#dynamic_add').click(function() {
    // alert('hii')
    // var total = parseInt($('#tot_memb').val());
    if (x < count) {
        if ($('#brand_name_'+x).val() != '') {
        x++;

        $('#tbody').append('<tr id="row_' + x + '">' +
            '<td class="text-left">'+ x +'</td><td class="text-left">'+
            '<select class="form-control" name="brand_name[]" id="brand_name_'+ x + '"><option value=""> --Select-- </option>'+
            '<?php 
            foreach($liquor_details as $liquor){
               echo "<option value=".$liquor->id.">".$liquor->brand_name." ".$liquor->measure."</option>"; 
            }
            ?>'+
            '</select></td>'+
            '<td><input type="text" class="form-control" name="rate[]" id="rate_'+ x +'" placeholder="Rate" readonly></td>'+
            '<td><input type="text" class="form-control" name="quantity[]" id="quantity_'+ x +'" placeholder="Quantity"></td>'+
            // '<td><input type="text" class="form-control" name="amount[]" id="amount_'+ x +'" placeholder="Amount" readonly></td>'+
            '<td><input type="text" class="form-control" name="amount[]" id="amount_'+ x +'" placeholder="Amount" readonly><button type="button" id="remove_' + x +
            '" class="btn btn-danger btn-rounded btn-icon" onclick="_delete(' + x +
            ')"><i class="mdi mdi-delete"></i></button></td>'+
            // '<td><button type="button" id="remove_' + x +
            // '" class="btn btn-danger btn-rounded btn-icon" onclick="_delete(' + x +
            // ')"><i class="mdi mdi-delete"></i></button></td>' +
            '</tr>');
        // var y = x-1;

        // $('#tot_shg').val(y);
        // $('#tot_memb').val(total);



        } else {
            alert('Please Fill the brand name');
            // alert('Please Fill All Details');
            return false;
        }

        $('#brand_name_' + x).on('change', function() {
            // alert('hii');
            var val=$('#brand_name_'+x).val();
            // alert(val)
            brandName(val,x);
        })
    }
});

function _delete(id) {
    var r = confirm("Do you want to delete this?");
    if (r == true) {
        $('#row_' + id).remove();
        // $('#rowHr_' + id).remove();
        x--;
    } else {
        return false;
    }
}

$('#brand_name_1').on('change', function() {
    // alert('hii');
    var val=$('#brand_name_1').val();
    // alert(val)
    var x=1;
    brandName(val,x);
})


$('#quantity_1').on('change', function() {
    // alert('hii');
    var quantity=$('#quantity_1').val();
    var rate=$('#rate_1').val();
    // alert(rate)
    amount=rate*quantity;
    $('#amount_1').val()
    $('#amount_1').val(amount)
    $('#subtotal').empty()
    $('#subtotal').append(amount)
    // brandName(val);
})

function brandName(id,x) {
    $.ajax({
        // headers: {
        //     'X-CSRF-TOKEN': "{{ csrf_token() }}"
        // },
        url: "{{route('saleAjax')}}",
        method: "POST",
        // dataType: 'json',
        data: {
            id: id
        },
        // contentType:"application/json; charset=utf-8",
        success: function(data) {
            // alert(data);
            var obj = JSON.parse(data);
            var rate_1=obj.mrp

            $('#rate_'+x).val()
            $('#rate_'+x).val(rate_1)
            $('#quantity_'+x).val()
            $('#quantity_'+x).val(1)
            $('#amount_'+x).val()
            $('#amount_'+x).val(rate_1)
            var subtotal=0;
            for (let index = 1; index <= x; index++) {
                // const element = array[index];
                var amount= $('#amount_'+index).val();
                subtotal=Number(subtotal) + Number(amount);
                
            }
            // alert(subtotal);
            $('#subtotal').empty()
            $('#subtotal').append(subtotal)
            
        }
    });
}
</script>

@endsection