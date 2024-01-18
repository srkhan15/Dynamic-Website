<?php
include("includes/header.inc");
include("includes/db_connect.inc");
include("includes/nav.inc");
?>



<main>

    <div>

        <div class="form">

            <h2>Contact Us</h2>
            <form>

                <label>First name:</label>
                <input type="text" name="firstname"><br><br>
                <label>Last name:</label>
                <input type="text" name="lastname"><br><br>
                <label>Email address</label>
                <input type="email" name="emailaddress"><br><br>
                <label>Phone</label>
                <input type="tel" name="phone"><br><br>
                <label>Contact me by</label>
                <input type="radio" id="Phone" name="Contact" value="Phone">
                <label for="Phone">Phone</label>
                <input type="radio" id="Email" name="Contact" value="Email">
                <label for="Email">Email</label><br><br>
                <label>Subject</label>
                <select id="subject" name="subject">
                    <option value="subject">Please select subject</option>
                    <option value="Game info">Game info</option>
                    <option value="Location">Location</option>
                    <option value="Complaint">Complaint</option>
                    <option value="Review">Review</option>
                </select><br><br>
                <label>Message</label>
                <textarea name="Message" rows="10"></textarea><br><br>
                <label></label>
                <input type="submit" name="submit">
            </form>
        </div>
    </div>
</main>
<?php
include("includes/footer.inc");
?>