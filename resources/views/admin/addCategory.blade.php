<x-master>
    <div class="justify-content-md-center pb-2">
        <form action="#" method="POST" class="form-login align-items-center">
            <div class="col-md-auto pb-2">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Category Name" required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Product</label>
                <input type="text" class="form-control" name="products" placeholder="will be auto generated after foreign key add" required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" placeholder="More details about the category type" maxlength="255" required>
            </div>
            <div class=" justify-content-center fs-3 mb-2">
                <button class="btn btn-primary" type="submit" name="submit">Save</button>
                <a href="#" class="btn btn-success " type="submit">back</a>
            </div>
        </form>
    </div>
</x-master>