@include ('inc.header')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Donate Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donate Now</div>
                    <h1 class="display-6 mb-5">Thanks For The Results Achieved With You</h1>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat
                        amet</p>
                </div>


                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-secondary p-5">
                        <form action="{{ route('initiatePush') }}" method="post">

                            <!-- Set the form action to your endpoint -->
                            @csrf <!-- Add a CSRF token for security -->
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="btn-group d-flex justify-content-around">
                                        <label class="btn btn-light py-3" for="mpesa">Mpesa</label>
                                    </div>
                                </div>
                                <div class="col-12 pb-3" id="mpesaFields">
                                    <!-- Fields specific to Mpesa payment method -->
                                    <div class="form-floating">
                                        <input type="tel" class="form-control bg-light border-0" name="mpesaNumber"
                                            id="mpesaNumber" placeholder="Mpesa Number" required>
                                        <label for="mpesaNumber">Mpesa Number</label>
                                    </div>
                                </div>

                                <div class="col-12 pb-3" id="mpesaFields">
                                    <!-- Fields specific to Mpesa payment method -->
                                    <div class="form-floating">
                                        <input type="number" class="form-control bg-light border-0" name="Amount"
                                            id="Amount" placeholder=" Amount " required>
                                        <label for="Amount "> Amount </label>
                                    </div>
                                </div>

                                <div class="col-12 pb-3" id="amountSection">
                                    <div class="btn-group d-flex justify-content-around">
                                        <input type="radio" class="btn-check" name="amount" id="amount1"
                                            value="5" >
                                        <label class="btn btn-light py-3" for="amount1">Ksh 5</label>

                                        <input type="radio" class="btn-check" name="amount" id="amount2"
                                            value="10">
                                        <label class="btn btn-light py-3" for="amount2">Ksh 10</label>

                                        <input type="radio" class="btn-check" name="amount" id="amount3"
                                            value="15">
                                        <label class="btn btn-light py-3" for="amount3">Ksh 15</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5" style="height: 60px;">
                                        Donate Now
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- Donate End -->

    @include ('inc.footer')
