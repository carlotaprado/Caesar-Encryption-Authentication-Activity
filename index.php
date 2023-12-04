<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Ubuntu+Mono&display=swap');
  body {
  font-family: 'Open Sans', sans-serif;
  /* font-family: 'Ubuntu Mono', monospace; */
    font-size: 16px;
    background-color: #f5f5f5;
    color: #333;
  }

  .login-container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  input[type="text"],
  input[type="password"] {
    width: 92%;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #f0f0f0;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  button {
    width: 100%;
    padding: 10px;
    background-color: #ff2054;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 4px;
  }

  .error {
    color: red;
    margin-top: 10px;
  }
  </style>
</head>
<body class="dark-mode">
    <div class="login-container">
        <h2 class="title">Admin Page</h2>
        <form action="login.php" method="POST">
            <input type="text" class="input" name="username" placeholder="Username" required><br>
            <input type="password" class="input" name="password" placeholder="Password" required><br>
            <button type="submit" class="button">Login</button>
        </form>
        <?php if(isset($_GET['error'])): ?>
            <p class="error">Access Denied</p>
        <?php endif; ?>
    </div>
</body>
</html>
