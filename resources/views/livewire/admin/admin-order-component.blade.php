<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> All Orders
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        All Orders
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('order_message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table clean">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Total</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>ZIP Code</th>
                                                <th>Status</th>
                                                <th>Order Date</th>
                                                <th colspan="2" class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>Rp{{ number_format($order->total, 0) }}</td>
                                                <td>{{$order->firstname}}</td>
                                                <td>{{$order->lastname}}</td>
                                                <td>{{$order->phone}}</td>
                                                <td>{{$order->email}}</td>
                                                <td>{{$order->zipcode}}</td>
                                                <td>{{$order->status}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td><a href="{{route('admin.orderdetails', ['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Details</a></td>
                                                <td>
                                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Status</button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{$order->id}}, 'delivered')">Delivered</a></li>
                                                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{$order->id}}, 'canceled')">Canceled</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{$orders->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>