<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar"><!--style="background: rgb(2,0,36);
background: radial-gradient(circle, rgba(2,0,36,1) 33%, rgba(9,9,121,1) 100%, rgba(0,212,255,1) 100%);"-->
        <a class="sidebar-brand">
            <a class="sidebar-link" href="http://127.0.0.1/DashboardProject/Dashboard/dashboard">
                <h1><span class="align-middle text-white txt-b">SangNgaan</span></h1>
            </a>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="http://127.0.0.1/DashboardProject/Dashboard/dashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link">
                    <p data-toggle="modal" data-target="#exampleModalCenter" id="mdlLogin"><i class="bi bi-clipboard-plus"></i> <span class="align-middle">Management</span></p>
                </a>

            </li>
        </ul>

    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <form action="" id="formLogin">
                    <div class="txtPo">
                        <b> Username :</b><input type="text" class="form-control" name="username" placeholder="Username" onfocus="this.value=''"><span id='err_in1' class="text-danger"></span>
                    </div><br>
                    <div class="txtPo">
                        <b>Password :</b><input type="password" class="form-control" name="password" placeholder="Password" onfocus="this.value=''"><span id='err_in2' class="text-danger"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="btnLogin" type="button" class="btn btn-success btnW">Login</button>
            </div>
        </div>
    </div>
</div>