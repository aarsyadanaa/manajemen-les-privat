<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
  <link rel="shortcut icon" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href="img/logob.png" />
    <title> Cuttie | Registration</title>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: white;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #16a085;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #16a085;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #16a085;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #12826b;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #16a085;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

    </style>
   </head>
<body>
  <div class="wrapper">
  <img src="img/logob.png" alt="" width="135" height="50">
    <h2>Registration </h2>
    <form action="/register" method="POST">
                    @csrf
      <div class="input-box">
      <input type="text" class="form-control rounded-top" name="name" id="name" required
                            value="{{ old('name') }}" placeholder="Name">
      </div>
      <div class="input-box">
      <input type="email" class="form-control " name="email" id="email" required
                            value="{{ old('email') }}" placeholder="name@example.com">
      </div>
      <div class="input-box">
      <input type="password" class="form-control rounded-bottom" name="password" id="password" required
      value="{{ old('password') }}" placeholder="Password">
      <input type="hidden" class="form-control rounded-bottom" name="role_id" id="role_id" 
      value="3" >
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="/">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
                