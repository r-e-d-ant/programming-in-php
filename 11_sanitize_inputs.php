<?php
    /* ----- $_GET & $_POST Superglobals ------ */

    /*
    We can pass data through urls and forms using the $_GET
    and $_POST superglobals.
    */
    
    if(isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); // change to INPUT_GET if it's GET method
        // or
        $age = htmlspecialchars($_POST['age']);

        // or
        // $name = filter_var(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); // change to INPUT_GET if it's GET method
        echo $name;
    }
    ?>

    <!-- $_GET is used for URLs and Forms but POST is for only Forms -->
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
        method="POST">
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="age">Age: </label>
                <input type="text" name="age">
            </div>

            <input type="submit" value="Submit" name="submit">
        </form>
    </body>