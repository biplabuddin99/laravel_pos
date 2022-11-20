@extends('app')
@section('pageTitle','Product List')
@section('pageSubTitle','List')

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <!-- <th scope="col">Image</th>-->
                                    <th scope="col">Status</th>
                                    <th class="white-space-nowrap">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $p)
                                <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->category?->category}}</td>
                                    <td>{{$p->description}}</td>
                                    <td>{{$p->price}}</td>
                                    <!--  <td><img width="50px" src="{{asset('uploads/product/'.$p->image)}}" alt=""></td>-->
                                    <td>@if($p->status == 1) Active @else Inactive @endif</td>
                                    <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                                    <td class="white-space-nowrap">
                                        <a href="{{route('product.edit',$p->id)}}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <form id="form{{$p->id}}" action="{{route('product.destroy',$p->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Pruduct Found</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- Bordered table end -->


@endsection