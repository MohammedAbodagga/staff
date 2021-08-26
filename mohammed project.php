<?php 
if(isset($_POST['submit'])){
    $result=$_POST['A'] + $_POST['B']+ $_POST['C']+$_POST['D']+$_POST['E']+ $_POST['F']+$_POST['G'];
}                       
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>بيانات الموظفين</title>
        <style>
        
            input{
                margin-bottom:5px
            }
            body{
                background-color:lightblue;
            }

            .form2{
	margin-top: -400px;
            }


            </style>
    </head>
    <body>
       <div class="form1">
    <form style="text-align:right">
        <fieldset style="width: 17%">
            <legend style="font-weight:bold">صورة الموظف </legend>
            <img style="width:160px;margin-right:20px" src="aya.jpeg" alt="">
            <br>
            <b><a style="padding-right:30px;padding-right:20px" href="#">اختر صورة الموظف</a></b>
            <b><a style="padding-right:25px" href="#">مسح</a></b>
        </fieldset>
        </form>
        <br>
    <form action="aya.php" style="text-align:right" method="post">
        <fieldset style="width: 17%;height:300px">
            <legend style="font-weight:bold">الرواتب والمستحقات</legend>
           <input type="text" name="A" style="width:50%"><b><label style="color: blue; padding-left:10px">أساسي الراتب</label></b><br>
           <input type="text" name="B" style="width:50%"><b><label style="color: blue; padding-left:57px">سكن</label></b><br>
           <input type="text" name="C" style="width:50%"><b><label style="color: blue; padding-left:60px">سفر</label></b><br>
           <input type="text" name="D" style="width:50%"><b><label style="color: blue; padding-left:58px">طعام</label></b><br>
           <input type="text" name="E" style="width:50%"><b><label style="color: blue; padding-left:60px">طبي</label></b><br>
           <input type="text" name="F" style="width:50%"><b><label style="color: blue; padding-left:25px">مكافأة ثابتة</label></b><br>
           <input type="text" name="G" style="width:50%"><b><label style="color: blue; padding-left:53px">أخرى</label></b>
          <b><p style="color:red;text-align:center">اجمالي الرواتب والمستحقات</p></b>
          <center><input type="text" name="text" value="<?php if(isset($result)){echo $result;}?>"></center>
        </fieldset>
        
       </div>
        <div class="form2">
        
            <fieldset style="width: 77%;float:right;direction:rtl">
              <legend style="font-weight:bold">بيانات الموظف الاساسية</legend>
                <br>
                <b><label style="color: blue; padding-left:10px">اسم الموظف</label></b> <input type="text" name="text" style="width:40%"><br>
                <b><label style="color: blue; padding-left:10px;padding-left:40px">الادارة</label></b>
                <select name="admin" id="الادارة" style="width:80px">
                    <option value="admin1">ادارة1</option>
                    <option value="admin2">ادارة2</option>
                    <option value="admin3">ادارة3</option>
                </select>
                <b><label style="color: blue; padding-left:10px;padding-left:40px;margin-right:20px">القسم</label></b>
                <select name="section" id="القسم" style="width:80px">
                    <option value="section1">قسم1</option>
                    <option value="section2">قسم2</option>
                    <option value="section3">قسم3</option>
                </select>
               <br><br>
               <b><label style="color: blue; padding-left:10px;padding-left:40px">الحالة</label></b>
               <select name="status" id="الحالة" style="width:80px">
                    <option value="available">نشط</option>
                    <option value="offline">غير متصل</option>
                </select>
                <b><label style="color: blue; padding-left:10px;padding-left:40px;margin-right:20px">الوظيفة</label></b>
                <select name="job" id="الوظيفة" style="width:80px">
                    <option value="Engineer">مهندس </option>
                    <option value="Doctor">دكتور</option>
                    <option value="Accountant">محاسب</option>
                </select>
                <br><br>
                <b><label style="color: blue; padding-left:10px;padding-left:40px">رقم التأمينات</label></b>
                <input type="text" name="text" style="width:10%;">
                <b><label style="color: blue; padding-left:10px;padding-left:40px">تاريخ الميلاد</label></b>
                <input type="date" name="date" style="width:10%">
                <br><br>
                <b><label style="color: blue; padding-left:10px;padding-left:40px">الحالة الاجتماعية</label></b>
                <input type="text" name="text" style="width:10%">
                <b><label style="color: blue; padding-left:10px;padding-left:40px">تاريخ التعيين</label></b>
                <input type="date" name="date" style="width:10%">
                <br><br>
                <b><label style="color: blue; padding-left:10px;padding-left:40px">رقم الهاتف</label></b>
                <input type="text" name="text" style="width:10%">
                <b><label style="color: blue; padding-left:10px;padding-left:40px">الجنسية</label></b>
                <select name="الجنسية" id="الجنسية" style="width:80px">
                    <option value="nat1">مصري</option>
                    <option value="nat2">فلسطيني</option>
                    <option value="nat3">عراقي</option>
                </select>
                <br><br>
                <b><label style="color: blue; padding-left:10px;padding-left:40px">البريد الالكتروني</label></b>
                <input type="text" name="text" style="width:10%">
                <b><label style="color: blue; padding-left:10px;padding-left:40px">النوع</label></b>
                <input type="radio" id="male" name="gender" value="male">
                <b><label style="color: blue; padding-left:10px;padding-left:40px" for='male'>ذكر</label></b>
                <input type="radio" id="female" name="gender" value="female">
                <b><label style="color: blue; padding-left:10px;padding-left:40px" for='female'>انثى</label></b>
                <br>
                <b><label style="color: blue; padding-left:10px;padding-left:40px">رقم الموبايل</label></b>
                <input type="text" name="text" style="width:10%">
                <br><br>
                <b><label style="color: blue; padding-left:10px;padding-left:40px">العنوان</label></b>
                <input type="text" name="text" style="width:40%">
                <br><br>
                <b><label style="color: blue; padding-left:10px;padding-left:35px">ملاحظات</label></b>
                <input type="text" name="text" style="width:40%">
                <br><br>
                <button type="submit" name="submit" style="display:block; background-color:red;color:#fff;padding:10px;font-weight:bold;width:100px;margin:auto;border-radius:80px;margin-bottom:20px">Calculate</button>
            </fieldset>
    </form>
        </div>


    </body>
</html>






    

