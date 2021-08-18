<!-- header start -->
<?php
$title = "calculator";
include 'includes/title.php';
include 'includes/header.php';
?>
<!-- header end -->

<h1 style="text-align:center; margin-top:40px;">Javascript calculator</h1>
<div class="main">
    <div class="calTitle">
        <h1>Calculator</h1>
    </div>

    <div class="calculate">
        <div class="calHead">
            <input type="text" id="result" maxlength="10">
        </div>
        <div class="calBody">
            <div>
                <input type="button" class="btn btnC" value="C" onclick="clearResult()">
                <input type="button" class="btn" value="+/-" onclick="plusMinus('-')">
                <input type="button" class="btn" value="%">
                <input type="button" class="btn btnColor1" value="/" onclick="insertNum('/')">
            </div>
            <div>
                <input type="button" class="btn" value="7" onclick="insertNum(7)">
                <input type="button" class="btn" value="8" onclick="insertNum(8)">
                <input type="button" class="btn" value="9" onclick="insertNum(9)">
                <input type="button" class="btn btnColor2" value="*" onclick="insertNum('*')">
            </div>
            <div>
                <input type="button" class="btn" value="4" onclick="insertNum(4)">
                <input type="button" class="btn" value="5*" onclick="insertNum(5)">
                <input type="button" class="btn" value="6" onclick="insertNum(6)">
                <input type="button" class="btn btnColor3" value="-" onclick="insertNum('-')">
            </div>
            <div>
                <input type="button" class="btn" value="1" onclick="insertNum(1)">
                <input type="button" class="btn" value="2" onclick="insertNum(2)">
                <input type="button" class="btn" value="3" onclick="insertNum(3)">
                <input type="button" class="btn btnColor4" value="+" onclick="insertNum('+')">
            </div>
            <div>
                <input type="button" class="btn" value="0" onclick="insertNum(0)">
                <input type="button" class="btn" value="." onclick="insertNum('.')">
                <input type="button" class="btn" value="DEL" onclick="deleteNumbers()">
                <input type="button" class="btn btnColor5" value="=" onclick="equal()">
            </div>
        </div>
    </div>
</div>

<!-- footer start -->
<?php include 'includes/footer.php' ?>
<!-- footer end -->
