<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>用户登录</title>
        <link rel="shortcut icon" href="img/100du.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            /*web background*/
            .container{
                display:table;
                height:100%;
            }

            .row{
                display: table-cell;
                vertical-align: middle;
            }
            /* centered columns styles */
            .row-centered {
                text-align:center;
            }
            .col-centered {
                display:inline-block;
                float:none;
                text-align:left;
                margin-right:-4px;
            }
            @media (min-width: 768px)
            {
                .well{
                    height:300px;
                    width:350px;
                }

            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row row-centered">
                <div class="well col-md-6 col-centered">
                    <h2>欢迎登录</h2>
                    <form action="check_1.php" method="post">
                        <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="请输入登录名"/>
                        </div>
                        <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" name="pwd" placeholder="请输入密码"/>
                        </div>
                        <br/>
                        <p>
                            <button type="submit" class="btn btn-success btn-block">登 录</button>
                           <button type="reset" class="btn btn-info btn-block">取 消</button>
                         </p>
                         <p style="float:right;"><a href="register.html">新用户注册</a></p>
                    </form>
                </div>
            </div>
        </div>


        <script src="js/jquery.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
    </body>
</html>