@extends('common.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card px-2">
                <div class="card-body">
                <div class="col-12">
                    <h2>Please Enter your complain</h2>
                    <br>
                </div>
                <form class="pt-3" method="post" action="{{route('addcomplain')}}" enctype="multipart/form-data">
                     @csrf
                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label required"><b>Title</b></label>
                            <div class="col-sm-10">
                                <input type='text' class='form-control' name='title' 
                                style="border:1px solid #08113b33;" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label required"><b>Content</b></label>
                            <div class="col-sm-10">
                                <textarea class='form-control' name='content' 
                                style="border:1px solid #08113b33;" rows='10' required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                        <div class="table-responsive w-100">
                            <table class="table" id="tableDiv">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>#</th>
                                        <th>First Document</th>
                                        <th>Second Document</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr class="text-right" id="row_1">
                                        <td class="text-left">1</td>
                                        
                                        <td><input type="file" class="form-control" name="doc1" id="quantity_1"
                                                placeholder=""></td>
                                        <td><input type="file" class="form-control" name="doc2" id="quantity_1"
                                                placeholder=""></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container-fluid w-100">
                        <input type='submit' class="btn btn-primary float-right mt-4 ml-2" value='submit' name='submit'>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')


<script>
var count = 20;

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
        url: "",
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