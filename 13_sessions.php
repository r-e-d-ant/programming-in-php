<?php
    /* ---------- Sessions ------------ */

    /*
        Sessions are a way to store information (in variables) to
        be used across multiple pages.
        Unlike cookies, sessions are stored on the server.
    */

    session_start();

    if(isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS); // change to INPUT_GET if it's GET method
        $password = $_POST['password'];

        if($username == 'john' && $password == 'password') {
            $_SESSION['username'] = $username;
            header('Location: /programming-in-php/extras/dashboard.php');
        } else {
            echo 'Incorrect Login';
        }
    }
    ?>

    <!-- $_GET is used for URLs and Forms but POST is for only Forms -->
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
        method="POST">
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username">
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password" id="passwordInput">
                <span id="seePass" style="border: 2px solid gray;cursor:pointer;">see pass.</span>
            </div>

            <input type="submit" value="Submit" name="submit">
        </form>

        <script>
            const passInput = document.getElementById('passwordInput');
            const seePassBtn = document.getElementById('seePass');

            seePassBtn.addEventListener('click', () => {
                passInput.type == 'password' ? passInput.type = 'text' : passInput.type = 'password';
            })
        </script>
    </body>