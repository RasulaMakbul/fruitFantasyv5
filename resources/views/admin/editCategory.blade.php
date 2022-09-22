@extends('admin.layout.master')

@section('content')

<div class="justify-content-md-center pb-2">
    <form action="#" method="POST" class="form-login align-items-center">
        <div class="col-md-auto pb-2">
            <input type="text" class="form-control" name="id" value="1" hidden required>
        </div>
        <div class="col-md-auto pb-2">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="Pink Lady" required>
        </div>
        <div class="col-md-auto pb-2">
            <label class="form-label">Product</label>
            <input type="text" class="form-control" name="products" value="10" required>
        </div>
        <div class="col-md-auto pb-2">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui explicabo soluta earum provident in doloribus odit quas aut dignissimos, facilis at facere, minus maiores repellat nemo perspiciatis quam non! Minima?" required>
        </div>
        <div class=" justify-content-center fs-3 mb-2">
            <button class="btn btn-primary" type="submit" name="submit">Save</button>
            <a href=".#" class="btn btn-success " type="submit">back</a>
        </div>
    </form>
</div>
@endsection