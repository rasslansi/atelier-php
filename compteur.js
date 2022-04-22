alert("working");
let quantity = 2;
const submit = document.querySelector(".submit");
submit.addEventListener("click", testquantity);
let orderQuantity = document.getElementById("quantity").value;
function testquantity() {
    
    if (quantity < orderQuantity) {
        alert("There is no more sadwiches left");
    }
    else {
        quantity-=orderQuantity;
    }
}