git init = gitリポジトリとして初期化
git add ファイル名 = *選択したファイルをステージング
git commit -m "コメント" = *ローカルリポジトリにコミット
git push origin master = *origin? master?ブランチにプッシュ(要調査)
origin = リモートリポジトリのアクセス先(絶対パス)に対してGitがデフォでつける名前

githubのユーザー名とパスワードの入力を求められる
git status = ステージングの状況を確認する
git log = プッシュした履歴を見る
*初期状態(githubと連携していない場合)でコマンドを打つとerror発生。
git config --globalコマンド実行後ユーザー名とメール設定
git remote add origin URLを入力 でプッシュしたいリポジトリを設定する。
コミット忘れてpushしたらEverything up-to-dateと返ってくる
