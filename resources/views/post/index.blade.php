<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 投稿</title>
</head>
<!-- 投稿画面 -->

<body class="">
    <x-header></x-header>
    <div class="page post-page">
        <form name="post" class="form" action="/post" method="post">
            @csrf
            <textarea name="postContent" id="" cols="30" rows="5" placeholder="いまどうしてる?"></textarea>
            <div class="post-button">
                <input class="button-white" type="button" onclick="check();" value="投稿する">

            </div>
            @error('postContent')
            <div>
                <p>
                    {{ $message }}
                </p>
            </div>
            @enderror
        </form>
    </div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>

<script>function check() {
        txt = document.post.postContent.value;
        n = txt.length;
        if (n < 1) {
            alert("1文字以上にしてください");
        } else if (n > 140) {
            alert("140文字以内にしてください");
        } else {
            document.post.submit();
        }
    }
</script>

<style scoped>
    .post-page .form {
        display: flex;
        flex-direction: column;
    }

    .post-page .post-button {
        text-align: end;
        margin: 20px 20px 0 0;
    }

    .post-page input {
        height: 35px;
        width: 90px;
        border-radius: 10px;
        font-weight: bold;
    }
</style>

</html>