<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Website Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/style.css'); ?>">
</head>

<body class="login-page">
    <?= $this->renderSection('content') ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
        const type =
            password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        this.innerHTML =
            type === "password"
            ? '<i class="bi bi-eye"></i>'
            : '<i class="bi bi-eye-slash"></i>';
        });
    </script>
</body>
</html>
