FROM python:3-onbuild

# アプリケーションディレクトリを作成する
WORKDIR /usr/src/python

# pipのアップデート
RUN pip install --upgrade pip

# pipでインストールしたいモジュールをrequirements.txtに記述しておいて、
# コンテナ内でpipにインストールさせる
# requirements.txtの書き方は[pip freeze]コマンドから参考に出来る
COPY . /usr/src/app
CMD ["python", "api.py"]