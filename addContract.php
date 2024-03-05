<!DOCTYPE html>
<html lang="ar" >

<head>
    <title>اضافة عقد</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style/addContract.css" rel="stylesheet" type="text/css">
    <!-- <link href="style/all.css" rel="stylesheet" type="text/css"> -->
    <!-- Bootstrap 4 Required CDN Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body style="text-align: right;">

    <h2 class="text-center text-success" style="font-size: 24px; font-family: Alexandria; margin-top:55px;">جدول اضافة عقود المعلوماتية</h2>

    <div class="container">
        <div class="row" style=" margin-right : 385px;">
            <div class="col-sm-8 col-md-6 offset-sm-2 offset-md-3">



                <form class="register-form" style="width: 750px ;  display: inline-block;">
                    <h2 class=" text-success" style="font-size: 20px; font-family: Alexandria;"> معلومات العقد </h2>
                    <hr>
                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">رقم العقد</label>
                        <input type="text" class="form-control" placeholder="رقم العقد">
                        <!-- <span class="hint alert-success">Enter you valid email id</span> -->
                    </div>
                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">اسم العقد</label>
                        <input type="text" class="form-control" placeholder="اسم العقد">
                        <!-- <span class="hint alert-success">Password should be 8 or up chars </span> -->
                    </div>
                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">نوع العقد</label>
                        <!-- <span class="hint alert-success">Re-enter same password</span> -->
                    </div>
                    <div class="form-group form-check">
				    	<input type="checkbox" class="form-check-input">
				    	<label class="form-check-label"> تسويق سعات انترنيت وانترانيت</label>
                        <br>
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label"> تسويق الانترانت والانترنيت الفضائي</label>
                        <br>
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label"> تسويق البرمجيات والتطبيقات</label>
				  	</div>
                    <hr style="border-bottom: 2px solid rgba(0,0,0); margin:40px;">

                    <!-- group 2 -->
                    <!-- <h2 class=" text-success" style="font-size: 20px; font-family: Alexandria;"> معلومات العقد </h2> -->
                    <!-- <hr> -->
                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">القسم المعني</label>
                         <select class="select">

                            <option selected value="0">أختر القسم </option>
                            <option value="1"> ايتي</option>
                            <option value="2"> شراكات</option>


                        </select>
                    </div> 
                  
                        <br>
                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">الشعبة المعنية</label>
                        <br>
                        <select class="select">

                            <option selected value="0">أختر القسم </option>
                            <option value="1"> ايتي</option>
                            <option value="2"> شراكات</option>


                        </select>
                       
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">الشركة المنفذة </label>
                        <br>
                        <select class="select">

                            <option selected value="0">أختر القسم </option>
                            <option value="1"> ايتي</option>
                            <option value="2"> شراكات</option>


                        </select>
                       
                    </div>
                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">نسبة شركة الاتصالات </label>
                        <input type="text" class="form-control" placeholder="النسبة %">
                       
                    </div>
                    <!-- <div class="form-group form-check">
				    	<input type="checkbox" class="form-check-input">
				    	<label class="form-check-label">Remember me</label>
				  	</div> -->

                      <hr style="border-bottom: 2px solid rgba(0,0,0); margin:40px;">

                      <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">تاريخ توقيع العقد</label>
                        <input type="text" class="form-control" >
                       
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">مدة العقد </label>
                        <input type="text" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">تاريخ انتهاء العقد</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">تاريخ التجهيز/التفعيل</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">مدة التجهيز</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;"> مدة التنفيذ </label>
                        <br>
                        <select class="select">

                            <option selected value="0"> أختر المدة </option>
                            <option value="1"> ساعة</option>
                            <option value="2"> يوم</option>
                            <option value="3"> شهر</option>


                        </select>
                       
                    </div>

                    <hr style="border-bottom: 2px solid rgba(0,0,0); margin:40px;">

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">تكلفة العقد سنويا </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">نوع العملة</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">تكلفة الأجهزة</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">الية التسديد </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">تاريخ استحقاق التسديد من </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">تاريخ استحقاق التسديد الى</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">مبلغ المتبقي من التسديد الأخير </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">نوع العملة </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">عدد الفواتير المسددة </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="font-size: 16px; font-family: Alexandria;">الملاحظات </label>
                        <input type="text" class="form-control">
                    </div>




                    <center>
                        <button type="submit" class="btn btn-success" style="width:150px; height:50px;">التالي</button>
                        <center>
                </form>

                
            </div>
        </div>
     
    </div>

   
</body>

</html>