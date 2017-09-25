<div class="col-md-2"></div>
    <form action="/index.php/board/write" method="POST" class="col-md-8">
<?php echo validation_errors(); ?>

        <input type="text" name="title" placeholder="제목" class="col-md-12"></input>
        <textarea name="content" placeholder="내용"></textarea>

        <div class="form_control">
            <br>
            <input class="btn btn-success btn-large" type="submit" value="등록"></input>
            <input class="btn btn-danger btn-large" type="button" value="취소"></input>
        </div>
    </form>
<div class="col-md-2"></div>

<script src="/static/lib/ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('content', {
    'filebrowserUploadUrl':'/index.php/topic/upload_receive_from_ck'});
</script>