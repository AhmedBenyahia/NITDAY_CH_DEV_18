<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="CSS/test.css"
<div class="container">
    <div class="col-md-6">
        <div id="logbox">
            <form id="signup" method="post" action="/signup">
                <h1>create an account</h1>
                <input name="user[name]" type="text" placeholder="What's your username?" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
                <input name="user[password]" type="password" placeholder="Choose a password" required="required" class="input pass"/>
                <input name="user[password2]" type="password" placeholder="Confirm password" required="required" class="input pass"/>
                <input name="user[email]" type="email" placeholder="Email address" class="input pass"/>
                <input type="submit" value="Sign me up!" class="inputButton"/>
                <div class="text-center">
                    already have an account? <a href="#" id="login_id">login</a>
                </div>
            </form>
        </div>
    </div>
    <!--col-md-6-->

    <div class="col-md-6">
        <div id="logbox">
            <form id="signup" method="post" action="/signup">
                <h1>account login</h1>
                <input name="user[email]" type="email" placeholder="enter your email" class="input pass"/>
                <input name="user[password]" type="password" placeholder="enter your password" required="required" class="input pass"/>
                <input type="submit" value="Sign me in!" class="inputButton"/>
                <div class="text-center"">
                <a href="#" id="">create an account</a> - <a href="#" id="">forgot password</a>
        </div>
        </form>
    </div>
</div>
</div>