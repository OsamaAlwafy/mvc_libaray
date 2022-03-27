<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Category</title>
</head>
<body>
    <div class="grid-container">

      <div id="login-parent">
        <div class="container-login">
            <button id="close-login">X <i class="fa  fa-window-close" style="font-size:20px; color: red;"></i></button>
            <h2> تسجيل الدخول</h2>
            <hr>
            <div class="field-login">
                <input type="text" placeholder="البريد الالكتروني او رقم الهاتف">
                <div class="password-container">
                <input type="password" placeholder="كلمة السر " >
                <span class="forget-pass">نسيت؟</span>
                </div>
                <button id="login">تسجيل الدخول</button>

            </div>
            <div class="no-account">
              <p>ليس لديك حساب ؟</p>
              <button id="create-account"> انشاء حساب جديد</button>
            </div>
        </div>
    </div> <!--end login -->


      <header class="item-grid header">
        <div id="model-sign-up" >
       
           <div id="modal-body-sign-up">
            <button id="close-sing-up"> <i class="fa  fa-window-close" style="font-size:20px; color: red;"></i></button>
             <h2>انشاء حساب</h2> 
            <form>
                  
              <input id="input-number" type="text" placeholder="رقم الجوال">
              <select >
                <option><span> </span> <span>+970</span></option>
                <option><span> </span> <span>+970</span></option>
                <option><span> </span> <span>+970</span></option>

              </select>

                
                
                 <br> 
                 <label>سيتم ارسال رمز التحقق عن طريق رسالة نصية</label><br>
                 <input  type="submit" placeholder="" value="ارسال رمز التحقق">
                 <br>
                 
                 <input type="text" placeholder="الاسم الاول">
                 <br>
                 
                 <input type="text" placeholder="اسم العائلة">
                 <br>

                 <input type="text" placeholder="البريد الالكتروني">
                 <br>

                 <input type="text" placeholder="تاكيد البريد الالكتروني">
                 <br>

                 <input type="text" placeholder="كلمة السر">
                 
                 <div class="container-checkbox">
                 <input  class="checkbox-sing-up" type="checkbox" checked >
                 <label>اوافق على الشروط والاحكام </label> 
                 
                 <br>
                 <input class="checkbox-sing-up" type="checkbox" checked >
                 <label>التسجيل للانضمام للنشره البريدية</label> 
                 </div>
                 
                 <input type="submit" >

               

             </form>
             <div class="have-account">
              <p> لديك حساب ؟
              <span id="go-account"> تسجيل الدخول ></span>
            </div>


           </div>

        </div>

        <div class="modal" id="modal"> 
          <div class="modal-backdrop"></div> 
          <div class="modal-body"> 
           <button id="close"> <i class="fa  fa-window-close" style="font-size:20px; color: red;"></i></button>
          
           <!--modal sing-up-->
            

          <nav>
             <ul>

               <li id="sing-up"> <img class="icon-user" src="images/svgexport-1.svg">
                <span> ادخل لحسابك او سجل الان</span>
               </li>
               <li> <img src="images/svgexport-2.svg">
                <span>الرائسية</span>
                 </li>
               <li><img src="images/svgexport-3.svg">
                <span> من نحن</span>
                 </li>
               <li><img src="images/svgexport-4.svg">
                <span>اتصل بنا</span>
                 </li>
               <li><img src="images/svgexport-5.svg">
                <span></span>
                 المساعده</li>
               <li><img src="images/svgexport-3.svg">
                <span>  سياسة الخصوصية</span>
                 </li>
               <li> <img src="images/svgexport-12.svg">
                <span>اليمن</span>
                   
                 <span>YEM</span> </li>
               <li class="li-langauge">
                
                 <div class="langauge">
                  <span>English</span>
                    <img src="images/svgexport-14.svg">
                  </div> 
              </li>
             </ul>
          </nav>
          
         
         
        </div>
       </div>

       <div class="container-flex-header">  
        <div class="container-icon-menu">
         <button id="open"> <i class="fa  fa-bars" style="font-size:20px; color: red;"></i></button>
        </div>
         
        <div class="container-logo">
          <img src="images/logo.jpg">
 
        </div>
        <div class="search">
             <input  id="search-field" type="text" placeholder="search">
             <span><a href="/checkout"><img src="images/svgexport-50.svg"> </a></span>
             <span id="counter" style="display: none;"></span>
             
        </div>
         
       </div>
       
      </header>
        
          
         
        
      <div class="item-grid slidar">
           
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="images/MB-ksa-1001-b2s-2022-banners-ar1.webp" style="width:100%">
              <div class="text">Caption Text</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="images/MB-ksa-2212-formula1-cb-ar.webp" style="width:100%">
              <div class="text">Caption Two</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="images/MB-ksa-1001-b2s-2022-banners-ar1.webp" style="width:100%">
              <div class="text">Caption Three</div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            

    </div>
        
        <div class="container-books item-grid">
           
            <div class="books-electrony">
                <div class="path">
                    <span> الرائسية</span>
                    <img src="images/svgexport-37.svg" alt="">
                    <span> الكتب العربية</span>
                    <img src="images/svgexport-37.svg" alt="">
                    <span> كتب الالكترونية</span>
                   
                 
                   
                </div>
                <div class="order-book">
                    <p class="book-electrony">كتب الكترونية</p>
                    <div class="search-by">
                        <span>الترتيب حسب </span>
                       <select name="order-by" id="oreder-by-book">
                            <option>الاسم</option>
                            <option>السعر </option>
                            <option>الاسم</option>
                            <option>السعر </option>

                            
                       </select>

                    </div>

                </div>

            </div>
           <div class="container-book-all">
            <div class="clear-output">
                <ul class="fulter">
                    <h2>تصفية النتائج</h2>
                    <li>علامة تجارية </li>
                    <li>السعر 
                      <div class="container-filter-price">
                       <div class="price-range"> 
                         
                        <div id="slider-right" class="silder-right-box"></div>
                        <div id="slider-left" class="silder-left-box"></div>
                      
                      </div>
                        <div class="range-number">
                          
                          <span class="min-price">0 رس</span>
                          <span class="max-price">150 رس</span>
                          <div class="show-price-slider"><span id="show-price">0</span></div>
                        </div>

                      </div>
                    </li>
                      
                   
                    <li>صيغة الكتاب </li>

                </ul>
            </div>
            <div id="books" class="books">
                <div class="book-offer" id="book1">
              <img src="images/book-offer2.jpg">
              <p>كتاب الكتروني</p>
              <p class="title"> كلي ونامي وابهري الاخرين</p>
              <span class="price-book">20.5</span><span>رس</span>
              <p>صيغ اخرى 
                  <span>كتاب مطبوع</span>
              </p>
              <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
              <div class="icon-under-book">
                <img src="images/svgexport-56.svg">
                <img class="add-to-basket" src="images/svgexport-21.svg">
                <img src="images/svgexport-2.svg">

              </div>

           </div>
              

           <div class="book-offer" id="book2">
            <img src="images/because.jpg">
            <p>كتاب الكتروني</p>
            <p class="title"> لانك اللة </p>
            <span class="price-book">30.5</span><span>رس</span>
            <p>صيغ اخرى 
                <span>كتاب مطبوع</span>
            </p>
            <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-56.svg">
              <img class="add-to-basket" src="images/svgexport-21.svg">
              <img src="images/svgexport-2.svg">

            </div>

         </div>

         <div class="book-offer" id="book3">
            <img src="images/book2.jpg">
            <p>كتاب الكتروني</p>
            <p class="title"> كجثة رواية بولسية</p>
            <span class="price-book">10</span><span>رس</span>
            <p>صيغ اخرى 
                <span>كتاب مطبوع</span>
            </p>
            <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-56.svg">
              <img class="add-to-basket" src="images/svgexport-21.svg">
              <img src="images/svgexport-2.svg">

            </div>

         </div>

         <div class="book-offer" id="book4">
            <img src="images/book5.jpg">
            <p>كتاب الكتروني</p>
            <p class="title"> رواية اشواق</p>
            <span class="price-book">50.5</span><span>رس</span>
            <p>صيغ اخرى 
                <span>كتاب مطبوع</span>
            </p>
            <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-56.svg">
              <img class="add-to-basket" src="images/svgexport-21.svg">
              <img src="images/svgexport-2.svg">

            </div>

         </div>


         <div class="book-offer" id="book5">
            <img src="images/book6.jpg">
            <p>كتاب الكتروني</p>
            <p class="title"> المعيلة </p>
            <span class="price-book">70.5</span><span>رس</span>
            <p>صيغ اخرى 
                <span>كتاب مطبوع</span>
            </p>
            <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-56.svg">
              <img class="add-to-basket" src="images/svgexport-21.svg">
              <img src="images/svgexport-2.svg">

            </div>

         </div>


        

         <div class="book-offer" id="book6">
            <img src="images/book7.jpg">
            <p>كتاب الكتروني</p>
            <p class="title"> رواية كانت لك</p>
            <span class="price-book">5.5</span><span>رس</span>
            <p>صيغ اخرى 
                <span>كتاب مطبوع</span>
            </p>
            <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-56.svg">
              <img class="add-to-basket" src="images/svgexport-21.svg">
              <img src="images/svgexport-2.svg">

            </div>

         </div>


         <div class="book-offer" id="">
            <img src="images/book8.jpg">
            <p>كتاب الكتروني</p>
            <p class="title"> الفتوحات العربية في روايات المغلوين</p>
            <span class="price-book">120.5</span><span>رس</span>
            <p>صيغ اخرى 
                <span>كتاب مطبوع</span>
            </p>
            <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-56.svg">
              <img class="add-to-basket" src="images/svgexport-21.svg">
              <img src="images/svgexport-2.svg">

            </div>

         </div>

       


            </div>
            
            <div class="result" style="display:none" >
                <p>نتائج البحث</p>
                <div id="empty-search" style="display: none;">
                  
                  <div class="title"> 
                    <h3>نتائج البحث</h3>  
                  </div>
                  <div class="body">
                     لا توجد بيانات مطابقة
                  </div>

                </div>
                    
                </div>
                  
           </div>
        </div>

       
        </div>
 
      
    <script src="js/category.js"></script>
       <script src="js/index.js">

    </script>    
        


</body>
</html>