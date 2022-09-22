<x-master>
    <div class="justify-content-md-center pb-2">

        <form action="#" method="POST" class="form-login align-items-center">
            <div class="col-md-auto pb-2">
                <input type="text" class="form-control" name="id" value="1" hidden required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">First name</label>
                <input type="text" class="form-control" name="fName" value="aaa" required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Last name</label>
                <input type="text" class="form-control" name="lName" value="bbb" required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="email" class="form-control" name="email" value="ab@c.com" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" value="11111" required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">password</label>
                <input type="text" class="form-control" name="passw" value="1234" required>
            </div>
            <div class="col-md-auto pb-2">
                <label class="form-label">Retype Password</label>
                <input type="text" class="form-control" placeholder="retype Password" required>
            </div>

            <div class="form-group mb-3">
                <label>Gender</label> &nbsp;
                <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                <label for="male" class="form-input-label">Male</label>
                &nbsp;

                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label for="female" class="form-input-label">Female</label>
            </div>

            <div class="col-md-auto pb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <div class=" justify-content-center fs-3 mb-1 p-1">
                <button class="btn btn-primary w-100" type="submit" name="submit">Save</button>
            </div>
            <div class=" justify-content-center fs-3 mb-5 p-1">
                <a href="userList" class="btn btn-success w-100" type="submit">Back</a>
            </div>
        </form>
    </div>


</x-master>