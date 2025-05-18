
<!-- Main Content -->
    <main>
        <!-- Changeable Hero Video -->
        <section id="roamVideoMontageSection">
            <img src="assets/img/SampleRoamVidMontage.jpg" alt="Roam - Join Us" class="img-fluid border"/>
        </section>
        
        <!-- Restautant Cards -->
        <section class="relative mt-3">
          <div class="p-0">
            <div class="row mx-2">
              <!-- Restaurant1 Card-->
              <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card card_hover" id="restoCard1" style="cursor: pointer;">
                  <div class="position-relative">
                    <div id="carCarousel" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img id="filterImg" src="https://plus.unsplash.com/premium_photo-1661883237884-263e8de8869b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bHV4dXJ5JTIwcmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img id="filterImg" src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bHV4dXJ5JTIwcmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img id="filterImg" src="https://media.istockphoto.com/id/525441235/photo/couple-eating-dessert-in-fancy-restaurant.webp?a=1&b=1&s=612x612&w=0&k=20&c=fYECv6BKIFRK5tkVRgK8e2Raqjy4s6UeqCU2BGsnO3k=" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                      <!--<i class="bi bi-heart-fill favorite"></i>-->
                  </div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Resto-Rant #1
                      <div>
                        <span class="float-end text-muted pe-3" id="bookmarkToggler" > <!-- Added ~ id="bookmarkToggler" ~ -->
                          <i class="bi bi-bookmark color1fb69c color-toggle fs-3"></i> <!-- Added ~ class="color-toggle" ~ -->
                        </span>
                      </div>

                      <!-- #MUST MOVE TO OTHER FILE# Added This for now, but will move for Latur -->
                      <style>
                          .color-toggle {
                              color: #1fb69c; /* Initial color */
                              cursor: pointer;
                          }

                          .color-toggled {
                              color: #1fb69c; /* Color when toggled (you can choose your preferred color) */
                          }
                      </style>

                      <script>
                        
                        const bookmarkToggler = document.getElementById('bookmarkToggler');
                        const bookmarkIcon = bookmarkToggler.querySelector('i');
                        let isBookmarked = false; // Start as not bookmarked (filled)

                        bookmarkToggler.addEventListener('click', () => {
                            isBookmarked = !isBookmarked;
                            if (isBookmarked) {
                                bookmarkIcon.classList.remove('bi-bookmark');
                                bookmarkIcon.classList.add('bi-bookmark-fill');
                                bookmarkIcon.classList.remove('color-toggled');
                                alert('Added to My Dreams!');
                            } else {
                                bookmarkIcon.classList.remove('bi-bookmark-fill', 'color-toggle');
                                bookmarkIcon.classList.add('bi-bookmark');
                                bookmarkIcon.classList.add('color-toggled');
                                alert('Removed from My Dreams!');
                            }
                        });
                        

                        function myFunction() {
                          alert("I am an alert box!");
                        }

                        const card = document.getElementById('restoCard1');
                        const bookmark = document.getElementById('bookmarkToggler');

                        card.addEventListener('click', function (e) {
                          if (e.target.closest('#bookmarkToggler')) return;
                          const modal = new bootstrap.Modal(document.getElementById('restoModal1'));
                          modal.show();
                        });

                        bookmark.addEventListener('click', function (e) {
                          e.stopPropagation();
                          e.preventDefault();
                          console.log('Bookmark clicked!');
                          this.classList.toggle('active');
                        });

                      </script>
                    

                    </h5>
                    
                    <div class="my-2 ms-1">
                        <h6 class="mb-1 text-muted color1fb69c"><i class="bi bi-geo-alt color1fb69c"></i> <span class="color1fb69c">The Spirit Realm</span></h6>
                        <p class="mb-0 fst-italic ms-3 text-muted" style="font-size: 14px">69 kilometers away</p>
                    </div>
                    
                    <div class="my-2 ms-1">
                        <h6 class="mb-1 color364941"><i class="bi bi-clock-history"></i> <span >Monday - Saturday</span></h6>
                        <p class="mb-0 fst-italic ms-3 text-muted" style="font-size: 14px">8AM - 10PM</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Restaurant1 Card-->
              
                <!-- Modal Restaurant1 Card-->
                <div class="modal fade p-0 " id="restoModal1" tabindex="-1" aria-labelledby="restoModalLabel1" aria-hidden="true">
                  <div class="modal-dialog modal-fullscreen m-0">
                    <div class="modal-content" style="height: auto; max-height: none;">
                      <div class="modal-header sticky-top" style="background: #25b99a !important;">
                        <img class="modal-title" id="restoModalLabel" src="assets/img/Roam-logoInverted.png" style="height: 34.5px;"/>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                        <!-- Restaurant Images-->
                        <div class="border" style="width: 95% !important; margin: 0 auto">
                          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner" style="border-radius: 6px;">
                              <div class="carousel-item active">
                                <img src="https://plus.unsplash.com/premium_photo-1661883237884-263e8de8869b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bHV4dXJ5JTIwcmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="..." style="height: 350px !important;">
                              </div>
                              <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bHV4dXJ5JTIwcmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="..." style="height: 350px !important;">
                              </div>
                              <div class="carousel-item">
                                <img src="https://media.istockphoto.com/id/525441235/photo/couple-eating-dessert-in-fancy-restaurant.webp?a=1&b=1&s=612x612&w=0&k=20&c=fYECv6BKIFRK5tkVRgK8e2Raqjy4s6UeqCU2BGsnO3k=" class="d-block w-100" alt="..." style="height: 350px !important;">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                        </div>

                        <!-- Restaurant Title -->
                        <h1 class="ms-4 mb-4 mt-3 fw-bold">Resto-Rant #1</h1>
                        
                        <!-- Restaurant Description/Info -->
                        <div class="row ms-4">
                          <div class="col-12 col-sm-6 col-lg-3 w-auto d-flex me-4">
                            <img src="assets/img/clock-open.png" alt="clock-open" class="restoInfoIcon"/>
                            <p>Opens at 6:00 A.M.</p>
                          </div>
                          <div class="col-12 col-sm-6 col-lg-3 w-auto d-flex me-4">
                            <img src="assets/img/clock-close.png" alt="clock-close" class="restoInfoIcon"/>
                            <p>Closes at 10:00 P.M.</p>
                          </div>
                          <div class="col-12 col-sm-6 col-lg-3 w-auto d-flex me-4">
                            <img src="assets/img/location.png" alt="location" class="restoInfoIcon"/>
                            <p>The Spirit Realm <span>(69 kilometers away)</span></p>
                          </div>
                          <div class="col-12 col-sm-6 col-lg-3 w-auto d-flex me-4">
                            <img src="assets/img/money.png" alt="money" class="restoInfoIcon"/>
                            <p>Price ranges from $9M and above</p>
                          </div>  
                        </div>

                        <!-- Restaurant Tags 2 -->
                        <div id="restorantTags" class="d-flex mx-4 mt-2 mb-4">
                          <h6 class="py-2 px-3 me-3 mb-0 text-light" style="background-color: #128f8b; border-radius: 6px;">Breakfast</h6>
                          <h6 class="py-2 px-3 me-3 mb-0 text-light" style="background-color: #128f8b; border-radius: 6px;">Lunch</h6>
                          <h6 class="py-2 px-3 me-3 mb-0 text-light" style="background-color: #128f8b; border-radius: 6px;">Dinner</h6>
                        </div>

                        <!-- Restaurant Reservation -->
                        <div class="mt-3 py-4 " style="width: 95% !important; background-color: #f5f6f5; border-radius: 2px; margin: 0 auto">
                          <div class="w-100 my-3">
                            
                            <!-- Reservation Title to Info Groups -->
                            <div class="px-5"> 
                              <!-- Reservation Title -->
                              <div class="d-flex mb-4">
                                <div class="me-3" style="width: 10px; height: 60px; background-color: #25b99a;"></div>
                                <h2 class="fw-bold mt-2">Reserve a Table</h2>
                              </div>
                              
                              <!-- Reservation Info Form -->
                              <div class="d-flex mt-4 mb-2 row">
                                <!-- Date of Reservation -->
                                <div class="col-12 col-md-6 mb-3">
                                  <label for="date" class="fw-semibold">Date of Reservation:</label>
                                    
                                    <div class="date-wrapper">
                                      <div class="input-group">
                                        <input type="text" id="dateInput" class="date-input form-control inputStyle" readonly placeholder="Select date" value="">
                     
                                        <span class="date-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                            <path d="M8 7a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1A.5.5 0 0 1 8 7z"/>
                                          </svg>
                                        </span>


                                          <!-- Custom Calendar Dropdown -->
                                          <div class="calendar-dropdown" id="calendarDropdown">
                                              <div class="calendar-header">
                                                  <button class="nav-btn" id="prevMonth">&lt;</button>
                                                  <span class="month-year" id="monthYearDisplay">September 2025</span>
                                                  <button class="nav-btn" id="nextMonth">&gt;</button>
                                              </div>
                                              <div class="calendar-body">
                                                  <div class="weekdays">
                                                      <div>Sun</div>
                                                      <div>Mon</div>
                                                      <div>Tue</div>
                                                      <div>Wed</div>
                                                      <div>Thu</div>
                                                      <div>Fri</div>
                                                      <div>Sat</div>
                                                  </div>
                                                  <div class="days" id="calendarDays">
                                                      <!-- Days will be generated by JavaScript -->
                                                  </div>
                                              </div>
                                              <div class="calendar-footer">
                                                  <button class="btn-remove" id="removeDate">Clear</button>
                                                  <button class="btn-set-date" id="setDate">Today</button>
                                              </div>
                                          </div>
                                      </div>
                                    </div>

                                </div>
                                
                                <!-- Time of Reservation -->
                                <div class="col-12 col-md-6 mb-3">
                                  <label for="time" class="fw-semibold">Time of Reservation:</label>
                          
                                  <!-- Hidden actual time input -->
                                  <input type="time" class="form-control" id="time" aria-label="time"/>
                          
                                  <!-- Custom time picker -->
                                  <div class="time-picker-container">
                                      <div class="custom-time" id="timeToggle">
                                          <div>
                                              <i class="time-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                                  </svg>
                                              </i>
                                              <span id="selectedTime">9:30 A.M.</span>
                                          </div>
                                          <i>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                              </svg>
                                          </i>
                                      </div>
                                      
                                      <div class="time-dropdown" id="timeDropdown" style="display: none;">
                                          <!-- AM/PM Toggle -->
                                          <div class="am-pm-toggle">
                                              <button class="am-pm-btn active" data-value="AM">AM</button>
                                              <button class="am-pm-btn" data-value="PM">PM</button>
                                          </div>
                                          
                                          <!-- Time labels -->
                                          <div class="time-label">
                                              <span>Hours</span>
                                              <span>Minutes</span>
                                          </div>
                                          
                                          <!-- Time selection roulette -->
                                          <div class="time-roulette">
                                              <!-- Selection highlight -->
                                              <div class="selection-highlight"></div>
                                              
                                              <!-- Hours column -->
                                              <div class="time-column" id="hoursColumn">
                                                  <!-- Hours will be added by JavaScript -->
                                              </div>
                                              
                                              <!-- Minutes column -->
                                              <div class="time-column" id="minutesColumn">
                                                  <!-- Minutes will be added by JavaScript -->
                                              </div>
                                          </div>
                                          
                                          <!-- Set time button -->
                                          <button class="set-time-btn">Set Time</button>
                                      </div>
                                  </div>
                                </div>

                                <!-- Number of Persons -->
                                <div class="col-12 col-md-6 mb-3">
                                  <label for="persons" class="fw-semibold">No. of Persons:</label>
                                  <!--<select id="persons" class="form-select inputStyle">
                                    <option selected>Number of Guests</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                  </select>-->
                                  <!--<input type="number" class="form-control inputStyle" id="person" placeholder="Number of Guests" aria-label="person"/>-->
                                  <input type="tel" class="form-control" id="person" placeholder="Number of Guests" aria-label="person" style="height: 51px;"/>
                                    <div style="width: 69% !important; position: absolute; z-index: 100;">  
                                      <div class="roulette-container" id="roulette">
                                        <div class="roulette-header">Guests to Cater</div>
                                        <div class="roulette-track" id="rouletteTrack"></div>
                                        <div class="selection-indicator"></div>
                                        <div class="roulette-footer">
                                          <button class="ok-btn" id="okBtn">OK</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <!-- Reservator's Name -->
                                <div class="col-12 col-md-6 mb-3">
                                  <label for="name" class="fw-semibold">Name of Guest Representative:</label>
                                  <input type="text" class="form-control inputStyle" id="name" placeholder="Name" aria-label="Name"/>
                                </div>
                                
                              </div>

                              <!-- Convenience Fee -->
                              <div class="mb-3 mt-1 col-12">
                                <label for="fee" class="form-label fw-semibold">Reservation Fee (Credited to your final bill)
                                  <span>
                                    <button popovertarget="myheaderPopover" style="border: none; background: none; padding: 0;">
                                      <i class="bi bi-question-circle-fill" style="color: #25b999; cursor: pointer;"></i>
                                    </button>                                
                                  </span>
                                </label>

                                <!-- Popover for Convenience Fee Info -->
                                <div id="myheaderPopover" popover>
                                  <h3>Reservation Fee</h3>
                                  <p>
                                    To guarantee your reservation, a Reservation fee of 
                                    <span class="highlight">₱500 per transaction</span> will be applied 
                                    to ensure your table is waiting for you.
                                  </p>
                                  <p>
                                    Don't worry, this fee isn't an extra cost! It will be fully credited 
                                    to your final bill when you dine at the restaurant.
                                  </p>
                                  <div class="divider"></div>
                                  <button class="ok-btn" popovertarget="myheaderPopover" popovertargetaction="hide">OK</button>
                                </div>

                                <input type="text" class="form-control inputStyleALT" id="fee" value="₱500" aria-label="fee" readonly/>
                              </div>

                            </div>

                              
                            

                            <!-- Payment Information -->
                            <div class="my-3 px-0 py-1" style="background-color: #fff;">
                              <div class="m-4">
                                <div class="payment-header">
                                  <div class="brand">
                                    <label class="fw-bold my-4">Payment Information:</label>
                                  </div>
                                </div>
                                
                                <div class="payment-methods">
                                  <!-- ROAM Pay -->
                                  <div class="payment-method-item">
                                    <label for="roam" class="payment-method-label">
                                      <div class="payment-method-info">
                                        <!-- Logo section (15%) -->
                                        <div class="card-logo d-flex justify-content-center align-items-center" style="width: 15% !important;">
                                          <img src="assets/img/Roam-icon.png" alt="Roam Logo" class="card-brand-logo">
                                        </div>
                                        
                                        <!-- Card details section (40%) -->
                                        <div class="card-details d-flex justify-content-center align-items-center" style="width: 45% !important;">
                                          <div class="card-number">Roam Pay <span class="amount">(₱20,500.00)</span></div>
                                          <div class="card-expiry">Exp: NO EXPIRY</div>
                                        </div>
                                        
                                        <!-- Radio input section (45%) -->
                                        <div class="selection-indicator d-flex justify-content-end align-items-center" style="width: 40% !important; padding: 0 30px 0 0;">
                                          <input type="radio" name="payment_method" id="roam" value="ROAM" style="transform: scale(1.5);">
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <!-- Visa Card -->
                                  <div class="payment-method-item">
                                    <label for="visa" class="payment-method-label">
                                      <div class="payment-method-info">
                                        <!-- Logo section (15%) -->
                                        <div class="card-logo d-flex justify-content-center align-items-center" style="width: 15% !important;">
                                          <img src="assets/img/Visa-icon.png" alt="Visa" class="card-brand-logo">
                                        </div>
                                        
                                        <!-- Card details section (40%) -->
                                        <div class="card-details d-flex justify-content-center align-items-center" style="width: 45% !important;">
                                          <div class="card-number">Visa <span class="amount">****4321</span></div>
                                          <div class="card-expiry">Exp: 26/04/27</div>
                                        </div>
                                        
                                        <!-- Radio input section (45%) -->
                                        <div class="selection-indicator d-flex justify-content-end align-items-center" style="width: 40% !important; padding: 0 30px 0 0;">
                                          <input type="radio" name="payment_method" id="visa" value="VISA" style="transform: scale(1.5);">
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  
                                  <!-- MasterCard -->
                                  <div class="payment-method-item">
                                    <label for="masterCard" class="payment-method-label">
                                      <div class="payment-method-info">
                                        <!-- Logo section (15%) -->
                                        <div class="card-logo d-flex justify-content-center align-items-center" style="width: 15% !important;">
                                          <img src="assets/img/Master-Card-icon.png" alt="MasterCard" class="card-brand-logo">
                                        </div>
                                        
                                        <!-- Card details section (40%) -->
                                        <div class="card-details d-flex justify-content-center align-items-center" style="width: 45% !important;">
                                          <div class="card-number">Master Card <span class="amount">****1234</span></div>
                                          <div class="card-expiry">Exp: 12/01/25</div>
                                        </div>
                                        
                                        <!-- Radio input section (45%) -->
                                        <div class="selection-indicator d-flex justify-content-end align-items-center" style="width: 40% !important; padding: 0 30px 0 0;">
                                          <input type="radio" name="payment_method" id="masterCard" value="MASTER CARD" style="transform: scale(1.5);">
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  
                                  <!-- Add Payment Method Button -->
                                  <div class="add-payment-method">
                                    <button class="add-payment-btn">+ Add Payment Method</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <!-- Reservation Button -->
                            <div class="px-5">
                              <button class="btnSuccessNative mt-4 py-3 w-100" onclick="reserveSuccess()" style="background-color: #25b99a; border: none;">Reserve Now</button>
                              <script>
                                function reserveSuccess() {
                                  alert("Reservation Successful at Resto-Rant#1!");
                                }
                              </script>
                            </div>

                          </div>
                        </div>
                        
                        <!-- Restaurant Overview -->
                        <div class="ms-4 mt-4">

                          <!-- Description -->
                          <div>
                            <h3 class="fw-bold">Overview of the Restaurant: </h3>
                            <h5 class="mt-3 fw-6 text-justify ps-2 pe-4" style="text-indent: 20px; width: 100%; text-align: justify; color: #6a6767;">
                              In the heart of the Spirit Realms, Restaurant #1 warmly welcomes you for breakfast, lunch, and dinner. 
                              Begin your day with a tempting morning classics and local delights, transition to a satisfying mid day meals 
                              featuring fresh, flavorful options, and conclude with a delightful dinner selection perfect for any occasion. 
                              From sunrise to sunset, we’re here to serve you.
                            </h5>


                          </div>

                          <!-- Additional Information -->
                          <div class="my-5">
                            <h5 class="mb-3">Additional Information:</h5>

                            <div>
                              <!-- Location -->
                              <div class="d-flex mb-3">
                                <img src="assets/img/location-black.png" style="opacity: 69%; width: 36px; height: 36px;"/>
                                <span class="d-block ms-2">
                                  <h6 class="m-0">Location:</h6>
                                  <p class="m-0">The Spirit Realm, Pluto 83122</p>  
                                </span>
                              </div>

                              <!-- Dining Style -->
                              <div class="d-flex mb-3">
                                <img src="assets/img/tray-black.png" style="opacity: 69%; width: 36px; height: 36px;"/>
                                <span class="d-block ms-2">
                                  <h6 class="m-0">Dining Style:</h6>
                                  <p class="m-0">Casual Dining</p>  
                                </span>
                              </div>

                              <!-- Cuisines -->
                              <div class="d-flex mb-3">
                                <img src="assets/img/spoon-black.png" style="opacity: 69%; width: 36px; height: 36px;"/>
                                <span class="d-block ms-2">
                                  <h6 class="m-0">Cuisines:</h6>
                                  <p class="m-0">Local & International Food</p>  
                                </span>
                              </div>

                              <!-- Additionals -->
                              <div class="d-flex mb-3">
                                <img src="assets/img/label-black.png" style="opacity: 69%; width: 36px; height: 36px;"/>
                                <span class="d-block ms-2">
                                  <h6 class="m-0">Additionals:</h6>
                                  <p class="m-0">Cafe, Gluten-free Options, Wheelchair Access</p>  
                                </span>
                              </div>

                              <!-- Price Range -->
                              <div class="d-flex mb-3">
                                <img src="assets/img/money-black.png" style="opacity: 69%; width: 36px; height: 36px;"/>
                                <span class="d-block ms-2">
                                  <h6 class="m-0">Price Range:</h6>
                                  <p class="m-0">Ranges from $9M and above</p>  
                                </span>
                              </div>

                              <!-- Payment Options -->
                              <div class="d-flex mb-3">
                                <img src="assets/img/payment-black.png" style="opacity: 69%; width: 36px; height: 36px;"/>
                                <span class="d-block ms-2">
                                  <h6 class="m-0">Payment Options:</h6>
                                  <p class="m-0">Mastercard, Visa, Cash</p>  
                                </span>
                              </div>

                              <!-- Dress Code -->
                              <div class="d-flex mb-3">
                                <img src="assets/img/dresscode-black.png" style="opacity: 69%; width: 36px; height: 36px;"/>
                                <span class="d-block ms-2">
                                  <h6 class="m-0">Dress Code:</h6>
                                  <p class="m-0">Casual Dress</p>  
                                </span>
                              </div>

                              <!-- Hours of Operation -->
                              <div class="d-flex mb-3">
                                <img src="assets/img/clockRotate-black.png" style="opacity: 69%; width: 36px; height: 36px;"/>
                                <span class="d-block ms-2">
                                  <h6 class="m-0">Hours of Operation:</h6>
                                  <p class="m-0">Mon-Sat 6:00 A.M - 10:00 P.M.</p>  
                                </span>
                              </div>

                            </div>

                          </div>

                          <!-- Menu -->
                          <div style="width: 95%;" class="mb-5">
                            <h3 class="fw-bold">Menu: </h3>
                            <h5 class="my-3 text-justify ps-2 pe-4 w-100" style="text-indent: 20px; color: #6a6767;">Resto-rant #1's menu was last updated 04-13-2025.</h5>
                            <div class="my-4" style="border: 1.5px solid #cacaca; width: 94.5%; margin: 0px 0 0 40px;"></div>
                            <h5 class="my-3 text-justify ps-2 pe-4 w-100" style="text-indent: 20px; text-align: justify; color: #6a6767;">At present, we do not have menu information for this restaurant. Please see their website or wait to visit the restaurant to learn more.</h5>
                          </div>

                          <!-- Reviews -->
                          <div style="width: 95%;">
                            <h3 class="fw-bold">Reviews: </h3>
                            <h5 class="my-3 ps-2 pe-4 w-100" style="text-indent: 20px; text-align: justify; color: #6a6767;">Resto-rant #1's reviews are from people who’ve dined at this restaurant. Based on recent rating.</h5>
                            <div class="my-4" style="border: 1.5px solid #cacaca; width: 94.5%; margin: 0px 0 0 40px;"></div>
                            <h5 class="my-3 text-justify ps-2 pe-4 w-100" style="text-indent: 20px; text-align: justify; color: #6a6767;">At present, we do not have menu information for this restaurant. Please see their website or wait to visit the restaurant to learn more.</h5>
                            <img class="w-100" src="assets/img/restaurantReviews.jpg"/>
                          </div>

                        </div>
                  
                      </div>
                    </div>
                  </div>
                </div>              
                <!-- /Modal Restaurant1 Card-->
              

              <!-- Restaurant2 Card-->
              <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card card_hover" id="restoCard1" style="cursor: pointer;">
                  <div class="position-relative">
                    <div id="carCarousel" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img id="filterImg" src="https://plus.unsplash.com/premium_photo-1661883237884-263e8de8869b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bHV4dXJ5JTIwcmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img id="filterImg" src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bHV4dXJ5JTIwcmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img id="filterImg" src="https://media.istockphoto.com/id/525441235/photo/couple-eating-dessert-in-fancy-restaurant.webp?a=1&b=1&s=612x612&w=0&k=20&c=fYECv6BKIFRK5tkVRgK8e2Raqjy4s6UeqCU2BGsnO3k=" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                      <!--<i class="bi bi-heart-fill favorite"></i>-->
                  </div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Resto-Rant #2
                      <div>
                        <span class="float-end text-muted" id="bookmarkToggler" style="border: 2px solid; padding: 10px;"> <!-- Added ~ id="bookmarkToggler" ~ -->
                          <i class="bi bi-bookmark-fill color1fb69c color-toggle" onclick="bookmarkTogglerfilled()"></i><!-- Added ~ class="color-toggle" ~ -->
                        </span>
                      </div>

                    </h5>
                    
                    <div class="my-2 ms-1">
                        <h6 class="mb-1 text-muted color1fb69c"><i class="bi bi-geo-alt color1fb69c"></i> <span class="color1fb69c">The Spirit Realm</span></h6>
                        <p class="mb-0 fst-italic ms-3 text-muted" style="font-size: 14px">69 kilometers away</p>
                    </div>
                    
                    <div class="my-2 ms-1">
                        <h6 class="mb-1 color364941"><i class="bi bi-clock-history"></i> <span >Monday - Saturday</span></h6>
                        <p class="mb-0 fst-italic ms-3 text-muted" style="font-size: 14px">8AM - 10PM</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Restaurant2 Card-->


              <!-- Restaurant3 Card-->
              
              <!-- /Restaurant3 Card-->


              <!-- Restaurant4 Card-->
              
              <!-- /Restaurant4 Card-->
            </div>
          </div>                   
        </section>

          <!-- Bottom Navigations for Mobile View-->
          <section class="MobileViewOnly">
            <nav class="mobile-bottom-nav">
              <div class="mobile-bottom-nav__item active hoveringActive">
                <a href="index.html" style="text-decoration: none; color: inherit;"> <!-- redirects to 'index.html' -->
                  <div class="mobile-bottom-nav__item-content">
                    <i class="bi bi-search"></i>
                    <span>Explore</span>
                  </div>
                </a>
              </div>
              <div class="mobile-bottom-nav__item">
                <a href="myDream.html" style="text-decoration: none; color: inherit;"> <!-- redirects to 'myDream.html' -->
                  <div class="mobile-bottom-nav__item-content hoveringActive">
                    <i class="bi bi-bookmark-heart"></i>
                    <span>My Dream</span>
                  </div>
                </a>
              </div>
              <div class="mobile-bottom-nav__item">
                <a href="bookings.html" style="text-decoration: none; color: inherit;"> <!-- redirects to 'bookings.html' -->
                  <div class="mobile-bottom-nav__item-content hoveringActive">
                    <i class="bi bi-journal-bookmark"></i>
                    <span>Bookings</span>
                  </div>
                </a>
              </div>
              <div class="mobile-bottom-nav__item">
                <a href="messages.html" style="text-decoration: none; color: inherit;"> <!-- redirects to 'messages.html' -->
                  <div class="mobile-bottom-nav__item-content hoveringActive">
                    <i class="bi bi-bell"></i>
                    <span>Messages</span>
                  </div>
                </a>
              </div>
              <div class="mobile-bottom-nav__item">
                <a href="account.html" style="text-decoration: none; color: inherit;"> <!-- redirects to 'account.html' -->
                  <div class="mobile-bottom-nav__item-content hoveringActive">
                    <i class="bi bi-person"></i>
                    <span>Account</span>
                  </div>
                </a>
              </div>
            </nav>
          </section>
    </main>