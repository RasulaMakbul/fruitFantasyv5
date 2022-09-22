<x-master>
    <div class="justify-content-md-center pb-2">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="mt3">
                                Pink Lady
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">About</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Product Name</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    Pink Lady
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Category</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    Apple
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    Available Quantity
                                </div>
                                <div class="col-md-9 text-secondary">
                                    100
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    Description
                                </div>
                                <div class="col-md-9 text-secondary">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum debitis iusto temporibus modi maiores, quibusdam laborum perferendis! Eligendi cum dolorem eveniet, amet reiciendis, iusto maiores vel minima nulla nobis iste!
                                </div>
                            </div>

                            <div class=" justify-content-center fs-3 mb-3">
                                <a href="{{url('editProduct')}}" class="btn btn-secondary w-50 mt-5" type="submit">Edit</a>
                                <a href="{{url('productList')}}" class="btn btn-success w-50 mt-1" type="submit">Back to List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>