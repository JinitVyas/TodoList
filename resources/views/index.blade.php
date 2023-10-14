@extends('layout/main')

@section('namaste')
    <div class="container my-5 d-flex align-items-center justify-content-center">

        <form action="/Add" method="post" class="w-50">
            @csrf
            <div class="mb-3">
                <label for="ItemName" class="form-label">Item Name</label>
                <input type="text" class="form-control" name="ItemName" id="ItemName" aria-describedby="emailHelpId">
            </div>
            <div class="mb-3">
                <label for="ItemDesc" class="form-label">Item Description</label>
                <textarea class="form-control" name="ItemDesc" id="ItemDesc" rows="4" wrap></textarea>
            </div>
            <button type="submit" name="AddItem" class="btn btn-success">Add Item</button>
        </form>
    </div>

        <hr>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="table-responsive">
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Item Name</th>
                        <th>Item Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $c = 1;
                    @endphp
                    @foreach($Items as $item)
                    <tr>
                        <td>{{ $c }}</td>
                        <td>{{ $item->ItemName }}</td>
                        <td>{{ $item->ItemDesc }}</td>
                        <td>
                            <a href="Delete/{{$item->ItemId}}" class="bi bi-trash"></a>
                            <a href="Edit/{{$item->ItemId}}" class="bi bi-pen"></a>
                        </td>
                    </tr>
                    @php
                        $c += 1;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection