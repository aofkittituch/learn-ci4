<h2><?= esc($title) ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="<?= base_url('/news/create')?>" method="post">
    <?= csrf_field(); ?>

    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <br>

    <label for="body">Text</label>
    <textarea name="body" id="body" cols="30" rows="10"></textarea>
    <br>

    <input type="submit" value="submit" value="Create news item">
</form>

<a href="/news">Go back to news page</a>
<hr>