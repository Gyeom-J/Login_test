<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET['id'];
    $password = $_GET['password'];

    $validUsername = 'test';
    $validPassword = '1234';

    if (isset($username) && isset($password)) {
        if ($username === $validUsername && $password === $validPassword) {
          $message = "로그인 성공";
          $isSuccess = true;
        } else {
            $message = "로그인 실패";
            $isSuccess = false;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
        <?php if ($isSuccess) : ?>
            <script>
                alert("로그인 성공");
            </script>
        <?php endif; ?>
        <?php if (!$isSuccess) : ?>
            <script>
                alert("로그인 실패");
            </script>
        <?php endif; ?>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <label for="username">id:</label>
        <input type="text" name="id" required><br>
        
        <label for="password">password:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
