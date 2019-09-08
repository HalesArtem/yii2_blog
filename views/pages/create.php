<form action="/pages/create" method="post">
    <input
        type="hidden"
        name="<?=Yii::$app->request->csrfParam?>"
        value="<?=Yii::$app->request->getCsrfToken()?>"
    >
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
        <label for="alias">Alias</label>
        <input type="text" class="form-control" name="alias" id="alias">
    </div>
    <div class="form-group">
        <label for="intro">Intro</label>
        <input type="text" class="form-control" name="intro" id="intro">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Create</button>
        <a href="/pages/index" class="btn btn-danger">Cancel</a>
    </div>
</form>

