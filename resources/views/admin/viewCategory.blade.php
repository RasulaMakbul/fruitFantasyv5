<x-master>
    <div class=" justify-content-center fs-5 mb-3">
        <a href="{{url('addProduct')}}" class="btn btn-success" type="submit">Add Product</a>
    </div>
    <table class=" table table-success table-striped table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Pink Lady</td>
                <td>Apples</td>
                <td>10</td>
                <td>
                    <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                    <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                </td>
            </tr>
            <tr>
                <td scope="row">2</td>
                <td>Bramley</td>
                <td>Apples</td>
                <td>10</td>
                <td>
                    <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                    <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</x-master>