/** =======================================================
 *                           VARIABLES
 * ========================================================*/
const men_slide = document.querySelector('#men-slide');
const women_slide = document.querySelector('#women-slide');
const children_slide = document.querySelector('#children-slide');
const seller_login = document.querySelector('.seller_login');
const start_selling = document.querySelectorAll('.start_selling');
const form_seller_log = document.querySelector('.form_seller_log');
const form_seller_reg = document.querySelector('.form_seller_reg');




let image_arr = ["men1.png","women1.png","children1.png"];
let text1_arr = ["Men Collection 2023","Women Collection 2023","Children New Seasons 2023"];
let tetx2_arr= ["NEW ARRIVALS","NEW SEASONS","CHILDREN SHOES"];
let slide_arr = ["men_s","women_s","children_s"];
const slide_left_btn =  document.querySelector('#slide_left_btn');
const slide_right_btn =  document.querySelector('#slide_right_btn');
let currentslide = 0;
const banner_div = document.querySelector('.banner_div');


// SLIDES

let h5_text= text1_arr[currentslide];
let h1_text = tetx2_arr[currentslide];
let s_image = image_arr[currentslide];



const filter_product = document.querySelector('.filter_product');
const search_product = document.querySelector('.search_product');
const filter_div = document.querySelector('.filter_div');
const p_search = document.querySelector('.p_search');
const imagef_1 = document.querySelector('.imagef_1');
const imagef_2 = document.querySelector('.imagef_2');
const images_1 = document.querySelector('.images_1');
const images_2 = document.querySelector('.images_2');




/** =======================================================
 *                          FUNCTIONS
 * ========================================================*/ 



function slide_display(h5_text,h1_text,s_image) {
        banner_div.innerHTML=`
        <div id="men-slide" class="slide_banner  d-flex justity-content-space-between align-items-center">
        <div class="banner_txt d-flex justity-content-center align-items-center">
            <h5>${h5_text}</h5>
            <h1>${h1_text}</h1>
            <Button>SHOP NOW</Button>
        </div>
        <div class="banner_img">
            <img src="ASSETS/SIMAGES/${s_image}" alt="image_banner">
        </div>
    </div>
        `;
    
}

function slide_forward(){
     
     if(currentslide == slide_arr.length){
        currentslide = 0;
     }
     

    h5_text = text1_arr[currentslide];
    h1_text = tetx2_arr[currentslide];
    s_image = image_arr[currentslide];

    if (banner_div) {
        slide_display(h5_text,h1_text,s_image);
        currentslide ++;
    }

     
}

function display(element){
    element.classList.remove("hide");
}

function hide(element){
    element.classList.add("hide");
}
setInterval(() => {
    slide_forward()
}, 4000);



function displaySuccess(idElemenet,errorId){
    idElemenet.style.border = "1px solid green";
    errorId.classList.add("hide");
}
function displayFailer(idElemenet,errorId){
    idElemenet.style.border = "1px solid red";
    errorId.classList.remove("hide");
}







/** =======================================================
 *                           EVENTS
 * ========================================================*/
if (filter_product) {
    
    filter_product.addEventListener("click",function(e){
        e.preventDefault();
        if (filter_div.classList.contains("hide")) {
            display(filter_div);
            hide(imagef_1);
            display(imagef_2)
            if (p_search.classList.contains('hide')!= 1) {
                hide(p_search);
                hide(images_2);
                display(images_1);
            }
        } else {
            hide(filter_div);
            hide(imagef_2);
            display(imagef_1)
        }
        
    
    });

}


if (search_product) {
    

    search_product.addEventListener("click",function(e){
        e.preventDefault();
        if (p_search.classList.contains('hide')) {
            display(p_search);
            hide(images_1);
            display(images_2);
            if (filter_div.classList.contains('hide')!=1) {
                hide(filter_div);
                hide(imagef_2);
                display(imagef_1);
            }
        } else {
            hide(p_search);
            hide(images_2);
            display(images_1);
        }
    });


}



if (seller_login) {    
    seller_login.addEventListener("click",function(e){
        e.preventDefault();
        if (form_seller_log.classList.contains('hide')) {
            display(form_seller_log);
            hide(form_seller_reg);
        }
    
    });

}

if (start_selling) {

    start_selling.forEach(btns =>
    btns.addEventListener("click",function(e){
        e.preventDefault();
        if (form_seller_reg.classList.contains('hide')) {
            hide(form_seller_log);
            display(form_seller_reg);  
        }

    }));
}




/** =======================================================
 *                           RUN FUNCTION
 * ========================================================*/
// slide_forward();