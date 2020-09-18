<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>menu</title>
        <link rel="stylesheet" href="menu.css" />
    </head>
    <body>
        <input id="menu" type="checkbox">
        <label for="menu" class="back"></label>
        <aside>
            <label for="menu" class="close">×</label>
            <form action="/date" method="post" enctype="multipart/form-data">
                @csrf
                <nav class="owner">
                    <ul>
                        <p>
                            名前<br>
                            <input type="text" name="name" value="" size="20" required>
                        </p>
                        <p>
                            携帯電話番号<br>
                            <input type="text" name="tel" value="" size="20" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="090-1234-5678" required>
                        </p>
                        <p>
                            車名<br>
                            <input type="text" name="car_name" value="" size="20" required>
                        </p>
                        <p>
                            車番<br>
                            <input type="text" name="car_number" value="" size="20" pattern="[0-9]{4}" placeholder="0123" required>
                        </p>
                        <p>
                            メニュー<br>
                            <select name="menutype" required>
                                <option value="" selected="selected">選択してください</option>
                                <option value="洗車">洗車</option>
                                <option value="点検">点検</option>
                                <option value="車検">車検</option>
                                <option value="その他">その他</option>
                            </select>
                        </p>
                        <p>
                            <input type="submit" value="next">
                            <input type="reset" value="リセット">
                        </p>
                    </ul>
                </nav>
        </aside>
        <main>
            <ul id="menulist">
                <li>
                    <a href="#"><label for="menu" class="open">洗車</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open">点検</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open">車検</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open">その他</label></a>
                </li>
            </ul>
            </form>
        </main>
    </body>
</html>
