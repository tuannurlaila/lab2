<!DOCTYPE html>
<html>

<body>

    <h1>แบบสอบถาม</h1>
    <form action="show.php" method="get" style="margin-left: 80px;">
    ชื่อ-สกุล :
    <input type="text" name="name"><br>
       
        อายุ :
        <input type="number" name="num" style="width: 40px;"><br>
        
        สถานะ :
        <select name="status">
            <option value="single">โสด</option>
            <option value="marry">สมรส</option>
        </select><br>

        เพศ :
        <select name="gender">
            <option value="male">ชาย</option>
            <option value="female">หญิง</option>
            <option value="female">ไม่ระบุเพศ</option>
        </select><br>

        <input type="submit" value="ส่ง">
    </form>
</body>
</html>