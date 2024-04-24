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
　
<img width="660" alt="titleSearch" src="https://github.com/opatu07/portfolio/assets/156584393/882631d8-103a-41b5-b5b3-bf95d7b9d01d">
タイトル検索ではタイトルによる記事の検索ができます。

## 一般ユーザーでログイン後
<img width="660" alt="commonUserDropdown" src="https://github.com/opatu07/portfolio/assets/156584393/a2e70545-091e-4c27-8692-f7413931fe18">
一般ユーザーでログイン後に一般ユーザーの名前を押すとドロップダウンメニューが出てくるのでプロフィールの修正とログアウトができます。

## プロフィールの修正
プロフィールの修正画面では  
・ユーザーネーム  
・メールアドレス  
・パスワード  
の更新ができます。  
またアカウントの削除も行えます。

## プロフィール情報の変更

<img width="660" alt="updateProfile" src="https://github.com/opatu07/portfolio/assets/156584393/a50565d9-a5b7-4fa2-a08d-3502bf2e0e12">
プロフィール情報の更新では  
・ユーザーネーム  
・メールアドレス  
が変更できます。  
変更後に保存ボタンを押してもらうと設定が反映されます。

## プロフィール情報の変更後
<img width="660" alt="afterUpdateProfile" src="https://github.com/opatu07/portfolio/assets/156584393/509380c9-8f3d-4672-9eee-6ae5eb6c6284">
プロフィール情報が更新されると右下にフラッシュが出てきます。

## パスワードの更新

<img width="660" alt="updatePassword" src="https://github.com/opatu07/portfolio/assets/156584393/88eac77d-36cf-43d3-b49f-dde3fc57e48b">
パスワードの更新をするには
・現在のパスワード  
・新しいパスワード  
・パスワードの確認  
を入力してください。  
変更後に保存ボタンを押してもらうと設定が反映されます。

## パスワードの更新後
<img width="660" alt="afterUpdatePassword" src="https://github.com/opatu07/portfolio/assets/156584393/0dcfcc5f-dbc2-4309-91ea-14306e0d4a22">
パスワードの更新後は右下にフラッシュが出てきます。

## アカウントの削除
<img width="660" alt="deleteAccount" src="https://github.com/opatu07/portfolio/assets/156584393/d8fc49d2-934c-4dc6-830c-58a3503e9abe">

アカウントの削除を行うにはアカウントを削除ボタンを押してください。  

<img width="660" alt="deleteAccountConfirm" src="https://github.com/opatu07/portfolio/assets/156584393/2dd68840-a8ca-4d83-a346-ffc126af1962">

アカウントの削除のためのパスワード入力があるのでパスワードを入力してください。  

## アカウントの削除後

<img width="660" alt="afterDeleteAccount" src="https://github.com/opatu07/portfolio/assets/156584393/850591dd-6335-4a5c-b86b-6ddab9129b0e">

アカウントの削除後はホーム画面に移動して右下にフラッシュが出ます。


## 権限アカウントでログインする

<img width="660" alt="author" src="https://github.com/opatu07/portfolio/assets/156584393/d0a0c34e-1539-4b56-891e-7f57c6c98300">

権限アカウントでログインして右上の名前を押すとドロップボタンが出てきます。

権限アカウントでできることは  
・記事についての操作  
・プロフィールの修正  
・ログアウト  
です。  

## 記事についての操作

投稿一覧を押してもらうと  

<img width="660" alt="dashboard" src="https://github.com/opatu07/portfolio/assets/156584393/294ab5e2-82ae-48c2-88f2-c6b9293fd284">

ダッシュボード画面に移動します。
ここでは  
・記事の編集  
・記事の削除  

またダッシュボードを押してもらうと  

<img width="300" alt="dashboardDropdown" src="https://github.com/opatu07/portfolio/assets/156584393/5fd94474-b549-499b-a3d6-dd6d662dd181">

ドロップダウンが出てくるので  
・ダッシュボード画面
・新しい記事を作る  
この2つができます。

# 記事を新規追加

<img width="660" alt="createArticle" src="https://github.com/opatu07/portfolio/assets/156584393/e50e7e29-4c06-4cb4-803a-7edcc169cf0c">

記事の新規追加画面では  
・タイトル  
・スラッグ  
・サムネイル  
・要約  
・内容  
・カテゴリー  
を登録できます。  
また左上の __新規投稿__ を押すとドロップダウンが出てきてダッシュボードと記事の新規追加ページに移動できます。

# 記事新規追加後

<img width="660" alt="showArticle" src="https://github.com/opatu07/portfolio/assets/156584393/63e0c711-ed32-41d9-8ad4-080c0f630ee6">

記事を新規追加後はホーム画面に移動して記事が表示されていることを確認できます。  
また右下にフラッシュが出てきます。


# 記事の編集

<img width="660" alt="updateArticle" src="https://github.com/opatu07/portfolio/assets/156584393/37f853f8-a421-4e73-aa57-33fa7cbea5ee">

記事の編集画面では前の記事の情報を元に  
・タイトル  
・スラッグ  
・サムネイル  
・要約  
・内容  
・カテゴリー  
を編集できます。    
また左上の __記事を編集する:~__ を押すとドロップダウンが出てきてダッシュボードと記事の新規追加ページに移動できます。

# 記事の編集後

<img width="660" alt="showArticleUpdated" src="https://github.com/opatu07/portfolio/assets/156584393/caaf7dd9-5101-4108-9e6d-c65e01061071">

記事を編集後はホーム画面に移動して記事が表示されていることを確認できます。  
また右下にフラッシュが出てきます。

## 記事の削除

記事の削除は __記事を削除する__ を押してもらうと


<img width="660" alt="deleteConfirm" src="https://github.com/opatu07/portfolio/assets/156584393/e9358eed-e58b-48c9-858c-3e9663171a0f">

削除の確認が出てくるのでOKを押してもらうと  

右下に  

<img width="660" alt="deleteFlash" src="https://github.com/opatu07/portfolio/assets/156584393/8230c7d5-858f-4607-b615-c72500326464">

フラッシュが出てきます。











