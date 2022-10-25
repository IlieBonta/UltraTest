<div class="container-fluid">
    <div>
        <h1 class="text-center m-5">Products List</h1>
    </div>
    @if(Auth::check())
    <div class="row row-cols-1 m-auto mt-5 row-cols-md-3 mb-3 text-center">
        @foreach($products as $productItem)
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">{{$productItem->name}}</h4>
                    </div>
                    <div >
                        <img src="storage/{{$productItem->image}}" alt="image" class="items-center mt-2" width="250"
                             height="200">
                    </div>
                    <div class="card-body">
                        <h2 class=" card-title pricing-card-title">{{$productItem->price}}$</h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>{{$productItem->description}}</li>
                            <li><small>{{$productItem->created_at}}</small></li>
                        </ul>
                        <div class="d-flex justify-content-around">
                         {{--   @livewire('add-to-basket-button', ['productId' => $productItem->id])--}}
                            <livewire:add-to-basket-button :productId="$productItem->id" />
                            <a href="{{--{{ route('edit-product',$productItem->id) }}--}}">
                                <button type="button" class="w-20 btn btn-lg btn btn-outline-dark m-1">Take a Look
                                </button>
                            </a>
                            <a href="{{--{{ route('edit-product',$productItem->id) }}--}}">
                                <button type="button" class="w-20 btn btn-lg btn btn-outline-success m-1">Buy Now
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif
</div>
