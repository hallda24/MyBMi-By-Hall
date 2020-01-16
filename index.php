<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBMi</title>
    <link rel="stylesheet" href="style/bulma.css">
    <link rel="stylesheet" href="style/style.css">
      
</head>
<body>
    
    <div class="container" style="text-align: center; margin-top: 50px; font-size: 60px">
        <img src="icon/food.png" style="width: 10%; height: auto; padding-bottom: 10px">
        <div class="">คำนวณหาค่าดัชนีมวลกาย (BMI)</div>
    </div>
    <br>
    <div class="container" style="padding: 0 20% 0 20%; font-size: 20px; text-indent: 20px;">
    การหาค่าดัชนีมวลกาย (Body Mass Index : BMI) คือเป็นมาตรการที่ใช้ประเมินภาวะอ้วนและผอมในผู้ใหญ่ ตั้งแต่อายุ 20 ปีขึ้นไป สามารถทำได้โดยการชั่งน้ำหนักตัวเป็นกิโลกรัม และวัดส่วนสูงเป็นเซนติเมตร แล้วนำมาหาดัชมีมวลกาย โดยใช้โปรแกรมวัดค่าความอ้วนข้างต้น
    </div>
    <div class="container" style="margin-top: 90px">
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-iamge">
                        <img src="" alt="">
                    </div>
                    <div class="card-content" style="text-align: center; font-size: 20px">
                        
                        <form>
                        ส่วนสูง ( cm. )
                        <br>
                        <br>
                        <input type="number" class="input is-primary" style="max-width: 400px" name="height" id="height" maxlength="3" min="0" max="300" required>
                        <br>
                        <br>
                        น้ำหนัก ( kg. )
                        <br>
                        <br>
                        <input type="number" class="input is-primary" style="max-width: 400px" name="weight" id="weight" maxlength="3" min="0" max="300" required>
                        <br>
                        <br>
                        <input type="button" class="button is-primary" value="คำนวณ" id="button" onclick="process()">
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <table class="table is-fullwidth">
                    <tr class="is-selected">
                        <td>BMI</td>
                        <td>อยู่ในเกณท์</td>
                        <td>ภาวะเสี่ยงต่อโรค</td>
                    </tr>
                    <tr>
                        <td>น้อยกว่า 18.50</td>
                        <td>น้ำหนักน้อย / ผอม</td>
                        <td>มากกว่าคนปกติ</td>
                    </tr>
                    <tr>
                        <td>ระหว่าง 18.50 - 22.90</td>
                        <td style="color: #5DE400;">ปกติ (สุขภาพดี)</td>
                        <td>เท่าคนปกติ</td>
                    </tr>
                    <tr>
                        <td>ระหว่าง 23 - 24.90</td>
                        <td>ท้วม / โรคอ้วนระดับ 1</td>
                        <td>อันตรายระดับ 1</td>
                    </tr>
                    <tr>
                        <td>ระหว่าง 25 - 29.90</td>
                        <td>อ้วน / โรคอ้วนระดับ 2</td>
                        <td>อันตรายระดับ 2</td>
                    </tr>
                    <tr>
                        <td>มากกว่า 30</td>
                        <td>อ้วนมาก / โรคอ้วนระดับ 3</td>
                        <td>อันตรายระดับ 3</td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="container" style="text-align: center; font-size: 30px;">
            ค่า BMI ของคุณคือ
        </div>
        
        <div class="columns is-mobile is-centered" style="text-align: center; margin: 50px 0 50px 0;">
            <div class="column is-5 " style="background-color: #00d1b2; font-size: 40px; color:white;">
                
                <div id="showmybmi">0</div>    
            </div>
        </div>
        <div style="padding: 0 20% 0 20%; font-size: 25px; text-indent: 20px; margin-bottom: 2rem">
            <div id="suggestion"></div>  
    </div>

    </div>

    <footer class="footer">
        <div class="content has-text-centered">
            <p style="font-size: 20px">
                KissaKorn Thongluang
            </p>
        </div>
    </footer>








    <script src="js/jquery.js"></script>
    <script src="js/core.js"></script>
</body>
</html>