<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>
<body>
@include('header')
<h1 class="text-center mt-3"> Order page </h1>

<form action="form/submit"
      class="flex text-center rounded-3 shadow-sm bg-light px-md-5 py-md-3 form-control-lg"
      method="post">
    @csrf
    <div class="row gap-4 justify-content-center">

        <div class="col-2 mb-md-3 form-group">
            <label for="name">Enter your name</label>
            <input required minlength="3" maxlength="15" type="text" name="name" placeholder="Enter your name" id="name"
                   class="rounded-3 shadow-sm form-control" >
        </div>
        <div class=" col-2 mb-md-3 form-group">
            <label for="surname">Enter your surname</label>
            <input required minlength="3" maxlength="15" type="text" name="surname" placeholder="Enter your surname"
                   id="surname" class=" rounded-3 shadow-sm form-control">
        </div>
    </div>

    {{--список чтобы вывести с его помощю товары в корзине--}}
    <div class="row py-5 row-cols-1 bg-white rounded-5 row-cols-lg-4 ">
        <div class="col">
            <div class=" m-auto mb-md-3">
                <label for="totalMoney">Total Order Cost</label>
                @foreach($productId as $productPrice )
                <p>{{0}} $</p>{{--тут выводим сумму покупки--}}
                @endforeach
            </div>
        </div>

        <div class="col">
            <p>Chose the delivery method:</p>
            <div class="mb-md-3">
                <input required class="form-check-input" type="radio" id="novaPosta" name="delivery" value="novaPosta">
                <label for="novaPosta">NovaPosta</label>
            </div>
            <div class="mb-md-3">
                <input required class="form-check-input" type="radio" id="pickup" name="delivery" value="pickup">
                <label for="pickup">Pickup</label>
            </div>
            <div class="mb-md-3">
                <input required class="form-check-input" type="radio" id="townDelivery" name="delivery"
                       value="townDelivery">
                <label for="townDelivery">Delivery in Chisinau</label>
            </div>

        </div>
        <div class="col ">
            <p>Chose the payment Method:</p>
            <div class="mb-md-3">
                <input required class="form-check-input" type="radio" id="cardPayment" name="paymentMethod" value="cardPayment">
                <label for="cardPayment">Card Payment</label>
            </div>
            <div class="mb-md-3">
                <input required class="form-check-input" type="radio" id="cash" name="paymentMethod" value="cash">
                <label for="cash">Cash in hands</label>
            </div>
            <div class="mb-md-3">
                <input required class="form-check-input" type="radio" id="transfer" name="paymentMethod"
                       value="transfer">
                <label for="townDelivery">Transfer</label>
            </div>

        </div>

        <div class="col">
            <p>In Your Basket are:</p>
            <div class="">
                Items
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </div>
        </div>
    </div>
    <div>
        <button type="submit" class="mb-md-3 mt-2 btn btn-success">BUY</button>
    </div>
</form>
</body>
</html>
