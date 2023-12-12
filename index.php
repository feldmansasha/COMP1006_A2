<?php require ('./inc/header.php'); ?>
<main>
    <section>
        <div>
            <h1>Find car enthusiasts!</h1>
        </div>
    </section>
    <section>
            <h3>New to our website? Sign up here!</h3>
            <!-- form to create new user -->
            <form method="post" action="savecar_admin.php">
                <div class="form-group">
                <p><input class="form-control" name="first_name" type="text" placeholder="First name" required/></p>
                <p><input class="form-control" name="last_name" type="text" placeholder="Last name" required></p>
                <p><input class="form-control" name="username" type="text" placeholder="Username" required></p>
                <p><input class="form-control" name="password" type="password" placeholder="Password" required></p>
                 <!-- submit button -->
                <input type="submit" name="submit" value="Register" />
                </div>
            </form>
    </section>
</main>
