@extends('common.master')
@section('content')

<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <!-- <h4 class="card-title">Liquor Type</h4> -->
                <!-- <button class="btn btn-info d-none d-md-block">Import</button> -->
            <div class="card-body d-flex align-items-center justify-content-between">
                <h4 class="mt-1 mb-1">Liquor Type</h4>
                <!-- <h4 class="mt-1 mb-1">Hi, Welcomeback!</h4> -->
               <a href='{{('support')}}'> <button class="btn btn-info d-none d-md-block">Add</button></a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th> #</th>
                                    <!-- <th>Purchased On</th> -->
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Ticket No</th>
                                    <!-- <th>Ship to</th>
                                    <th>Base Price</th>
                                    <th>Purchased Price</th>
                                    <th>Status</th> -->
                                    <!-- <th>Actions</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                @foreach($complains as $complain)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$complain->title}}</td>
                                    <td>{{$complain->content}}</td>
                                    <td>{{$complain->ticket_no}}</td>
                                    <!-- <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td> -->
                                    <!-- <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')


@endsection