<?php

?>

<html>
<head>
    <style>
        html, body{height: 100%}body{background-color: #4052e4;display: grid;place-items: center}
        .card{padding: 0px 15px;border-radius: 20px}.c1{background-color: #fff2f1;border-radius: 20px}
        a{margin: 0px;font-size: 13px;border-radius: 7px;text-decoration: none;color: black}
        a:hover{color: #e0726c;background-color: #fff2f1}
        .nav-link{padding: 1rem 1.4rem;margin: 0rem 0.7rem}
        .ac{font-weight: bold;color: #e0726c;font-size: 12px}
        input, button{width: 96%;background-color: #fff2f1;border-radius: 8px;padding: 8px 17px;font-size:13px;border: 1px solid #f5f0ef;color: #dccece}
        input:{text-decoration: none}
        .bt{background-color: #ff4133;border: 1px solid rgb(300, 200, 200)}
        form{margin-top: 70px}form >*{margin: 10px 0px}#forgot{margin: 0px -60px}
        #register{text-align: center}img{background-color: antiquewhite}
        .wlcm{font-size: 30px}.sp1{font-size: 5px}.sp1 >span{background-color: #f0c3be}
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-10">
            <div class="card d-flex mx-auto my-5">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 c1 p-5">
                        <div class="row mb-5 m-3"> <img src="https://i.imgur.com/pFfTOwy.jpg" width="70vw" height="55vh" alt=""> </div> <img src="https://i.imgur.com/kdE7GKw.jpg" width="120vw" height="210vh" class="mx-auto d-flex" alt="Teacher">
                        <div class="row justify-content-center">
                            <div class="w-75 mx-md-5 mx-1 mx-sm-2 mb-5 mt-4 px-sm-5 px-md-2 px-xl-1 px-2">
                                <h1 class="wlcm">Welcome to your blackboard</h1> <span class="sp1"> <span class="px-3 bg-danger rounded-pill"></span> <span class="ml-2 px-1 rounded-circle"></span> <span class="ml-2 px-1 rounded-circle"></span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 c2 px-5 pt-5">
                        <div class="row">
                            <nav class="nav font-weight-500 mb-1 mb-sm-2 mb-lg-5 px-sm-2 px-lg-5"> <a class="nav-link" href="#">Careers</a> <a class="nav-link ac" href="#">Students</a> <a class="nav-link" href="#">Admission</a> </nav>
                        </div>
                        <form onsubmit="event.preventDefault()" name="myform" onsubmit="" class="px-5 pb-5">
                            <div class="d-flex"> <img src="https://i.imgur.com/oGcceAH.jpg" height="22px" width="22px" alt="" class="mr-3 mt-2">
                                <h3 class="font-weight-bold">Log in</h3>
                            </div> <input type="text" name="userid" placeholder="User"> <input type="password" name="passw" placeholder="Password"> <span class="ac" id="forgot">Forgot?</span> <button class="text-white text-weight-bold bt">Continue</button>
                            <h5 class="ac" id="register">Register</h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php

?>