<h2>第一次購買</h2>
<img src="./icon/0413.jpg" onclick="location.href='?do=reg'">

<h2>會員登入</h2>
<!-- table.all>tr*3>td.tt.ct+td.pp>input:text -->
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc">
        </td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp">
            <input type="text" name="pw" id="pw">
        </td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
            <?php
             $a=rand(10,99);
             $b=rand(10,99);
             $_SESSION['ans']=$a+$b;
             echo $a. "+" .$b. "=" 
             ?>
            <input type="text" name="chk" id="chk">
        </td>
    </tr>
</table>

<div class="ct">
    <button>確認</button>
</div>