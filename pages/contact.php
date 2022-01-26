<?php
$messagesError = [
        "Error: an input is empty or non-existent !",
        "Error: the input name must be between 3 and 20 characters !",
        "Error: the input firstname must be between 3 and 20 characters !",
        "Error: the input mail must be between 6 and 100 characters !",
        "Error: your message must be between 10 and 300 characters !",
];

if(isset($_GET['error'])) {
    $feedback = (int)$_GET['error'];
    if(in_array($feedback, array_keys($messagesError))) {
        $backgroundClass = strpos($messagesError[$feedback], 'Error: ') === 0 ? 'feedback-error' : 'feedback-success'; ?>
        <div class="feedback-message <?= $backgroundClass ?>"><?= $messagesError[$feedback] ?></div> <?php
    }
}
?>

<section>
    <h1>Contact</h1>
    <form action="/public/save.php" method="post" name="form">
        <div>
            <label for="id-name"></label>
            <input type="text" id="id-name" name="name" placeholder="Name" minlength="3" maxlength="20" required>
        </div>
        <div>
            <label for="id-firstname"></label>
            <input type="text" id="id-firstname" name="firstname" placeholder="First Name" minlength="3" maxlength="20" required>
        </div>
        <div>
            <label for="id-mail"></label>
            <input type="email" id="id-mail" name="mail" placeholder="Mail" minlength="6" maxlength="100" required>
        </div>
        <div>
            <label for="id-message"></label>
            <textarea name="message" id="id-message" cols="30" rows="5" placeholder="Enter your message" minlength="10" maxlength="300" required></textarea>
        </div>
        <input type="submit" id="id-submit" name="submit">
    </form>
</section>

