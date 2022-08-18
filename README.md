# 🐳
# 環境構築

### 1. ローカルにcloneする

### 2. Dockerのインストール

### 3. 「Docker Desktop」の起動

### 4. 「Dockerコンテナ」の起動

```
./docker-compose-local.sh up
```

# 機能一覧

[ユーザー登録画面](https://round-petunia-b6f.notion.site/c0311abf197b42c193382eaca27643c7)

[ユーザー登録確認画面](https://round-petunia-b6f.notion.site/03892a0051ba4d72ad2900a967baa6df)

[ログイン画面](https://round-petunia-b6f.notion.site/6d95b745c12f43c1af4107a9f702534f)

[ヘッダー](https://round-petunia-b6f.notion.site/a2c191a4c9ca4686921e3b93535e63c7)

[Topページ](https://round-petunia-b6f.notion.site/Top-b6bf1ec4356441c6ac56beea5183eed6)

[収入一覧ページ](https://round-petunia-b6f.notion.site/317adb4055ae4c1ea31301b07191da1a)

[収入登録ページ](https://round-petunia-b6f.notion.site/da09626d718745d88cd02a7cd1ff8a29)

[収入源一覧ページ](https://round-petunia-b6f.notion.site/a44ac497a20a42b2850623c6d994ac18)

[収入源追加ページ](https://round-petunia-b6f.notion.site/c610bed75e1e4a02ab127fa2565a8d06)

[収入源編集ページ](https://round-petunia-b6f.notion.site/79bb9561581b4ee880f02043ee393111)

[収入編集ページ](https://round-petunia-b6f.notion.site/de93db2a5de14a739870fd0058ebe6c0)

[支出一覧ページ](https://round-petunia-b6f.notion.site/c493686c64354dabbf942a9622b32afd)

[支出登録ページ](https://round-petunia-b6f.notion.site/a2d8671ada1042e8b3df2db7d2cc60d1)

[カテゴリ一覧ページ](https://round-petunia-b6f.notion.site/2990fe9afe2f4417b6989201a893b6b7)

[カテゴリ追加ページ](https://round-petunia-b6f.notion.site/89ada8df91e34c95a4df7565cdd719a3)

[カテゴリ編集ページ](https://round-petunia-b6f.notion.site/b5df40dbb5144478936ac1bddc545c6b)

[支出編集ページ](https://round-petunia-b6f.notion.site/dd32053f97a84ac5af02564bfd9dbfbf)

# データベース名

kakeibo

#　テーブル設計

[users](https://round-petunia-b6f.notion.site/296c4d4c0f3c40a7961536bdc888a6d7?v=e0d1f265a98f4139ac9f8d6d7434bf57)

[incomes](https://round-petunia-b6f.notion.site/0289692ede2a42dba6858765caf63929?v=78729d7efd834c8e95e6504550d0054b)

[income_sources](https://round-petunia-b6f.notion.site/bc2f2547616f4502a83ee9033373a137?v=f713ee06038f4ca89d8866f74d4d69f0)

[spendings](https://round-petunia-b6f.notion.site/44882f41328242e181601e1a6a4817f1?v=1c314b3950bb46ebbce364c3c9eb051c)

[categories](https://round-petunia-b6f.notion.site/b521fd1c87104dfb8e7c82f515baf40b?v=97649dc7667942fd8271d2a58a45bd9a)


# ページ紹介

[ローカルサーバー](http://localhost:8080)

[PHPMyAdmin](http://localhost:3306)


## 設定を変更したい

```
localhost:8080をhtmlが表示されるようにしたい -> nginx/default.conf 4行目を index index.htmlにする。
```
