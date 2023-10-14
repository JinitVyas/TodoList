@extends('layout/main')

@section('namaste')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css'>
    <div class='container d-flex justify-content-center'>

        <form action='/Edit/{{ $item->ItemId }}' method='post' class='w-50'>
            @csrf
            @method('PUT')
            <input type="hidden" name="ItemId" value="{{$item->ItemId}}">
            <div class='mb-3'>
                <label for='ItemName' class='form-label'>Item Name</label>
                <input type='text' class='form-control' name='ItemName' id='ItemName' aria-describedby='emailHelpId' value="{{$item->ItemName}}">
            </div>
            <div class='mb-3'>
                <label for='ItemDesc' class='form-label'>Item Description</label>
                <textarea class='form-control' name='ItemDesc' id='ItemDesc' rows='4' wrap>{{$item->ItemDesc}}</textarea>
            </div>
            <button type='submit' name='AddItem' class='btn btn-success'>Add Item</button>
        </form>

    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>

@endsection