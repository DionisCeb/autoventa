@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- <div class="loader"></div> -->
    <nav>
        <div class="logo">
            <a href="/">
                <div class="logo-img"><img src="assets/img/nav/autoventa3.png" alt="logo-deluxe-car"></div>
            </a>
        </div>
        <div class="page-links">
            <a class="nav-btn" href="/about.html">About</a>
            <a class="nav-btn active-link" href="/catalog.html">Catalog</a>
            <a class="nav-btn" href="">Team</a>
            <a class="nav-btn" href="">Blog</a>
        </div>
        <div class="contact-us">
            <!-- <div class="greet-user">
                <p class="greet-user-text">Hello, <span>Mihail</span></p>
            </div> -->
            <a href="#" class="btn">Contact Us</a>
        </div>

        <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <div class="dropdown_menu">
            <li><a href="#" role="menuitem">About</a></li>
            <li><a href="#" role="menuitem">Catalog</a></li>
            <li><a href="#" role="menuitem">Team</a></li>
            <li><a href="#" role="menuitem">Blog</a></li>
            <div class="dropdown_menu--connection">
                <a class="btn" href="/logout">Authentification</a>
            </div>
        </div>
    </nav>

    <header class="header-img">
        <img src="{{ asset('img/gallery/collection.jpg')}}" alt="our collection">

        <div class="header-overlay typewriter">
            <h1>Discover Our collection</h1>
        </div>
    </header>

    <section class="filter-section">
        <div class="filter-container">
            <form class="filter-form">
                <select>
                    <option value="" disabled selected>Makes</option>
                    <!-- Add more options -->
                </select>
                <select>
                    <option value="" disabled selected>Models</option>
                    <!-- Add more options -->
                </select>
                <select>
                    <option value="" disabled selected>Price</option>
                    <!-- Add more options -->
                </select>
                <select>
                    <option value="" disabled selected>Year</option>
                    <!-- Add more options -->
                </select>
                <button class="btn" type="submit">Search Now</button>
            </form>
        </div>
    </section>

    <section class="catalog flex-center">
        <div class="structure">
            <header class="catalog-header flex-right">
                <details class="sortbox">
                    <summary class="sortbox-selected">
                      <span>Sort By:</span>
                    </summary>
                    <ul class="sortbox-list">
                      <li>
                        <label for="option1">Default</label>
                        <input type="radio" name="sortbox" id="option1">
                      </li>
                      <li>
                        <label for="option2">Price: Low-High</label>
                        <input type="radio" name="sortbox" id="option2">
                      </li>
                      <li>
                        <label for="option3">Price: High to Low</label>
                        <input type="radio" name="sortbox" id="option3">
                      </li>
                      <li>
                        <label for="option4">Item 4</label>
                        <input type="radio" name="sortbox" id="option4">
                      </li>
                    </ul>
                </details>


            </header>
            <section class="grid-container">

                <div class="card-car">
                    <div class="card-car-img">
                        <img src="{{ asset('img/gallery/collection/audi-rs7.jpg') }}" alt="Audi RS7">
                        <div class="type-car">
                            <p>Hatchback</p>
                        </div>
                    </div>
                    <div class="card-car-description">
                        <div class="car-description-price">
                            <span>65000£</span>
                            <h2>Audi RS7 2022 Sportback 4.0 TFSI</h2>
                        </div>
                    </div>
                    <div class="card-car-footer">
                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gas-pump"></i>
                            <div class="card--footer-item__desc">
                                <span>Fuel Type</span>
                                <p>Petrol</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-road"></i>
                            <div class="card--footer-item__desc">
                                <span>Mileage</span>
                                <p>10000 km</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gears"></i>
                            <div class="card--footer-item__desc">
                                <span>Transmission</span>
                                <p>Automatic</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-car-button">
                        <a href="/car">VIEW DETAILS <i>→</i></a>
                    </div>
                </div>

                <div class="card-car">
                    <div class="card-car-img">
                        <img src="{{ asset('img/gallery/collection/bmw-m5.jpg') }}" alt="BMW M5">
                        <div class="type-car">
                            <p>Sedan</p>
                        </div>
                    </div>
                    <div class="card-car-description">
                        <div class="car-description-price">
                            <span>35000£</span>
                            <h2>BMW M5 2021 Competition 4.4 V8</h2>
                        </div>
                    </div>
                    <div class="card-car-footer">
                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gas-pump"></i>
                            <div class="card--footer-item__desc">
                                <span>Fuel Type</span>
                                <p>Petrol</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-road"></i>
                            <div class="card--footer-item__desc">
                                <span>Mileage</span>
                                <p>12000 km</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gears"></i>
                            <div class="card--footer-item__desc">
                                <span>Transmission</span>
                                <p>Automatic</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-car-button">
                        <a href="/car">VIEW DETAILS <i>→</i></a>
                    </div>
                </div>

                <div class="card-car">
                    <div class="card-car-img">
                        <img src="{{ asset('img/gallery/collection/ford-mustang.jpg') }}" alt="Ford Mustang">
                        <div class="type-car">
                            <p>Convertible</p>
                        </div>
                    </div>
                    <div class="card-car-description">
                        <div class="car-description-price">
                            <span>45000£</span>
                            <h2>Ford Mustang 2021 5.0 GT Convertible</h2>
                        </div>
                    </div>
                    <div class="card-car-footer">
                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gas-pump"></i>
                            <div class="card--footer-item__desc">
                                <span>Fuel Type</span>
                                <p>Petrol</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-road"></i>
                            <div class="card--footer-item__desc">
                                <span>Mileage</span>
                                <p>5000 km</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gears"></i>
                            <div class="card--footer-item__desc">
                                <span>Transmission</span>
                                <p>Manual</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-car-button">
                        <a href="/car">VIEW DETAILS <i>→</i></a>
                    </div>
                </div>

                <div class="card-car">
                    <div class="card-car-img">
                        <img src="{{ asset('img/gallery/collection/mercedes-benz-amg-gt.jpg') }}" alt="Mercedes AMG GT">
                        <div class="type-car">
                            <p>Coupe</p>
                        </div>
                    </div>
                    <div class="card-car-description">
                        <div class="car-description-price">
                            <span>75000£</span>
                            <h2>Mercedes-Benz AMG GT 2021 4.0 V8</h2>
                        </div>
                    </div>
                    <div class="card-car-footer">
                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gas-pump"></i>
                            <div class="card--footer-item__desc">
                                <span>Fuel Type</span>
                                <p>Petrol</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-road"></i>
                            <div class="card--footer-item__desc">
                                <span>Mileage</span>
                                <p>8000 km</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gears"></i>
                            <div class="card--footer-item__desc">
                                <span>Transmission</span>
                                <p>Automatic</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-car-button">
                        <a href="/car">VIEW DETAILS <i>→</i></a>
                    </div>
                </div>

                <div class="card-car">
                    <div class="card-car-img">
                        <img src="{{ asset('img/gallery/audi.jpg') }}" alt="audi">
                        <div class="type-car">
                            <p>Coupe</p>
                        </div>
                    </div>
                    <div class="card-car-description">
                        <div class="car-description-price">
                            <span>17000£</span>
                            <h2>Audi A7 2021 Luxury Edition 3.0 Turbo</h2>
                        </div>
                    </div>
                    <div class="card-car-footer">
                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gas-pump"></i>
                            <div class="card--footer-item__desc">
                                <span>Fuel Type</span>
                                <p>Diesel</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-road"></i>
                            <div class="card--footer-item__desc">
                                <span>Mileage</span>
                                <p>20000 km</p>
                            </div>
                        </div>

                        <div class="vertical-line"></div>

                        <div class="card-car-footer__item flex-al gap10">
                            <i class="fa-solid fa-gears"></i>
                            <div class="card--footer-item__desc">
                                <span>Transmission</span>
                                <p>Automatic</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-car-button">
                        <a href="/car">VIEW DETAILS <i>→</i></a>
                    </div>
                </div>

            </section>

        </div>
    </section>


@endsection
