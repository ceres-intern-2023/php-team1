php開発用のサンプルプロジェクトです。
Laravelで作成しています。

Linux上で動作する想定で作成しています。
コンテナではないので、ローカルで動作させる場合はDBの接続情報等変更が必要です。

割り当てられた環境のproject配下で以下を実行してください。
## サンプルをgit clone
git clone git@github.com:ceres-intern-2023/php-skelton.git .
## composerでインストールするものを入れる
composer install
## 環境ファイルをサンプルからコピー
cp .env.example .env
## MYSql、Redisの接続に関する内容を修正。
パスワードには記号が入っているので""で囲むこと

vi .env

## APP_KEYを生成
php artisan key:generate
## マイグレーションしてログイン用のDBを作る
php artisan migrate

## システム概要図
![php-skelton-システム構成図 drawio](https://github.com/ceres-intern-2023/php-skelton/assets/54792902/6cbaad24-ec9e-4a18-abab-04c0e9df8ec2)

## adminerのログイン方法
【URL】http://adminer.intern.cloud.ceres.local/

サーバ：127.0.0.1

ユーザー名～データベース：各チームの接続情報
