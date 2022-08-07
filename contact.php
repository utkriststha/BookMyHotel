<?php
    include_once 'header.php';
?>
    <div class="contact">
        <div class="content">
            <h1 class="h">CONTACT US</h1>
            <form class="contact-form" action="includes/contactForm.inc.php" method="POST">
                <input type="text" id="name" name = "name" placeholder="Full Name">
                <input type="text" id="subject" name = "subject" placeholder="Subject">
                <input type="text" id="email" name ="email" placeholder="Email">
                <textarea name = "message"placeholder="Message"></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.423614531296!2d151.2115826153267!3d-33.87874238065347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae1710c8d379%3A0xebe5801ff7f61459!2sCharles%20Sturt%20University%20Study%20Centres%2C%20Sydney!5e0!3m2!1sen!2sau!4v1627895462110!5m2!1sen!2sau"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

<?php
    include_once 'footer.php';
?>