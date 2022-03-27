
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  
    
    
    
    
    


</head>
  
<body onload="myFunction()">
    <div class="grid-container">

      <div id="login-parent">
        <div class="container-login">
            <button id="close-login"> <i class="fa  fa-window-close" style="font-size:20px; color: red;"></i></button>
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
            <button id="close-sing-up"><i class="fa  fa-window-close" style="font-size:20px; color: red;"></i></button>
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
                   <div id="en" >
                    <img src="images/svgexport-14.svg" onclick="langfun('en');">
                    <span >English</span>
                   </div>
                  <div id="ar" style="display:none;">
                  <span > عربي</span>
                  <img onclick="langfun('ar');" src="images/svgexport-14.svg">
                  </div>
                    
                  </div> 
              </li>
             </ul>
          </nav>
          
         
         
        </div>
       </div>
      <div class="container-flex-header">  
       <div class="container-icon-menu">
        <button id="open"> <i class="fa  fa-bars" style="font-size: 25px;color: #423d3d;"></i></button>
       </div>
        
       <div class="container-logo">
         <img src="images/logo.jpg">

       </div>
       <div class="search">
            <input type="text" placeholder="search">
            <span><img src="images/svgexport-50.svg"></span>
            
       </div>
        
      </div>
        
        <!--
          <nav>
              nav
          </nav>
          <div>sala</div>
          <div>search</div>

          <div>logo</div>
          -->

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
      <div class="item-grid catigroy">
        
          <p>  تصفح حسب القسم</p>
           <div class="container-catigroy-box">
              <div class="catigroy-box">
                <a href="/category"> <img src="images/svgexport-46.svg"></a>
                <p>دين</p>
              </div>

              <div class="catigroy-box">
                 <a href="/category"> <img src="images/svgexport-42.svg"></a>
                  <p>تاريخ</p>
              </div>

              <div class="catigroy-box">
                <a href="/category"> <img src="images/svgexport-40.svg"></a>
                <p>رويات</p>
            </div>

            <div class="catigroy-box">
              <a href="/category"><img src="images/svgexport-43.svg"></a>
              <p>سياسه</p>
          </div>

          <div class="catigroy-box">
            <a href="/category"><img src="images/svgexport-45.svg"></a>
            <p>اقتصاد</p>
        </div>

        <div class="catigroy-box">
          <a href="/category"><img src="images/svgexport-47.svg"></a>
          <p>طبخ</p>
      </div>

      <div class="catigroy-box">
        <a href="/category"><img src="images/svgexport-48.svg"></a>
        <p>تربية</p>
    </div>
   


            </div>
           
      </div>
    
      <div class="item-grid ads">
        
        <div class="adver">
            <img src="images/adver5.webp" >
          </div>

          <div class="adver">
            <img src="images/adver4.webp">
          </div>

          <div class="adver">
            <img src="images/adver3.webp">
          </div>

          <div class="adver">
            <img src="images/adver2.webp">
          </div>

          <div class="adver">
            <img src="images/adver1.webp">
          </div>

          <div class="adver">
            <img src="images/adver5.webp">
          </div>
        
      </div>
    
  
      <div class="item-grid current-display">
        <p> العروض الحالية  </p>
         <div class="container-book-offer">
            <div class="book-offer">
               <a href="/details"> <img src="images/book-offer2.jpg"></a>
               <p> <img src="images/svgexport-56.svg"> 
                <span class="type-book"> 
                   كتاب الكتروني
                   </span>
                </p>
               <p class="title"> عالم صوفي</p>
               <span class="price"  >17.55 رس</span>
               <p> العرض سينتهي بعد :</p>
               <p class="offer" data-offer="jan 20, 2022 00:00:00"></p>
               <div class="icon-under-book">
                <img src="images/svgexport-2.svg">
                <img src="images/svgexport-21.svg">
                <img src="images/svgexport-56.svg">

               </div>

            </div>


            <div class="book-offer">
              <a href="/details">
              <img src="images/book2.jpg">
              </a>
              <p><img src="images/svgexport-56.svg"> 
                <span class="type-book"> 
                  كتاب الكتروني
                  </span>
              </p>
              <p class="title"> كجثة في رواية بولسية</p>
              <span class="price">15.5 رس</span>
              <p> العرض سينتهي بعد :</p>
              <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
              <div class="icon-under-book">
                <img src="images/svgexport-2.svg">
                <img src="images/svgexport-21.svg">
                <img src="images/svgexport-56.svg">

              </div>

           </div>

           <div class="book-offer">
            <a href="/details">
            <img src="images/book5.jpg">
            </a>
            <p><img src="images/svgexport-56.svg"> 
              <span class="type-book"> 
                كتاب الكتروني
                </span>
            </p>
            <p class="title"> روايات اشواق</p>
            <span class="price">17.55 رس</span>
            <p> العرض سينتهي بعد :</p>
            <p class="offer" data-offer="jan 24, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-2.svg">
          <img src="images/svgexport-21.svg">
          <img src="images/svgexport-56.svg">

            </div>

         </div>

         <div class="book-offer">
          <a href="details.html">  
          <img src="images/book6.jpg">
          </a>
          <p><img src="images/svgexport-56.svg"> 
            <span class="type-book"> 
              كتاب الكتروني
              </span>
          </p>
          <p class="title"> المعيلة</p>
          <span class="price">17.55 رس</span>
          <p> العرض سينتهي بعد :</p>
          <p class="offer" data-offer="jan 28, 2022 00:00:00"></p>
          <div class="icon-under-book">
            <img src="images/svgexport-2.svg">
            <img src="images/svgexport-21.svg">
            <img src="images/svgexport-56.svg">

          </div>

       </div>


       <div class="book-offer">
         <a href="details.html">
        <img src="images/book7.jpg">
        </a>
        <p> <img src="images/svgexport-56.svg"> 
          <span class="type-book"> 
            كتاب الكتروني
            </span>
         </p>
        <p class="title"> رواية كانت لك</p>
        <span class="price">17.55 رس</span>
        <p> العرض سينتهي بعد :</p>
        <p class="offer" data-offer="jan 26, 2022 00:00:00"></p>
        <div class="icon-under-book">
         
          
          <img src="images/svgexport-2.svg">
          <img src="images/svgexport-21.svg">
          <img src="images/svgexport-56.svg">

        </div>

     </div>





         </div>
        
      </div>
      
    
      <div class="item-grid book-d">
        <p> العروض الحالية  </p>
        <div class="container-book-offer">
           <div class="book-offer">
              <a href="details.html"> <img src="images/book-offer2.jpg"></a>
              <p> <img src="images/svgexport-56.svg"> 
               <span class="type-book"> 
                  كتاب الكتروني
                  </span>
               </p>
              <p class="title"> عالم صوفي</p>
              <span class="price"  >17.55 رس</span>
              <p> العرض سينتهي بعد :</p>
              <p class="offer" data-offer="jan 20, 2022 00:00:00"></p>
              <div class="icon-under-book">
               <img src="images/svgexport-2.svg">
               <img src="images/svgexport-21.svg">
               <img src="images/svgexport-56.svg">

              </div>

           </div>


           <div class="book-offer">
             <a href="details.html">
             <img src="images/book2.jpg">
             </a>
             <p><img src="images/svgexport-56.svg"> 
               <span class="type-book"> 
                 كتاب الكتروني
                 </span>
             </p>
             <p class="title"> كجثة في رواية بولسية</p>
             <span class="price">15.5 رس</span>
             <p> العرض سينتهي بعد :</p>
             <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
             <div class="icon-under-book">
               <img src="images/svgexport-2.svg">
               <img src="images/svgexport-21.svg">
               <img src="images/svgexport-56.svg">

             </div>

          </div>

          <div class="book-offer">
           <a href="details.html">
           <img src="images/book5.jpg">
           </a>
           <p><img src="images/svgexport-56.svg"> 
             <span class="type-book"> 
               كتاب الكتروني
               </span>
           </p>
           <p class="title"> روايات اشواق</p>
           <span class="price">17.55 رس</span>
           <p> العرض سينتهي بعد :</p>
           <p class="offer" data-offer="jan 24, 2022 00:00:00"></p>
           <div class="icon-under-book">
             <img src="images/svgexport-2.svg">
         <img src="images/svgexport-21.svg">
         <img src="images/svgexport-56.svg">

           </div>

        </div>

        <div class="book-offer">
         <a href="details.html">  
         <img src="images/book6.jpg">
         </a>
         <p><img src="images/svgexport-56.svg"> 
           <span class="type-book"> 
             كتاب الكتروني
             </span>
         </p>
         <p class="title"> المعيلة</p>
         <span class="price">17.55 رس</span>
         <p> العرض سينتهي بعد :</p>
         <p class="offer" data-offer="jan 28, 2022 00:00:00"></p>
         <div class="icon-under-book">
           <img src="images/svgexport-2.svg">
           <img src="images/svgexport-21.svg">
           <img src="images/svgexport-56.svg">

         </div>

      </div>


      <div class="book-offer">
        <a href="details.html">
       <img src="images/book7.jpg">
       </a>
       <p> <img src="images/svgexport-56.svg"> 
         <span class="type-book"> 
           كتاب الكتروني
           </span>
        </p>
       <p class="title"> رواية كانت لك</p>
       <span class="price">17.55 رس</span>
       <p> العرض سينتهي بعد :</p>
       <p class="offer" data-offer="jan 26, 2022 00:00:00"></p>
       <div class="icon-under-book">
        
         
         <img src="images/svgexport-2.svg">
         <img src="images/svgexport-21.svg">
         <img src="images/svgexport-56.svg">

       </div>

    </div>





        </div>
      </div>

      <div class="item-grid book-tarih">
        <p> العروض الحالية  </p>
        <div class="container-book-offer">
           <div class="book-offer">
              <a href="details.html"> <img src="images/book-offer2.jpg"></a>
              <p> <img src="images/svgexport-56.svg"> 
               <span class="type-book"> 
                  كتاب الكتروني
                  </span>
               </p>
              <p class="title"> عالم صوفي</p>
              <span class="price"  >17.55 رس</span>
              <p> العرض سينتهي بعد :</p>
              <p class="offer" data-offer="jan 20, 2022 00:00:00"></p>
              <div class="icon-under-book">
               <img src="images/svgexport-2.svg">
               <img src="images/svgexport-21.svg">
               <img src="images/svgexport-56.svg">

              </div>

           </div>


           <div class="book-offer">
             <a href="details.html">
             <img src="images/book2.jpg">
             </a>
             <p><img src="images/svgexport-56.svg"> 
               <span class="type-book"> 
                 كتاب الكتروني
                 </span>
             </p>
             <p class="title"> كجثة في رواية بولسية</p>
             <span class="price">15.5 رس</span>
             <p> العرض سينتهي بعد :</p>
             <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
             <div class="icon-under-book">
               <img src="images/svgexport-2.svg">
               <img src="images/svgexport-21.svg">
               <img src="images/svgexport-56.svg">

             </div>

          </div>

          <div class="book-offer">
           <a href="details.html">
           <img src="images/book5.jpg">
           </a>
           <p><img src="images/svgexport-56.svg"> 
             <span class="type-book"> 
               كتاب الكتروني
               </span>
           </p>
           <p class="title"> روايات اشواق</p>
           <span class="price">17.55 رس</span>
           <p> العرض سينتهي بعد :</p>
           <p class="offer" data-offer="jan 24, 2022 00:00:00"></p>
           <div class="icon-under-book">
             <img src="images/svgexport-2.svg">
         <img src="images/svgexport-21.svg">
         <img src="images/svgexport-56.svg">

           </div>

        </div>

        <div class="book-offer">
         <a href="details.html">  
         <img src="images/book6.jpg">
         </a>
         <p><img src="images/svgexport-56.svg"> 
           <span class="type-book"> 
             كتاب الكتروني
             </span>
         </p>
         <p class="title"> المعيلة</p>
         <span class="price">17.55 رس</span>
         <p> العرض سينتهي بعد :</p>
         <p class="offer" data-offer="jan 28, 2022 00:00:00"></p>
         <div class="icon-under-book">
           <img src="images/svgexport-2.svg">
           <img src="images/svgexport-21.svg">
           <img src="images/svgexport-56.svg">

         </div>

      </div>


      <div class="book-offer">
        <a href="details.html">
       <img src="images/book7.jpg">
       </a>
       <p> <img src="images/svgexport-56.svg"> 
         <span class="type-book"> 
           كتاب الكتروني
           </span>
        </p>
       <p class="title"> رواية كانت لك</p>
       <span class="price">17.55 رس</span>
       <p> العرض سينتهي بعد :</p>
       <p class="offer" data-offer="jan 26, 2022 00:00:00"></p>
       <div class="icon-under-book">
        
         
         <img src="images/svgexport-2.svg">
         <img src="images/svgexport-21.svg">
         <img src="images/svgexport-56.svg">

       </div>

    </div>





        </div>
      </div>
      
      <div class="item-grid book-policy">
        <p> العروض الحالية  </p>
         <div class="container-book-offer">
            <div class="book-offer">
               <a href="details.html"> <img src="images/book-offer2.jpg"></a>
               <p> <img src="images/svgexport-56.svg"> 
                <span class="type-book"> 
                   كتاب الكتروني
                   </span>
                </p>
               <p class="title"> عالم صوفي</p>
               <span class="price"  >17.55 رس</span>
               <p> العرض سينتهي بعد :</p>
               <p class="offer" data-offer="jan 20, 2022 00:00:00"></p>
               <div class="icon-under-book">
                <img src="images/svgexport-2.svg">
                <img src="images/svgexport-21.svg">
                <img src="images/svgexport-56.svg">

               </div>

            </div>


            <div class="book-offer">
              <a href="details.html">
              <img src="images/book2.jpg">
              </a>
              <p><img src="images/svgexport-56.svg"> 
                <span class="type-book"> 
                  كتاب الكتروني
                  </span>
              </p>
              <p class="title"> كجثة في رواية بولسية</p>
              <span class="price">15.5 رس</span>
              <p> العرض سينتهي بعد :</p>
              <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
              <div class="icon-under-book">
                <img src="images/svgexport-2.svg">
                <img src="images/svgexport-21.svg">
                <img src="images/svgexport-56.svg">

              </div>

           </div>

           <div class="book-offer">
            <a href="details.html">
            <img src="images/book5.jpg">
            </a>
            <p><img src="images/svgexport-56.svg"> 
              <span class="type-book"> 
                كتاب الكتروني
                </span>
            </p>
            <p class="title"> روايات اشواق</p>
            <span class="price">17.55 رس</span>
            <p> العرض سينتهي بعد :</p>
            <p class="offer" data-offer="jan 24, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-2.svg">
          <img src="images/svgexport-21.svg">
          <img src="images/svgexport-56.svg">

            </div>

         </div>

         <div class="book-offer">
          <a href="details.html">  
          <img src="images/book6.jpg">
          </a>
          <p><img src="images/svgexport-56.svg"> 
            <span class="type-book"> 
              كتاب الكتروني
              </span>
          </p>
          <p class="title"> المعيلة</p>
          <span class="price">17.55 رس</span>
          <p> العرض سينتهي بعد :</p>
          <p class="offer" data-offer="jan 28, 2022 00:00:00"></p>
          <div class="icon-under-book">
            <img src="images/svgexport-2.svg">
            <img src="images/svgexport-21.svg">
            <img src="images/svgexport-56.svg">

          </div>

       </div>


       <div class="book-offer">
         <a href="details.html">
        <img src="images/book7.jpg">
        </a>
        <p> <img src="images/svgexport-56.svg"> 
          <span class="type-book"> 
            كتاب الكتروني
            </span>
         </p>
        <p class="title"> رواية كانت لك</p>
        <span class="price">17.55 رس</span>
        <p> العرض سينتهي بعد :</p>
        <p class="offer" data-offer="jan 26, 2022 00:00:00"></p>
        <div class="icon-under-book">
         
          
          <img src="images/svgexport-2.svg">
          <img src="images/svgexport-21.svg">
          <img src="images/svgexport-56.svg">

        </div>

     </div>





         </div>
      </div>

      <div class="item-grid book-ecomerce">
        <p> العروض الحالية  </p>
         <div class="container-book-offer">
            <div class="book-offer">
               <a href="details.html"> <img src="images/book-offer2.jpg"></a>
               <p> <img src="images/svgexport-56.svg"> 
                <span class="type-book"> 
                   كتاب الكتروني
                   </span>
                </p>
               <p class="title"> عالم صوفي</p>
               <span class="price"  >17.55 رس</span>
               <p> العرض سينتهي بعد :</p>
               <p class="offer" data-offer="jan 20, 2022 00:00:00"></p>
               <div class="icon-under-book">
                <img src="images/svgexport-2.svg">
                <img src="images/svgexport-21.svg">
                <img src="images/svgexport-56.svg">

               </div>

            </div>


            <div class="book-offer">
              <a href="details.html">
              <img src="images/book2.jpg">
              </a>
              <p><img src="images/svgexport-56.svg"> 
                <span class="type-book"> 
                  كتاب الكتروني
                  </span>
              </p>
              <p class="title"> كجثة في رواية بولسية</p>
              <span class="price">15.5 رس</span>
              <p> العرض سينتهي بعد :</p>
              <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
              <div class="icon-under-book">
                <img src="images/svgexport-2.svg">
                <img src="images/svgexport-21.svg">
                <img src="images/svgexport-56.svg">

              </div>

           </div>

           <div class="book-offer">
            <a href="details.html">
            <img src="images/book5.jpg">
            </a>
            <p><img src="images/svgexport-56.svg"> 
              <span class="type-book"> 
                كتاب الكتروني
                </span>
            </p>
            <p class="title"> روايات اشواق</p>
            <span class="price">17.55 رس</span>
            <p> العرض سينتهي بعد :</p>
            <p class="offer" data-offer="jan 24, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-2.svg">
          <img src="images/svgexport-21.svg">
          <img src="images/svgexport-56.svg">

            </div>

         </div>

         <div class="book-offer">
          <a href="details.html">  
          <img src="images/book6.jpg">
          </a>
          <p><img src="images/svgexport-56.svg"> 
            <span class="type-book"> 
              كتاب الكتروني
              </span>
          </p>
          <p class="title"> المعيلة</p>
          <span class="price">17.55 رس</span>
          <p> العرض سينتهي بعد :</p>
          <p class="offer" data-offer="jan 28, 2022 00:00:00"></p>
          <div class="icon-under-book">
            <img src="images/svgexport-2.svg">
            <img src="images/svgexport-21.svg">
            <img src="images/svgexport-56.svg">

          </div>

       </div>


       <div class="book-offer">
         <a href="details.html">
        <img src="images/book7.jpg">
        </a>
        <p> <img src="images/svgexport-56.svg"> 
          <span class="type-book"> 
            كتاب الكتروني
            </span>
         </p>
        <p class="title"> رواية كانت لك</p>
        <span class="price">17.55 رس</span>
        <p> العرض سينتهي بعد :</p>
        <p class="offer" data-offer="jan 26, 2022 00:00:00"></p>
        <div class="icon-under-book">
         
          
          <img src="images/svgexport-2.svg">
          <img src="images/svgexport-21.svg">
          <img src="images/svgexport-56.svg">

        </div>

     </div>





         </div>
      </div>
       
      <div class="item-grid book-cook">
        <p> العروض الحالية  </p>
         <div class="container-book-offer">
            <div class="book-offer">
               <a href="details.html"> <img src="images/book-offer2.jpg"></a>
               <p> <img src="images/svgexport-56.svg"> 
                <span class="type-book"> 
                   كتاب الكتروني
                   </span>
                </p>
               <p class="title"> عالم صوفي</p>
               <span class="price"  >17.55 رس</span>
               <p> العرض سينتهي بعد :</p>
               <p class="offer" data-offer="jan 20, 2022 00:00:00"></p>
               <div class="icon-under-book">
                <img src="images/svgexport-2.svg">
                <img src="images/svgexport-21.svg">
                <img src="images/svgexport-56.svg">

               </div>

            </div>


            <div class="book-offer">
              <a href="details.html">
              <img src="images/book2.jpg">
              </a>
              <p><img src="images/svgexport-56.svg"> 
                <span class="type-book"> 
                  كتاب الكتروني
                  </span>
              </p>
              <p class="title"> كجثة في رواية بولسية</p>
              <span class="price">15.5 رس</span>
              <p> العرض سينتهي بعد :</p>
              <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
              <div class="icon-under-book">
                <img src="images/svgexport-2.svg">
                <img src="images/svgexport-21.svg">
                <img src="images/svgexport-56.svg">

              </div>

           </div>

           <div class="book-offer">
            <a href="details.html">
            <img src="images/book5.jpg">
            </a>
            <p><img src="images/svgexport-56.svg"> 
              <span class="type-book"> 
                كتاب الكتروني
                </span>
            </p>
            <p class="title"> روايات اشواق</p>
            <span class="price">17.55 رس</span>
            <p> العرض سينتهي بعد :</p>
            <p class="offer" data-offer="jan 24, 2022 00:00:00"></p>
            <div class="icon-under-book">
              <img src="images/svgexport-2.svg">
          <img src="images/svgexport-21.svg">
          <img src="images/svgexport-56.svg">

            </div>

         </div>

         <div class="book-offer">
          <a href="details.html">  
          <img src="images/book6.jpg">
          </a>
          <p><img src="images/svgexport-56.svg"> 
            <span class="type-book"> 
              كتاب الكتروني
              </span>
          </p>
          <p class="title"> المعيلة</p>
          <span class="price">17.55 رس</span>
          <p> العرض سينتهي بعد :</p>
          <p class="offer" data-offer="jan 28, 2022 00:00:00"></p>
          <div class="icon-under-book">
            <img src="images/svgexport-2.svg">
            <img src="images/svgexport-21.svg">
            <img src="images/svgexport-56.svg">

          </div>

       </div>


       <div class="book-offer">
         <a href="details.html">
        <img src="images/book7.jpg">
        </a>
        <p> <img src="images/svgexport-56.svg"> 
          <span class="type-book"> 
            كتاب الكتروني
            </span>
         </p>
        <p class="title"> رواية كانت لك</p>
        <span class="price">17.55 رس</span>
        <p> العرض سينتهي بعد :</p>
        <p class="offer" data-offer="jan 26, 2022 00:00:00"></p>
        <div class="icon-under-book">
         
          
          <img src="images/svgexport-2.svg">
          <img src="images/svgexport-21.svg">
          <img src="images/svgexport-56.svg">

        </div>

     </div>





         </div>
      </div>

      <div class="item-grid book-love">
        <p> العروض الحالية  </p>
        <div class="container-book-offer">
           <div class="book-offer">
              <a href="/details"> <img src="images/book-offer2.jpg"></a>
              <p> <img src="images/svgexport-56.svg"> 
               <span class="type-book"> 
                  كتاب الكتروني
                  </span>
               </p>
              <p class="title"> عالم صوفي</p>
              <span class="price"  >17.55 رس</span>
              <p> العرض سينتهي بعد :</p>
              <p class="offer" data-offer="jan 20, 2022 00:00:00"></p>
              <div class="icon-under-book">
               <img src="images/svgexport-2.svg">
               <img src="images/svgexport-21.svg">
               <img src="images/svgexport-56.svg">

              </div>

           </div>


           <div class="book-offer">
             <a href="/details">
             <img src="images/book2.jpg">
             </a>
             <p><img src="images/svgexport-56.svg"> 
               <span class="type-book"> 
                 كتاب الكتروني
                 </span>
             </p>
             <p class="title"> كجثة في رواية بولسية</p>
             <span class="price">15.5 رس</span>
             <p> العرض سينتهي بعد :</p>
             <p class="offer" data-offer="jan 22, 2022 00:00:00"></p>
             <div class="icon-under-book">
               <img src="images/svgexport-2.svg">
               <img src="images/svgexport-21.svg">
               <img src="images/svgexport-56.svg">

             </div>

          </div>

          <div class="book-offer">
           <a href="details.html">
           <img src="images/book5.jpg">
           </a>
           <p><img src="images/svgexport-56.svg"> 
             <span class="type-book"> 
               كتاب الكتروني
               </span>
           </p>
           <p class="title"> روايات اشواق</p>
           <span class="price">17.55 رس</span>
           <p> العرض سينتهي بعد :</p>
           <p class="offer" data-offer="jan 24, 2022 00:00:00"></p>
           <div class="icon-under-book">
             <img src="images/svgexport-2.svg">
         <img src="images/svgexport-21.svg">
         <img src="images/svgexport-56.svg">

           </div>

        </div>

        <div class="book-offer">
         <a href="details.html">  
         <img src="images/book6.jpg">
         </a>
         <p><img src="images/svgexport-56.svg"> 
           <span class="type-book"> 
             كتاب الكتروني
             </span>
         </p>
         <p class="title"> المعيلة</p>
         <span class="price">17.55 رس</span>
         <p> العرض سينتهي بعد :</p>
         <p class="offer" data-offer="jan 28, 2022 00:00:00"></p>
         <div class="icon-under-book">
           <img src="images/svgexport-2.svg">
           <img src="images/svgexport-21.svg">
           <img src="images/svgexport-56.svg">

         </div>

      </div>


      <div class="book-offer">
        <a href="details.html">
       <img src="images/book7.jpg">
       </a>
       <p> <img src="images/svgexport-56.svg"> 
         <span class="type-book"> 
           كتاب الكتروني
           </span>
        </p>
       <p class="title"> رواية كانت لك</p>
       <span class="price">17.55 رس</span>
       <p> العرض سينتهي بعد :</p>
       <p class="offer" data-offer="jan 26, 2022 00:00:00"></p>
       <div class="icon-under-book">
        
         
         <img src="images/svgexport-2.svg">
         <img src="images/svgexport-21.svg">
         <img src="images/svgexport-56.svg">

       </div>

    </div>





        </div>
      </div>
      


      

      <footer class="item-grid footer">
       <div class="container-footer">
        <div class="itemfooter subscrip">
          <p class="head-subscrip">انضم الى نشرتنا البريدية</p> 
          <input type="text" placeholder="ادخل بريدك الالكتروني">
          <input type="submit" value="اشتراك">

          <div class="itemfooter footer-icon-container">
            <div>تواصل معنا </div>
            <div class="icon-contact">
            <img src="images/svgexport-58.svg" alt="">
            <img src="images/svgexport-59.svg" alt="">
            <img src="images/svgexport-60.svg" alt="">
            <img src="images/svgexport-61.svg" alt="">
            <img src="images/svgexport-62.svg" alt="">
            <img src="images/svgexport-63.svg" alt="">
            <img src="images/svgexport-64.svg" alt="">
           
            </div>
         </div>
        </div>
        

        <div class="itemfooter customer-care">
          <div class=" phone-div">
            <p>خدمة العملاء</p>

            <div class="hide-phone-dive">
         
             <p><a herf="#">مبيعات الشركات</a> </p>
             <p><a herf="#">الاسئلة المتكرره</a> </p>
             <p><a herf="#">دليل التسوق والمطبوعات</a> </p>
             <p><a herf="#">مواقع المعارض</a> </p>
             <p><a herf="#">سياسة الضمان</a> </p>
             <p><a herf="#">سياسة الاسترجاع والاستبدال</a> </p>
             
             <p><a herf="#"> اتصل بنا >
              <br>
              920000089   </a> </p>

            </div>

          </div>  
        </div>

        <div class="itemfooter servece"> 
          <p>خدمة جرير</p>
          

          <div class="hide-servece">
           
           
            
            
            
            
            
            
            <p><a herf="#"> خدمة تقسيط المشتريات</a> </p>
            <p><a herf="#"> خدمة ما بعد البيع</a> </p>
            <p><a herf="#">خدمة الحماية الشاملة</a> </p>
            <p><a herf="#">حماية اجهزه ابل</a> </p>
            <p><a herf="#">بطاقة خصم جرير</a> </p>
            <p><a herf="#">بطاقة جرير للهدايا</a> </p>
            
            
          </div>
        </div>
        <div class="itemfooter quick-link">
          <p>روابط سريعة</p>
         



          <div class="hide-quick-start">
            <p><a herf="#"> اصدارات جرير</a> </p>
            <p><a herf="#"> قارى جرير</a> </p>
            <p><a herf="#">شركاء برامج المكافئات</a> </p>
            <p><a herf="#">خدمات شركات الاتصالات</a> </p>
          </div>
          
        
        
        </div>
        <div class="itemfooter ">
          <p>عن جرير</p> 
         
          
          
         
        
          <div class="hide-about">
            <p><a herf="#">  من نحن</a> </p>
            <p><a herf="#"> الحوكمة</a> </p>
            <p><a herf="#">علاقات المستثمرين والتقارير</a> </p>
            <p><a herf="#">الاستدامة </a> </p>
            <p><a herf="#"> الاخببار</a> </p>
            <p><a herf="#">  فرص العمل</a> </p>

          </div>
        </div>
        
        
      </div> <!--end container footer div-->
       <hr>
      <div class="info-footer">
        <div class="way-paid">
          <i class="fab  fa-cc-visa"></i>
          <i class="fab  fa-cc-mastercard"></i>
          <i class="fab  fa-cc-stripe"></i>
          <i class="fab  fa-cc-amazon-pay"></i>
        </div> 
        <div class="crypt">
          <p>سياسة الخصوصية |شروط الخدمة</p>
          <p>جميع الحقوق محفوظة لمكتبة جرير   © 2015 س .ت 1010654213 </p>
          
        </div>


      </div>
      
      </footer>       


  </div> <!--end container grid-->
 <script src="js/index.js">

 </script>  
</body>
</html>