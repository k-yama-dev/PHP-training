//Dockerfileの次の部分でcomposerを有効にしておく。これはphp7なのでcomposerも古い2.0にする
RUN apt-get install -y zip \
unzip
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

//この配下にvendorフォルダーを次のコマンドで作る
composer require --dev phpunit/phpunit

//そのあと,次のコマンドでtestsの中身を実行する
vendor/bin/phpunit tests