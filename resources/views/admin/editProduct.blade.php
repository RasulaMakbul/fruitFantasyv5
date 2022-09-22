@extends('admin.layout.master')

@section('content')
<div class="justify-content-md-center pb-2">
    <form action="#" method="POST" class="form-login align-items-center">
        <div class="col-md-auto pb-2">
            <input type="text" class="form-control" name="id" value="1" hidden required>
        </div>
        <div class="col-md-auto pb-2">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="Pink Lady" required>
        </div>
        <div class="col-md-auto pb-2">
            <label class="form-label">Category Name</label>
            <input type="text" class="form-control" name="categoryName" value="Apple" required>
        </div>
        <div class="col-md-auto pb-2">
            <label class="form-label">Quantity</label>
            <input type="text" class="form-control" name="quantity" value="100" required>
        </div>
        <div class="col-md-auto pb-2">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error maiores, natus consequatur aliquam nesciunt nobis dolorum deserunt, iste aliquid iure quia ab, veniam veritatis illum cum doloribus quas dolores dolorem." required>
        </div>
        <div class=" justify-content-center fs-3 mb-2">
            <button class="btn btn-primary" type="submit" name="submit">Save</button>
            <a href="#" class="btn btn-success " type="submit">back</a>
        </div>


    </form>
</div>

@endsection