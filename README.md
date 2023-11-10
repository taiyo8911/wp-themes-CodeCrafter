# wp-themes-CodeCrafter
シンプルなWordPressのテーマです。


## 備忘録として
### スタイルの変更方法
スタイルを変更したい場合は、style.cssを編集します。Bootstrap5のクラスが使えます。

### WordPressでこのテーマを使う方法
* レンタルサーバーにWordPressをインストールする
* 本テーマファイルをダウンロードする（ZIPファイル）
* ダウンロードしたテーマファイルをレンタルサーバーにアップする
* WordPressでテーマを選択する

#### テーマフォルダのアップロード先
レンタルサーバーの public html/wp-content/themes の中にダウンロードしたフォルダをアップする。


### WordPress内の設定について
#### ①サイトのタイトルとキャッチフレーズ
ダッシュボードの「設定」「一般設定」でサイトのタイトルとキャッチフレーズを入力すると反映される。

#### ②カスタムフィールドの設定
記事内のボタンリンクはカスタムフィールドの値を用いて生成される仕様です。<br>
まず、WordPressでカスタムフィールドを使えるように設定します。<br>
つぎに2つのカスタムフィールドを作ります。1つ目は「アプリのURL」という項目です。2つ目は「GitHubのURL」という項目です。<br>
つぎに、投稿ページからカスタムフィールドで値を入力します。<br>
内容には「アプリのURL」という文字を書きます。値にはそのURLを書きます。<br>
2つ目は「GitHubのURL」という文字を書きます。値にはそのURLを書きます。<br>
投稿すると、トップページに記事が並びます。

#### トップページの記事数上限を変更
ダッシュボードの「設定」「表示設定」「1ページに表示する最大投稿数」でトップページに表示される投稿数を変更できます。
