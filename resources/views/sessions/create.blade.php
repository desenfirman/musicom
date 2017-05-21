<head>
  @include('layouts.core-framework')

  <style>
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #eee;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }
    .form-signin .checkbox {
      font-weight: normal;
    }
    .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

<body>


		<!-- Main -->
			<section id="main" class="wrapper" >
				<div class="container">
						<h2 style="text-align: center;">Login Page</h2>
						<form action="/login" method="POST" style="margin-left:35%;
						margin-right:35%;max-width: 100%;">
            {{csrf_field()}}
              <input id="email" size="50" type="email" name="email" placeholder="email">
							<br>
							<input id="password" type="password" name="password" placeholder="password">
							<br>
							<div style="text-align: right;">
								<input type="submit" value="Login" \>
							<div>
							<br>
							<p style="text-align:center;">Don't have an account? <a href="/register">Sign Up</a></p>
						</form>
					</div>
				</div>
			</section>


	</body>
</html>
