# このアプリの概要
このアプリでは自分が作った料理を投稿して見てもらうことができます。

# アプリのリンク
http://219.94.251.174/

# 開発環境
macOS Sonoma 14.4.1  
CentoOS Stream X_86_64  
Apache/2.4.57  
PHP 8.3.6  
mysql  Ver 8.0.36  
phpMyAdmin 5.2.1  
composer version 2.7.2  
Laravel Installer 5.7.1  

# 使える機能
認証系  
・ログイン  
・会員登録  
・ログアウト  
・マイページでのメールアドレス、パスワード変更、退会処理  
・パスワードリマインダー機能  
CRUD処理  
・新規登録  
・一覧表示  
・詳細表示  
・更新処理  
・削除処理  
画像のアップロードに関して  
記事を作成する際に画像をアップロードできるようにして  
ユーザーが使いやすいようにタイトル検索とカテゴリーで検索できるようにしました。  

# アプリの操作方法

## ホーム画面

<img width="660" alt="layout" src="https://github.com/opatu07/portfolio/assets/156584393/30e62f94-2553-4bec-87e1-f978224d9b67">

ホーム画面でできることは  
・左上のアイコンを押してもらうとホーム画面に移動する  
・右上のユーザー登録、ログインボタンを押すとそれぞれができる  
・カテゴリー検索、タイトル検索ができる  
・記事のオレンジ枠の部分を押すとカテゴリー検索ができる  
・記事のこの記事を読むを押すと記事の詳細を見れる  
です

## ユーザー登録

<img width="660" alt="register" src="https://github.com/opatu07/portfolio/assets/156584393/63af3de9-a89c-4084-ae14-8aa5af39ddfd">

ユーザー登録画面では  
・ユーザー登録画面  
・メールアドレス  
・パスワード  
を設定してもらうと登録できます

## ユーザー登録後
<img width="660" alt="afterRegister" src="https://github.com/opatu07/portfolio/assets/156584393/a61e8c16-c088-439e-b7c8-fbfda2135013">

ユーザー登録後は右上にユーザーネームが表示されて、右下に青色のフラッシュが出てきます。

## ログイン画面

<img width="660" alt="login" src="https://github.com/opatu07/portfolio/assets/156584393/e50a8664-eb28-4109-910a-30f9b466679e">

ログイン画面では  
・メールアドレス  
・パスワード  
を入力でログインできます  
また　__パスワードを忘れてしまった方へ__　を押してもらうとパスワードリセット用のメール送信画面に移動します

## ログイン後

<img width="660" alt="afterLogin" src="https://github.com/opatu07/portfolio/assets/156584393/72775f4b-2d33-4c09-a655-19966caa1f3b">

ログイン後は右上にユーザーネームが表示されて、右下に青色のフラッシュが出てきます。

## パスワードリセット
ログイン画面から　__パスワードを忘れてしまった方へ__　を押してもらうとパスワードリセット用のメール送信画面に移動できます。


<img width="660" alt="password_mail" src="https://github.com/opatu07/portfolio/assets/156584393/29a90e03-5990-472f-aa18-7ffe656b6280">

新規登録画面で設定したメールアドレスを入力してもらってパスワードリセット用のメールを送信できます。

## パスワードリセットメール送信後
<img width="660" alt="afterPassword_mail" src="https://github.com/opatu07/portfolio/assets/156584393/83a6d74d-b44e-4f09-b397-1e98d6bc6f98">

送信後はこんな感じです

## パスワードリセットメール内容

<img width="660" alt="mail" src="https://github.com/opatu07/portfolio/assets/156584393/6a74491e-712d-4eb6-bf25-0435fb37bd56">

パスワードリセットメールは __パスワードリセット__ のボタンを押すか下記URLをブラウザでコピペしてもらうとパスワードリセット画面に移動できます。

## パスワードリセット画面

<img width="660" alt="passwordReset" src="https://github.com/opatu07/portfolio/assets/156584393/c6897556-7288-409c-bd42-ffdcd3ea0536">

パスワードリセットには  
・メールアドレス  
・新しいパスワード  
・パスワードの確認  
を入力してもらうとできます

## パスワードリセット後

<img width="660" alt="afterPassword" src="https://github.com/opatu07/portfolio/assets/156584393/bc3d034b-6c81-4651-aaed-0e137d1794a9">

パスワードリセット後は右下にフラッシュが出てログイン画面に移動するのでログインできるようになってます。

## カテゴリー検索

<img width="660" alt="category" src="https://github.com/opatu07/portfolio/assets/156584393/4ad9d0e3-02fe-4149-b412-1553d5da99f2">

カテゴリー検索ボタンを押すとカテゴリーが出てきて選択ができるようになってます。

## カテゴリー検索後
<img width="660" alt="afterCategory" src="https://github.com/opatu07/portfolio/assets/156584393/0372000b-e4b0-4095-910c-db0122240684">

カテゴリー検索後はカテゴリー検索ボタンに検索したカテゴリーが表示されます。

## タイトル検索
　




