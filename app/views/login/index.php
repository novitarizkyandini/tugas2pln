<style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 70vh; 
        text-align: center;
        background-color: #6495ED; 
        color: #444; /* Warna teks abu-abu gelap */
        padding: 5px; /* Padding untuk konten */
    }

    /* CSS untuk gambar */
    .brand {
        width: 200px;
        height: 150px;
    }

    /* CSS untuk pesan error */
    .error {
        color: red;
        margin-top: 10px;
    }

    /* CSS untuk input dan tombol */
    input[type="email"],
    input[type="password"],
    input[type="submit"] {
        padding: 8px;
        margin: 5px 0;
        width: 100%;
        border: none;
        border-radius: 5px;
    }
</style>

<div class="container">
     <h2>Login Sistem</h2>

<form action="<?php echo URL; ?>/login/proses" method="post">
<img src="<?php echo AST; ?>/img/logo-pln.png" class="brand">
     <table>
          <tr>
               <td>Username</td>
               <td><input type="email" name="email" placeholder="Email" required></td>
          </tr>
          <tr>
               <td>Password</td>
               <td><input type="password" name="password" placeholder="Password" required></td>
          </tr>
          <tr>
               <td></td>
               <td><input type="submit" name="submit" value="Login"></td>
          </tr>
     </table>
</form>

<?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
     <div class="error">
          Login tidak di temukan
     </div>
<?php } ?> 