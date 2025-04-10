# local_test

## /docker ディレクトリ
DockerFile 関連格納
## /api ディレクトリ
python 関連格納
FastApiのFW環境を構築
## /front ディレクトリ
php 関連格納
laravelのFWの環境を構築
「/front/public/」にVueに関連を格納
Vue用に下記ファイルを修正
front\vite.config.js
front\resources\js\app.js

** 構成
api側を外部インターフェースに見立てる。
画面の表記はVueJS側で構成。CURDはRestApiの形式でバックエンド(Laravel)側に投げ処理を実施する。