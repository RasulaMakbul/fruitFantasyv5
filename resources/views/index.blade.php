@extends('user.layout.master')

@section('content')
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/user')}}/img/banana.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/user')}}/img/rMango.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/user')}}/img/Watermelon.jpg" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container mt-5 border p-3">
    <div class="row">
        <div class="col-sm-3">
            <div class="categoriesList">
                <ul>
                    <li><a class="sideFilter" href="#">Apple</a></li>
                    <li><a class="sideFilter" href="#">Citrus</a></li>
                    <li><a class="sideFilter" href="#">Stone Fruit</a></li>
                    <li><a class="sideFilter" href="#">Tropical and Exotic</a></li>
                    <li><a class="sideFilter" href="#">Berries</a></li>
                    <li><a class="sideFilter" href="#">Melons</a></li>
                    <li><a class="sideFilter" href="#">Tomatoes and Avocados</a></li>
                    <li><a class="sideFilter" href="#">Summer Season Fruits</a></li>
                    <li><a class="sideFilter" href="#">Dry Fruits</a></li>
                    <li><a class="sideFilter" href="#">Green Fruit</a></li>
                    <li><a class="sideFilter" href="#">High Vitamin C</a></li>
                </ul>
            </div>

        </div>
        <div class="col-sm-9">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card homepageProduct">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/user')}}/img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pink Lady</h5>
                            <p class="card-text">Apple</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nihil est cum quisquam ducimus, deserunt optio modi ab odio voluptate laboriosam eum? Fugiat magnam numquam voluptas dolores nam modi ipsa.</p>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="testomonial">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card text-center">
                    <div class="card-header">Reviews</div>
                    <div class="card-body">
                        <h5 class="card-title">Apples were fresh</h5>
                        <img src="{{asset('assets/user')}}/img/apple.jpg" alt="" />
                        <p class="card-text">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
                        </p>
                    </div>
                    <div class="card-footer text-muted">2 days ago</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">Reviews</div>
                    <div class="card-body">
                        <h5 class="card-title">Watermelon were fresh</h5>
                        <img src="{{asset('assets/user')}}/img/Watermelon.jpg" alt="" />
                        <p class="card-text">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
                        </p>
                    </div>
                    <div class="card-footer text-muted">2 days ago</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">Reviews</div>
                    <div class="card-body">
                        <h5 class="card-title">Mangoes were fresh</h5>
                        <img src="{{asset('assets/user')}}/img/rMango.jpg" alt="" />
                        <p class="card-text">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
                        </p>
                    </div>
                    <div class="card-footer text-muted">2 days ago</div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@endsection