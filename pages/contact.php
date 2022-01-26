<section>
    <h1>Contact</h1>
    <form action="/public/save.php" method="post">
        <div>
            <label for="id-name"></label>
            <input type="text" id="id-name" name="name" placeholder="Name">
        </div>
        <div>
            <label for="id-firstname"></label>
            <input type="text" id="id-firstname" name="firstname" placeholder="First Name">
        </div>
        <div>
            <label for="id-mail"></label>
            <input type="email" id="id-mail" name="mail" placeholder="Mail">
        </div>
        <div>
            <label for="id-message"></label>
            <textarea name="message" id="id-message" cols="30" rows="10" placeholder="Enter your message"></textarea>
        </div>
        <input type="submit" id="id-submit" name="submit" value="Send">
    </form>
</section>