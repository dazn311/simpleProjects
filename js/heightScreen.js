    /* grid-area: tbox1; */
    // justify-self: stretch;
    // width: 98%;
    // grid-column-start: 1;
    // grid-column-end: 5;
    // grid-row-start: 3;
    // grid-row-end: 4;
    // z-index: 2;

    document.getElementById("btnTbox1").onclick = function() {btnTbox1Onclick()};
    
    function btnTbox1Onclick() {
       
      document.getElementById("tbox1Dard").style.borderColor = "red";
      // document.getElementById("tbox2").style.display = "none";
      
      document.getElementsByClassName("tbox2")[0].style.display = "none";
      document.getElementById("tbox3").style.display = "none";
      document.getElementsByClassName("tbox1")[0].classList.add('tbox11');
      document.getElementsByClassName("tbox1")[0].classList.toggle("tbox1");
       

   //    document.getElementById("tbox1").style.grid-column-start = "1";
   //    document.getElementById("tbox1").style.grid-column-end = "5";
   }
    


 
 
  