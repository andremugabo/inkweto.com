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

/* =====================================================
                      MODAL JS START 
======================================================== */ 
function openModel(e){
    e.preventDefault();
    if (document.querySelector('.seller_dash_modal').classList.contains('hide') == 1){
        document.querySelector('.seller_dash_modal').classList.remove('hide');
    }
}

if (document.querySelector('.seller_dash_modal')) {
    document.querySelector('.open_modal').addEventListener("click",openModel);
}

document.querySelectorAll('.btn-close').forEach(Btns =>{
    Btns.addEventListener("click",function(e){
        e.preventDefault();
        if (document.querySelector('.seller_dash_modal').classList.contains('hide')!=1) {
            document.querySelector('.seller_dash_modal').classList.add('hide');            
        }

    });
});



/* =====================================================
                      MODAL JS ENDS 
======================================================== */ 
/* =====================================================
                    SHOP DISPLAY START
========================================================*/ 
let j = 0;
// if (document.querySelector('.get_seller')) {
    // const seller_id = document.querySelector('.get_seller').value;
    // console.log(seller_id+" here");




async function displayShop(){
    try {
        console.log("hooooooo 1");
        
        const response = await fetch("localhost/academic/api/CONTROLER/shopController.php?action=displayShop")
        if (!response.ok) {
            throw new Error("Network response was not Ok");
        }        
            console.log("hooooooo");
        const data = await JSON.stringify(response.json());
        console.log(data);
        // for (const item of data) {
        //         console.log(item);
        //     for (let i = 0; i < item.length; i++) {
        //         const element = item[i];
        //         console.log(element.s_logo);
        //          j = j+1;
        //         document.querySelector('.tbody_shop').innerHTML+=`
        //             <tr>
        //             <th scope="row">${j}</th>
        //             <td>${element.u_fname}`+" " +`${element.u_lname}</td>
        //             <td>${element.s_name}</td>
        //             <td>${element.s_reg}</td>
        //             <td class="slogo_s" style="background-image: url('ASSETS/SLOGOPIC/${element.s_logo}');" ></td>
        //             <td><button class="btn1_s" title="view shop" onclick="window.location.href='shopDetail'"><img src="ASSETS/SIMAGES/Visible1.png" alt="view image"></button>&nbsp;&nbsp;&nbsp;<button class="btn2_s" title="delete shop"><img src="ASSETS/SIMAGES/Delete.png" alt="view image"></button></td>
        //             </tr>
        //         `;
                
        //     }
            
        // }

    } catch (error) {
        console.log(error);
    }
}

if (document.querySelector('.tbody_shop')) {
    displayShop();
}
// }






/* =====================================================
                    SHOP DISPLAY END
========================================================*/ 
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


/*========================================================
                    PAYMENT MODE
==========================================================*/ 

const paymentMode = document.querySelector(".payment-mode-type");

if (paymentMode) {

	paymentMode.innerHTML +=`
							<div class="momo-mtn hide ">
						<div class="log">
							<span>MTN</span>
						</div>
						<div class="payment-form">
							<form>
								<div class="mb-3">
								  <label for="formGroupExampleInput" class="form-label">Phone Number</label>
								  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Phone Number">
								</div>
								<div class="mb-3">
								  <label for="formGroupExampleInput2" class="form-label">Amount</label>
								  <input type="text" class="form-control" value="23,000 Frw" id="formGroupExampleInput2"  disabled>
								</div>
								<div class="">
								    <button type="submit" class="btn btn-primary">Buy</button>
								</div>
							</form>
						</div>						
					</div>


					<div class="airtel-money hide">
						<div class="airtel-log">
							<span><img src="ASSETS/SIMAGES/logairtel1.png">AIRTEL</span>
						</div>
						<div class="payment-form">
							<form>
								<div class="mb-3">
								  <label for="formGroupExampleInput" class="form-label">Phone Number</label>
								  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Phone Number">
								</div>
								<div class="mb-3">
								  <label for="formGroupExampleInput2" class="form-label">Amount</label>
								  <input type="text" class="form-control" value="23,000 Frw" id="formGroupExampleInput2"  disabled>
								</div>
								<div class="">
								    <button type="submit" class="btn btn-primary">Buy</button>
								</div>
							</form>
						</div>						
					</div>`;
}


function displayPaymentMode(){
	if (document.getElementById("pwMTN")) {
		document.getElementById("pwMTN").addEventListener('click',function(){
				document.querySelector(".momo-mtn").classList.remove("hide");
				document.querySelector(".airtel-money").classList.add("hide");
		});
	} 
	if (document.getElementById("pwAIRTEL")) {
		document.getElementById("pwAIRTEL").addEventListener('click',function(){
			    document.querySelector(".airtel-money").classList.remove("hide");
				document.querySelector(".momo-mtn").classList.add("hide");
		})
	}
}
displayPaymentMode();

const productImage = document.querySelector('.product-img');

if (productImage) {

	productImage.addEventListener('mousemove',function(e){

	let width = productImage.offsetWidth;
	let height = productImage.offsetHeight;
	let mouseX = e.offsetX;
	let mouseY = e.offsetY;

	console.log(mouseX);
	console.log(mouseY);

	let bgPosX = (mouseX / width * 100);
	let bgPosY = (mouseY / height * 100);

	productImage.style.backgroundPosition =`${bgPosX}% ${bgPosY}%`;

});

productImage.addEventListener('mouseleave',function(){
		productImage.style.backgroundPosition = "center";
});

}

