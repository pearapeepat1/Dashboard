<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar"><!--style="background: rgb(2,0,36);
background: radial-gradient(circle, rgba(2,0,36,1) 33%, rgba(9,9,121,1) 100%, rgba(0,212,255,1) 100%);"-->
        <a class="sidebar-brand">
            <a class="sidebar-link" href="http://127.0.0.1/DashboardProject/Dashboard/dashboard">
                <h1><span class="align-middle text-white txt-b ">SangNgaan</span></h1>
            </a>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="http://127.0.0.1/DashboardProject/Dashboard/dashboard">
                    <img src="https://cdn-icons-png.flaticon.com/512/5234/5234682.png" alt="" srcset="" width="20%"> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link">
                    <p data-toggle="modal" data-target="#exampleModalCenter" id="mdlLogin"><img src="https://cdn-icons-png.flaticon.com/512/2833/2833704.png" width="18%" alt="" srcset=""> <span class="align-middle">Management</span></p>
                </a>

            </li>
        </ul>

    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content border-start border-5 border-5 border-success">
            <div class="modal-body ">
            <button type="button" class="close txt-b" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container">
                <h3 class="modal-title txt-b text-success txt-shadow-head" id="exampleModalLongTitle" style="font-family: b Biger Over;"><center>L o g i n </center></h3>
                    <form action="" id="formLogin">
                        <div class="row py-3">
                            <div class="col-lg-1 ">
                            <center><img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" width="280%" ></center>
                            </div>
                            <div class="col-lg-1 "></div>
                            <div class="col-lg-9">
                            <input type="text" class="form-control padding-box" name="username" placeholder="Username" onfocus="this.value=''"><span id='err_in1' class="text-danger"></span>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-1">
                            <center><img src="https://cdn-icons-png.flaticon.com/512/7477/7477884.png" width="280%" ></center>
                            </div>
                            <div class="col-lg-1 "></div>
                            <div class="col-lg-9">
                            <input type="password" class="form-control padding-box" name="password" placeholder="Password" onfocus="this.value=''"><span id='err_in2' class="text-danger"></span>
                            </div>
                        </div>
                    </form><br>
                    <center>
                    <button id="btnLogin" type="button" class="btn btn-success" width="80%">Login</button></center>
                </div>

            </div>
        </div>
    </div>
</div>