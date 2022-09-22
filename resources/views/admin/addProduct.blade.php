<x-master>
    <div class="justify-content-md-center pb-2">
        <form action="#" method="POST" class="form-login align-items-center">
            <div class="col-md-auto pb-2">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Product Name" required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Category Name</label>

                <div class="form-label">
                    <select name="categoryName">
                        <option>Select Category</option>
                        <option>
                            <p>Apple</p>
                            <p>Foregin</p>
                            <p>Continental</p>
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" placeholder="Select from category list" required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" placeholder="More details about the category type" required>
            </div>
            <div class=" justify-content-center fs-3 mb-2">
                <button class="btn btn-primary" type="submit" name="submit">Save</button>
                <a href="#" class="btn btn-success " type="submit">back</a>
            </div>


        </form>
    </div>

</x-master>