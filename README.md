#使い方

1./var/www/htmlにこのリポジトリをクローンする。  
コマンド
```
cd /var/www/html
git clone https://github.com/OICTH1/view-tester.git
```
2.viewファイルをAPP/fuel/views/testに作成する。  
3.ブラウザで"localhost/view-test/public"にアクセスする。  
4.ViewNameのフォームに表示したいViewの名前を,DataJSONのフォームにはViewないで表示するデータをJSON形式で記述し,submitボタンを押す。

## Viewに外部のCSS,Imageを読み込む方法
"App/public/assets"に読み込みたいファイルをコピーする。  
CSSなら"App/public/assets/css/test"に  
Imageなら"App/public/assets/img/test"に  
### CSS
HTMLファイルの場合
```
<link rel="stylesheet" type="text/css" href="hoge.css">
```
FuelPHPの場合
```
echo Asset::css('test/hoge.css');
```
### Image
HTMLファイルの場合
```
<img src="../img/hoge.gif">
```
FuelPHPの場合
```
echo Asset::img('test/hoge.gif');
```
詳しくは下記URL  
http://fuelphp.jp/docs/1.7/classes/asset/usage.html
