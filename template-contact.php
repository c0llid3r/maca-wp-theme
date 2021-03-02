<?php

/** Template Name: Contact Page */

get_header();

?>

<div class="container">
    <div class="contact">
        <div>
        <div>
            <form action="/" method="post">
                <label for="name">Name</label>
                <input type="text" id="name"/>
                <label for="email">Your email</label>
                <input type="text" id="email"/>
                <label for="message">Message</label>
                <textarea id="message"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        </div>
        <div>
        <div class="highlight-area">
            <?php the_content(); ?>
        </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>