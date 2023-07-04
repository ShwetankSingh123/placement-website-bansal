const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});



// const inputle = document.querySelectorAll("#namelele");

//   var name1 = document.myform.name.value;
//   inputle.forEach((a) => {
//     a.addEventListener("Onclick", validateform());
//   });

 function validateform(){
  
 var name1 = document.myform.name.value;


  for(let i=0;i<name1.length();i++){
  if(name1[i]==1 || name1[i]==2 || name1[i]==3 || name1[i]==4 || name1[i]==5 || name1[i]==6 || name1[i]==7 || name1[i]==8 || name1[i]==9 || name1[i]==0){
    alert("name can not be a number");
    return false;
  }
 }


  if(name1==null || name1=="" || name1==isNaN()){
    alert("name cannot be blank");
    return false;
  }
}
