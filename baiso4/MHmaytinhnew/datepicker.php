
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
    <script src="css/jquery.js"></script>
    <script src="css/jquery.datetimepicker.full.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="search_box.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
    <div class="col-sm-2">
        <div class="header">
            <a href="#"> <img src="img/logo.PNG" alt=""></a>
            <p style="padding-left: 80px; font-size: 12px">大阪</p>
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="login.html">予約管理</a></li>
                <li style="background: #FAF9F7" class="left"><a href="index.html">予約依頼一覧</a></li>
                <li class="left"><a href="index1.html">予約連絡・確定一覧</a></li>
                <li class="left"><a href="index2.html">キャンセル一覧</a></li>
                <li><a href="index3.html">患者管理</a></li>
                <li class="left"><a href="index4.html">患者一覧</a></li>
                <li class="left"><a href="index5.html">患者CSV取り込み</a></li>
                <li><a href="#">マスタ管理</a></li>
                <li class="left"><a href="#">管理者一覧</a></li>
                <li class="left"><a href="#">症例紹介</a></li>
            </ul>
        </nav>

    </div>

    <div class="col-sm-10 container">
        <p style="font-size: 21px; display: inline-block">予約依頼一覧</p>
        <div class="content">
            <nav style="margin-bottom: 5px" class="clearfix">
                <div>
                    <p>ステータス</p>
                    <select style="width: 450px; margin-right: 20px">
                        <option value="0">Vui lòng chọn</option>
                        <option value="1">Yêu cầu đặt phòng</option>
                        <option value="2">Đặt trước</option>
                    </select>
                </div>
                <div>
                    <p>カルテ番号</p>
                    <input style="width: 450px" type="text">
                </div>
            </nav>
            <nav class="clearfix" style="margin-bottom: 5px">
                <div>
                    <p>美容・歯科</p>
                    <select style="width: 290px; margin-right: 20px">
                        <option value="0">Vui lòng chọn</option>
                        <option value="1">Người đẹp</option>
                        <option value="2">Nha khoa</option>
                    </select>
                </div>
                <div>
                    <p>予約カテゴリ</p>
                    <select style="width: 290px; margin-right: 20px">
                        <option value="0">Vui lòng chọn</option>
                    </select>
                </div>
                <div>
                    <p>相談内容</p>
                    <select style="width: 290px">
                        <option value="0">Vui lòng chọn</option>
                    </select>
                </div>
            </nav>
            <nav class="clearfix" style="margin-bottom: 5px">
                <div>
                    <p>候補日 <a href="#"><i style="color: #bf2e62; padding-top: 50px font-size: 150%" class="fas fa-calendar"></i></a></p>

                    <link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
                    <script src="css/jquery.js"></script>
                    <script src="css/jquery.datetimepicker.full.js"></script>

                    <input style="width: 290px; margin-right: 20px" type="text" id="datetime">

                    <script>
                        $("#datetime").datetimepicker();
                    </script>
                </div>

                <div>
                    <p style="margin-right: 20px; padding-top: 50px">〜</p>
                </div>
                <div>
                    <p style="color: white">a</p>
                    <input style="width: 290px; margin-right: 20px" type="text">
                </div>
            </nav>
            <p style=" font-size: 12px; text-align: center">
                <input style="height: 20px" type="checkbox">
                予約NGを非表示
            </p>
            <a href="#"> <p style="padding-top: 12px" class="search" data-toggle="modal" data-target="#myModal">検索</p></a>




        </div>


        <div class="table">
            <table style="width: 100%; margin-top: 50px">
                <tr class="content1">
                    <th>ステータス</th>
                    <th>予約No</th>
                    <th>予約依頼日</th>
                    <th>カルテ番号</th>
                    <th>美容・歯科</th>
                    <th>予約カテゴリ</th>
                    <th>相談内容</th>
                    <th>候補日</th>
                    <th>アクション</th>
                </tr>
                <tr class="content3">
                    <td>予約依頼</td>
                    <td>20191209002</td>
                    <td>2019/12/09</td>
                    <td>123456</td>
                    <td>歯科</td>
                    <td>手術</td>
                    <td>定期検診</td>
                    <td>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                    </td>
                    <td>
                        <p>
                            <input class="input2" type="submit" value="予約日連絡をする">
                            <input class="input3" type="submit" value="編集">
                        </p>
                        <p>
                            <input class="input2" type="submit" value="NG連絡をする">
                            <input class="input3" type="submit" value="削除">
                        </p>
                    </td>
                </tr>
                <tr class="content3">
                    <td>予約依頼</td>
                    <td>20191209002</td>
                    <td>2019/12/09</td>
                    <td>123456</td>
                    <td>歯科</td>
                    <td>手術</td>
                    <td>定期検診</td>
                    <td>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                    </td>
                    <td>
                        <p>
                            <input class="input2" type="submit" value="予約日連絡をする">
                            <input class="input3" type="submit" value="編集">
                        </p>
                        <p>
                            <input class="input2" type="submit" value="NG連絡をする">
                            <input class="input3" type="submit" value="削除">
                        </p>
                    </td>
                </tr>
                <tr class="content2">
                    <td>予約依頼</td>
                    <td>20191209002</td>
                    <td>2019/12/09</td>
                    <td>123456</td>
                    <td>歯科</td>
                    <td>手術</td>
                    <td>定期検診</td>
                    <td>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                    </td>
                    <td>
                        <p style="padding: 50px 0 0 144px"><input class="input3" type="submit" value="削除"></p>
                    </td>
                </tr>
                <tr class="content3">
                    <td>予約依頼</td>
                    <td>20191209002</td>
                    <td>2019/12/09</td>
                    <td>123456</td>
                    <td>歯科</td>
                    <td>手術</td>
                    <td>定期検診</td>
                    <td>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                        <p class="p">2019/09/26</p>
                    </td>
                    <td>
                        <p>
                            <input class="input2" type="submit" value="予約日連絡をする">
                            <input class="input3" type="submit" value="編集">
                        </p>
                        <p>
                            <input class="input2" type="submit" value="NG連絡をする">
                            <input class="input3" type="submit" value="削除">
                        </p>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg page">
        <div style=" padding: 20px 40px" class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <p>予約NO</p>
                        <p>予約依頼日</p>
                        <p>カルテ番号</p>
                        <p>カルテ番号</p>
                        <p>予約カテゴリ</p>
                        <p>相談内容</p>
                        <p>予約候補日</p>
                    </div>

                    <div class="col-4">
                        <p>0123456789</p>
                        <p>2019/12/09</p>
                        <p>123456</p>
                        <p>美容</p>
                        <p>手術</p>
                        <p>定期検診</p>
                        <p style="padding-right: 30px; display: inline-block">第１希望  <p style="display: inline-block">2019/12/09</p>
                        <p style="padding-right: 30px; display: inline-block">第２希望  <p style="display: inline-block">2019/12/10</p>
                        <p style="padding-right: 30px; display: inline-block">第３希望  <p style="display: inline-block">2019/12/11</p>
                        <p style="padding-right: 30px; display: inline-block">第４希望  <p style="display: inline-block">2019/12/12</p>
                        <p style="padding-right: 30px; display: inline-block">第５希望  <p style="display: inline-block">2019/12/13</p>
                    </div>
                </div>

                <p style="font-size: 12px; display: inline-block">この予約に対する予約日を選択してください。</p>
                <p style="display: inline-block">
                    <input style="border: 1px solid #A59647; border-radius: 3px;height: 40px; margin-left: 50px; text-align: center; max-width: 140px" class="input4" type="text" placeholder="2019/12/09">
                    <a href="#"><i style="color: #bf2e62; padding-left: 10px; font-size: 180%" class="fas fa-calendar"></i></a>
                </p>
                <p style="font-size: 12px">手術の場合、合計金額と予約金を選択してください。</p>
                <p style="display: inline-block; margin-right: 100px">合計金額</p>
                <p style="display: inline-block">予約金</p>
                <nav class="pop clearfix">
                    <div><input style="border: 1px solid #A59647; border-radius: 3px; height: 40px; max-width: 140px; text-align: center" type="text" value="800,000"></div>
                    <div style="margin-top: 7px">x</div>
                    <div><input style="border: 1px solid #A59647; border-radius: 3px; height: 40px; max-width: 140px; text-align: center" type="text" value="10%"></div>
                    <div style="margin-top: 7px">=</div>
                    <div><input style="border: 1px solid #A59647; border-radius: 3px; height: 40px; max-width: 140px; text-align: center" type="text" value="80,000"></div>
                </nav>

                <p style="text-align: center; margin-top: 20px" >
                    <input style="width: 240px; height: 40px; text-align: center; background: #bf2e62; color: white; border-radius: 5px" type="submit" value="入力した日付で予約日を連絡する">
                    <input style="width: 110px; height: 40px; text-align: center; background: #d7d7d7; color: white; border-radius: 5px" type="submit" value="キャンセル" data-dismiss="modal">
                </p>

            </div>

        </div>
    </div>

</div>

</body>
</html>