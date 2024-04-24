# このアプリの概要
このアプリでは自分が作った料理を投稿して見てもらうことができます。
<br>
<br>
<br>

# アプリのリンク
http://219.94.251.174/
<br>
<br>
<br>

# 開発環境
macOS Sonoma 14.4.1  

CentoOS Stream X_86_64  

Apache/2.4.57  

PHP 8.3.6  

mysql  Ver 8.0.36  

phpMyAdmin 5.2.1  

composer version 2.7.2  

Laravel Installer 5.7.1  
<br>
<br>
<br>

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
<br>
<br>
<br>

# アプリ作成で参考にしたもの
アプリの構成の大枠を作成するために使ったものを紹介します  
https://laracasts.com/series/laravel-8-from-scratch  
Laracasts Laravel 8 From Scratch   

Laravel Breeze 

<br><br>

# アプリの操作方法
<br>

## ホーム画面
<br>

<img width="660" alt="layout" src="https://github.com/opatu07/portfolio/assets/156584393/30e62f94-2553-4bec-87e1-f978224d9b67">
<br>

ホーム画面でできることは  
・左上のアイコンを押してもらうとホーム画面に移動する  
・右上のユーザー登録、ログインボタンを押すとそれぞれができる  
・カテゴリー検索、タイトル検索ができる  
・記事のオレンジ枠の部分を押すとカテゴリー検索ができる  
・記事のこの記事を読むを押すと記事の詳細を見れる  
です。

<br>
<br>


## ユーザーの新規登録

<br>

### ユーザー登録

<br>

<img width="660" alt="register" src="https://github.com/opatu07/portfolio/assets/156584393/63af3de9-a89c-4084-ae14-8aa5af39ddfd">

<br>

ユーザー登録画面では  
・ユーザーネーム    
・メールアドレス  
・パスワード  
を設定してもらうと登録できます

<br><br>

### ユーザー登録後

<br>

<img width="660" alt="afterRegister" src="https://github.com/opatu07/portfolio/assets/156584393/a61e8c16-c088-439e-b7c8-fbfda2135013">

<br>

ユーザー登録後は右上にユーザーネームが表示されて、右下に青色のフラッシュが出てきます。

<br><br>

## ログインについて

### ログイン画面

<br>

<img width="660" alt="login" src="https://github.com/opatu07/portfolio/assets/156584393/e50a8664-eb28-4109-910a-30f9b466679e">

<br>

ログイン画面では  
・メールアドレス  
・パスワード  
を入力でログインできます  
また　__パスワードを忘れてしまった方へ__　を押してもらうとパスワードリセット用のメール送信画面に移動します

<br><br><br>

### ログイン後

<br>

<img width="660" alt="afterLogin" src="https://github.com/opatu07/portfolio/assets/156584393/72775f4b-2d33-4c09-a655-19966caa1f3b">

<br>

ログイン後は右上にユーザーネームが表示されて、右下に青色のフラッシュが出てきます。

<br><br><br>

## パスワードリセットについて

<br>

### パスワードリセット

<br>

ログイン画面から　__パスワードを忘れてしまった方へ__　を押してもらうとパスワードリセット用のメール送信画面に移動できます。

<br>

<img width="660" alt="password_mail" src="https://github.com/opatu07/portfolio/assets/156584393/29a90e03-5990-472f-aa18-7ffe656b6280">

<br>

新規登録画面で設定したメールアドレスを入力してもらってパスワードリセット用のメールを送信できます。

<br>
<br>
<br>

### パスワードリセットメール送信後

<br>

<img width="660" alt="afterPassword_mail" src="https://github.com/opatu07/portfolio/assets/156584393/83a6d74d-b44e-4f09-b397-1e98d6bc6f98">

<br>

送信後はこんな感じです

<br><br><br>

### パスワードリセットメール内容

<br>

<img width="660" alt="mail" src="https://github.com/opatu07/portfolio/assets/156584393/ba77f257-dd01-48aa-a3d1-fc1c81468e3f">


<br>

パスワードリセットメールは __パスワードリセット__ のボタンを押すか下記URLをブラウザでコピペしてもらうとパスワードリセット画面に移動できます。

<br><br><br>

### パスワードリセット画面

<br>

<img width="660" alt="passwordReset" src="https://github.com/opatu07/portfolio/assets/156584393/c6897556-7288-409c-bd42-ffdcd3ea0536">

<br>

パスワードリセットには  
・メールアドレス  
・新しいパスワード  
・パスワードの確認  
を入力してもらうとできます

<br><br><br>

### パスワードリセット後

<br>

<img width="660" alt="afterPassword" src="https://github.com/opatu07/portfolio/assets/156584393/bc3d034b-6c81-4651-aaed-0e137d1794a9">

<br>

パスワードリセット後は右下にフラッシュが出てログイン画面に移動するのでログインできるようになってます。

<br><br><br>

## 検索機能

<br>

### カテゴリー検索

<br>

<img width="660" alt="category" src="https://github.com/opatu07/portfolio/assets/156584393/4ad9d0e3-02fe-4149-b412-1553d5da99f2">  

<br>

カテゴリー検索ボタンを押すとカテゴリーが出てきて選択ができるようになってます。

<br><br><br>

### カテゴリー検索後

<br>

<img width="660" alt="afterCategory" src="https://github.com/opatu07/portfolio/assets/156584393/0372000b-e4b0-4095-910c-db0122240684">  

<br>

カテゴリー検索後はカテゴリー検索ボタンに検索したカテゴリーが表示されます。

<br><br><br>

### タイトル検索

<br>

<img width="660" alt="titleSearch" src="https://github.com/opatu07/portfolio/assets/156584393/882631d8-103a-41b5-b5b3-bf95d7b9d01d">  

<br>

タイトル検索ではタイトルによる記事の検索ができます。

<br><br><br>


## ログイン後にできること

<br>

<img width="660" alt="commonUserDropdown" src="https://github.com/opatu07/portfolio/assets/156584393/a2e70545-091e-4c27-8692-f7413931fe18">  

<br>

一般ユーザーでログイン後に一般ユーザーの名前を押すとドロップダウンメニューが出てくるのでプロフィールの修正とログアウトができます。

<br><br><br>

### プロフィールの修正

<br>

プロフィールの修正画面では  
・ユーザーネーム  
・メールアドレス  
・パスワード  
の更新ができます。  
またアカウントの削除も行えます。  

<br><br><br>

### プロフィール情報の変更

<br>

<img width="660" alt="updateProfile" src="https://github.com/opatu07/portfolio/assets/156584393/a50565d9-a5b7-4fa2-a08d-3502bf2e0e12">  

<br>

プロフィール情報の更新では  
・ユーザーネーム  
・メールアドレス  
が変更できます。  
変更後に保存ボタンを押してもらうと設定が反映されます。  

<br><br><br>

### プロフィール情報の変更後

<br>

<img width="660" alt="afterUpdateProfile" src="https://github.com/opatu07/portfolio/assets/156584393/509380c9-8f3d-4672-9eee-6ae5eb6c6284">  

<br>

プロフィール情報が更新されると右下にフラッシュが出てきます。  

<br><br><br>

### パスワードの更新

<br>

<img width="660" alt="updatePassword" src="https://github.com/opatu07/portfolio/assets/156584393/88eac77d-36cf-43d3-b49f-dde3fc57e48b">  

<br>

パスワードの更新をするには  
・現在のパスワード  
・新しいパスワード  
・パスワードの確認  
を入力してください。  
変更後に保存ボタンを押してもらうと設定が反映されます。  

<br><br><br>

### パスワードの更新後

<br>

<img width="660" alt="afterUpdatePassword" src="https://github.com/opatu07/portfolio/assets/156584393/0dcfcc5f-dbc2-4309-91ea-14306e0d4a22">  

<br>

パスワードの更新後は右下にフラッシュが出てきます。  

<br><br><br>

### アカウントの削除

<br>

<img width="660" alt="deleteAccount" src="https://github.com/opatu07/portfolio/assets/156584393/d8fc49d2-934c-4dc6-830c-58a3503e9abe">  

<br>

アカウントの削除を行うにはアカウントを削除ボタンを押してください。  

<br>

<img width="660" alt="deleteAccountConfirm" src="https://github.com/opatu07/portfolio/assets/156584393/2dd68840-a8ca-4d83-a346-ffc126af1962">  

<br>

アカウントの削除のためのパスワード入力があるので現在のパスワードを入力してください。  

<br><br><br>

### アカウントの削除後

<br>

<img width="660" alt="afterDeleteAccount" src="https://github.com/opatu07/portfolio/assets/156584393/850591dd-6335-4a5c-b86b-6ddab9129b0e">  

<br>

アカウントの削除後はホーム画面に移動して右下にフラッシュが出ます。  

<br><br><br>

## 権限アカウントでログインするとできること

<br>

<img width="660" alt="author" src="https://github.com/opatu07/portfolio/assets/156584393/d0a0c34e-1539-4b56-891e-7f57c6c98300">  

<br>

権限アカウントでログインして右上のユーザーネームを押すとドロップボタンが出てきます。  

権限アカウントでできることは  
・記事についての操作  
・プロフィールの修正  
・ログアウト  
です。  

<br><br><br>

### 記事についての操作

<br>

投稿一覧を押してもらうと  

<br>

<img width="660" alt="dashboard" src="https://github.com/opatu07/portfolio/assets/156584393/294ab5e2-82ae-48c2-88f2-c6b9293fd284">  

<br>

ダッシュボード画面に移動します。  
ここでは  
・記事の編集  
・記事の削除  

またダッシュボードを押してもらうと  

<br>

<img width="300" alt="dashboardDropdown" src="https://github.com/opatu07/portfolio/assets/156584393/5fd94474-b549-499b-a3d6-dd6d662dd181">  

<br>

ドロップダウンが出てくるので  
・ダッシュボード画面  
・新しい記事を作る  
この2つができます。  

<br><br><br>

#### 記事を新規追加

<br>

<img width="660" alt="createArticle" src="https://github.com/opatu07/portfolio/assets/156584393/e50e7e29-4c06-4cb4-803a-7edcc169cf0c">  

<br>

記事の新規追加画面では  
・タイトル  
・スラッグ  
・サムネイル  
・要約  
・内容  
・カテゴリー  
を登録できます。  
また左上の __新規投稿__ を押すとドロップダウンが出てきてダッシュボードと記事の新規追加ページに移動できます。  

<br><br><br>

#### 記事新規追加後

<br>

<img width="660" alt="showArticle" src="https://github.com/opatu07/portfolio/assets/156584393/63e0c711-ed32-41d9-8ad4-080c0f630ee6">  

<br>

記事を新規追加後はホーム画面に移動して記事が表示されていることを確認できます。  
また右下にフラッシュが出てきます。  

<br><br><br>

#### 記事の編集

<br>

<img width="660" alt="updateArticle" src="https://github.com/opatu07/portfolio/assets/156584393/37f853f8-a421-4e73-aa57-33fa7cbea5ee">  

<br>

記事の編集画面では前の記事の情報を元に  
・タイトル  
・スラッグ  
・サムネイル  
・要約  
・内容  
・カテゴリー  
を編集できます。    
また左上の __記事を編集する:~__ を押すとドロップダウンが出てきてダッシュボードと記事の新規追加ページに移動できます。  

<br><br><br>

#### 記事の編集後

<br>

<img width="660" alt="showArticleUpdated" src="https://github.com/opatu07/portfolio/assets/156584393/caaf7dd9-5101-4108-9e6d-c65e01061071">  

<br>

記事を編集後はホーム画面に移動して記事が表示されていることを確認できます。  
また右下にフラッシュが出てきます。  

<br><br><br>

#### 記事の削除

<br>

記事の削除は __記事を削除する__ を押してもらうと  

<br>

<img width="660" alt="deleteConfirm" src="https://github.com/opatu07/portfolio/assets/156584393/e9358eed-e58b-48c9-858c-3e9663171a0f">  

<br>

削除の確認が出てくるのでOKを押してもらうと  

右下に  

<img width="660" alt="deleteFlash" src="https://github.com/opatu07/portfolio/assets/156584393/8230c7d5-858f-4607-b615-c72500326464">  

フラッシュが出てきて記事が削除されたことが確認できます。  

<br><br><br>

## 記事の詳細を見る

<br>

<img width="660" alt="detailArticle" src="https://github.com/opatu07/portfolio/assets/156584393/1444baa1-5734-4dac-95fb-90b93f3fd9a8">

<br>

ホーム画面から読みたい記事を選択して __この記事を読む__ ボタンを押します。ここでは  
・タイトル  
・本文  
・投稿日  
・コメント  
が見れます。  
ログインか新規登録をしてもらうと記事にコメントが書けるようになります。

<br><br><br>

## コメントをする

<br>

<img width="660" alt="comment" src="https://github.com/opatu07/portfolio/assets/156584393/93edacdf-1ff0-47fe-a095-3a4b9a6091f1">

<br>

ログインか新規登録後に記事にコメントを書く用のフォームが出てきます。

<img width="660" alt="showComment" src="https://github.com/opatu07/portfolio/assets/156584393/8e3c3a9e-fc49-476c-b303-f90f231c82ba">

<br>

sampleでコメントしたものが反映されています。









