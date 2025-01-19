@extends('layouts.app')
@section('title', 'Add a new Car')
@section('content')

<main class="flex-center">
        <section class="structure">
            <section class="container-form_sides">
                <div class="image_container">
                    <!-- Main Image Section -->
                    <div class="main-image-section">
                      <h3>Main Image</h3>
                      <div class="upload-box">
                        <img src="{{ asset('img/administration/upload.png') }}" alt="Upload Icon" class="upload-icon">
                        <button class="browse-button">Browse the Image</button>
                      </div>
                    </div>
                
                    <!-- Additional Images Section -->
                    <div class="additional-images-section">
                      <h3>Additional Images</h3>
                      <div class="thumbnails">
                        <div class="thumbnail"><img src="{{ asset('img/administration/placeholder.png') }}" alt="Image Placeholder"></div>
                        <div class="thumbnail"><img src="{{ asset('img/administration/placeholder.png') }}" alt="Image Placeholder"></div>
                        <div class="thumbnail"><img src="{{ asset('img/administration/placeholder.png') }}" alt="Image Placeholder"></div>
                      </div>
                      <button class="browse-button">Browse the Image</button>
                    </div>
                </div>
                <div class="form-container">
                    <form class="car-form">
                      <!-- Left Section -->
                      <section class="left-side">
                        <div class="form-group">
                          <label for="make">Make:</label>
                          <input type="text" id="make" placeholder="Select the make of the car">
                        </div>
                        <div class="form-group">
                          <label for="model">Model:</label>
                          <input type="text" id="model" placeholder="Select the model of the car">
                        </div>
                        <div class="form-group">
                          <label for="year">Year:</label>
                          <input type="number" id="year" placeholder="Select the year of the car">
                        </div>
                        <div class="form-group">
                          <label for="type">Type:</label>
                          <select id="type">
                            <option>SUV</option>
                            <option>SEDAN</option>
                            <option>Coupe</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="transmission">Transmission:</label>
                          <select id="transmission">
                            <option>Automatic</option>
                            <option>Manual</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="fuel-type">Fuel Type:</label>
                          <select id="fuel-type">
                            <option>Diesel</option>
                            <option>Petrol</option>
                            <option>Hybrid</option>
                            <option>Electric</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="mileage">Mileage:</label>
                          <input type="number" id="mileage" placeholder="Integer only, ex: (150000)">
                        </div>
                        <div class="form-group">
                          <label for="fuel-efficiency">Fuel Efficiency (Per 100 km):</label>
                          <input type="number" id="fuel-efficiency" placeholder="Integer only, ex: (9.5)">
                        </div>
                        <div class="form-group">
                          <label for="engine-size">Engine Size:</label>
                          <input type="number" id="engine-size" placeholder="Integer only, ex: (2.5)">
                        </div>
                      </section>
                
                      <!-- Right Section -->
                      <section class="right-side">
                        <div class="form-group">
                          <label for="horsepower">Horsepower:</label>
                          <input type="number" id="horsepower" placeholder="Integer only, ex: (150)">
                        </div>
                        <div class="form-group">
                          <label for="price">Price:</label>
                          <input type="number" id="price" placeholder="Integer only, ex: (12000)">
                        </div>
                        <div class="form-group">
                          <label for="vin">VIN:</label>
                          <input type="text" id="vin" placeholder="ex: 1VXBR12EXCP901213">
                        </div>
                        <div class="form-group">
                          <label for="availability-status">Availability Status:</label>
                          <select id="availability-status">
                            <option>Sold</option>
                            <option>Available</option>
                            <option>Coming</option>
                            <option>Reserved</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="seat-capacity">Seat Capacity:</label>
                          <input type="number" id="seat-capacity" placeholder="Integer only, ex: (5)">
                        </div>
                        <div class="form-group">
                          <label for="drive-type">Drive Type:</label>
                          <select id="drive-type">
                            <option>FWD</option>
                            <option>RWD</option>
                            <option>AWD</option>
                            <option>4WD</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="condition">Condition:</label>
                          <select id="condition">
                            <option>New</option>
                            <option>Used</option>
                            <option>Certified</option>
                          </select>
                        </div>
                        <button type="submit" class="submit-button">Create The Car</button>
                      </section>
                    </form>
                </div>
            </section>
        </section>
    </main>

@endsection