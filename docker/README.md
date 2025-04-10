# docker ディレクトリ
## ディレクトリ以下の構成
Dockerの設定ファイルおよび設定時にmountを行う各ファイルを設置。

### /nginx
[dev-nginx]に関するWebサーバアプリケーションの設定ファイルを格納。

### /php
[web-front]に関するPHPの設定ファイルを格納。
フロント側も同じサーバー(コンテナ)に設定するため、Vuejsについての記載もこちらで実施。

### /python
[web-api]に関するPythonの設定ファイルを格納。

## docker-composeの基本コマンド
コンテナ間の関連付けのためDockerコマンドではなくdocker-composeのコマンドを使用している。
使用率の高い基本的なコマンドをこちらに記載する
オプション次第ではコンテナを起動する前にビルドを実行するなどもできるため、
個々人で確認を実施。

__ docker compose images __
現在存在しているサービスイメージを確認する。
__ docker compose build __
[compose.yml]に紐づくイメージファイルをビルド(作成)する。
__ docker compose ps __
サービスの起動状態を確認する。
__ docker-compose up __
サービスの実行を行う。このままの状態では閉じるまでdockerの実行処理が記述されてしまうため[-d]オプションを使用することが多い。
__ docker compose stop __
サービスの停止を行う。
__ docker compose down __
サービスの停止とコンテナの削除を実施する。
__ docker compose rm __
停止中のコンテナの強制削除を実施する。
__  docker builder prune __
イメージ側のキャッシュ削除を実施する。
__ docker system prune --volumes __
Vlumesの中身も含めコンテナの削除を実施する。