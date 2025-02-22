<?php $this->extend('master') ?>

<?php $this->section('content') ?>
    <h1>Contact!</h1>

    <form action="<?php url_to('contact_store') ?>" method="post">
        <input type="text" name="email" id="">
        <input type="text" name="subject" id="">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form>

<?php $this->endSection() ?>