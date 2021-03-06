<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Material Design Login Form</title>
  
{!! Html::style('css/style.css'); !!}
{!! Html::script('js/index.js'); !!}
  
</head>

<body>
  <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="import" href="https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html">

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="Untitled.png" alt="Avatar" /> 
    </button>
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" id="fieldUser" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="fieldPassword" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
           <div class="button raised blue">
            <div class="center" fit>LOGIN</div>
            <paper-ripple fit></paper-ripple>
            </div>
        </div>
      </div>
     </div>
  </div>
</div>

    <script src="js/index.js"></script>

</body>
</html>
