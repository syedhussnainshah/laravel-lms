<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#Sidebar" aria-controls="Sidebar">
            <i class="fas fa-bars"></i> 
        </button>

        <!-- Right elements -->
        <div class="d-flex align-items-center ms-auto">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>

            <!-- Calculator Icon -->
            <a href="#" class="text-reset me-3" data-bs-toggle="modal" data-bs-target="#calculator">
            <i class="fas fa-calculator"></i>
            </a>

            <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="NotificationsLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false" >
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="NotificationsLink" >
                <li>
                    <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                </li>
            </ul>
    
            <!-- Avatar -->
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="ProfileLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false" >
                <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="Profile Image" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ProfileLink" >
                <li>
                    <a class="dropdown-item" href="#">My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Logout</a>
                </li>
            </ul>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>

<!-- Calculator Model COde Start -->
<div class="modal fade" id="calculator" tabindex="-1" aria-labelledby="calculatorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calculatorLabel">Calculator</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="calculator">

                    <div class="row">

                        <div class="col-12">
                            <input type="text" class="form-control input-value" id="input_value">
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="clr()" value="AC">AC</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('(')" value="(">(</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num(')')" value=")">)</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('+')" value="+">+</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('1')" value="1">1</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('2')" value="2">2</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('3')" value="3">3</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('-')" value="-">-</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('4')" value="4">4</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('5')" value="5">5</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('6')" value="6">6</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('*')" value="*">*</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('7')" value="7">7</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('8')" value="8">8</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('9')" value="9">9</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('/')" value="/">/</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('0')" value="0">0</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('.')" value=".">.</button>
                        </div>

                        <div class="col-6">
                            <button class="calc-btn result-btn" onClick="solve()" value="b">=</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Claclator Model Code End -->