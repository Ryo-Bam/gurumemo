# グルメも

## アプリ概要

一度行ったことのあるお店について自分が思ったことをメモし、かつ、他人のメモの閲覧やお店ごとに質問ができるアプリです。

### 利用方法

最初にマップ検索で自分の書きたい、見たいお店を検索します。<br>
その後、メモや質問を投稿または回答します。

### 目指した課題解決

お店の口コミが書けるものとして Google Map がありますが、自由度が高すぎることによって各々の知りたい情報を見つけるのに時間がかかったり情報自体なかったりします。<br>
その課題解決として、一定の情報分けをすることによって知りたい情報を見つけやすく、見つからなくても質問投稿機能から自分の目的とする情報を直接投げかけることができるようにしています。

### アプリ URL

http://gurumemos.herokuapp.com/

### テストアカウント

メールアドレス：kani@gmail.com <br>
パスワード：kanikani

## 開発環境

os:macOS<br>
HTML<br>
CSS<br>
PHP v7.3.24<br>
npm v7.11.2<br>
node v16.1.0<br>
Sass v1.32.11<br>
React.js v17.0.2<br>
Laravel v8.77.1<br>
material-ui/core v4.12.3<br>
MySQL<br>
AWS<br>
Google Maps API(Geocoding API, Maps JavaScript API, Places API)

## 機能一覧

・ログイン機能<br>
・サインアップ機能<br>
・マップ検索機能<br>
・メモ投稿機能<br>
・星評価機能<br>
・写真 S3 アップロード機能<br>
・質問投稿機能<br>
・質問の回答投稿機能

## ER 図

![ERD gurumemo](https://user-images.githubusercontent.com/66828364/153543110-791aafb8-1d57-46f0-afa9-186e8dfd292b.jpeg)

## デモ画面

### ログイン後の home の画像で、最初に検索をかけたところです。

<img width="1428" alt="スクリーンショット 2022-02-16 23 09 58" src="https://user-images.githubusercontent.com/66828364/154282506-7acb3f71-3fe0-40f1-b2dd-4226d1ac09e8.png">

### メモの新規投稿フォームと質問の新規投稿フォームです。

<img width="1054" alt="スクリーンショット 2022-02-16 23 10 41" src="https://user-images.githubusercontent.com/66828364/154285447-587b3199-d92e-4ca2-838a-3ca757d68510.png">

### 質問はフォームで書くと一覧で出てきます。

<img width="502" alt="スクリーンショット 2022-02-16 23 11 48" src="https://user-images.githubusercontent.com/66828364/154285493-af309c71-1dd4-468a-9d47-d1ae62c0b02a.png">

### 特定の質問を押すとその質問の回答一覧及び回答フォームがあります。

<img width="1050" alt="スクリーンショット 2022-02-16 23 12 58" src="https://user-images.githubusercontent.com/66828364/154285555-8438e520-1d97-4d6a-9521-a8c4b5e9b210.png">
