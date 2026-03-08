// jQuery(document).ready( function() {
//     var coll = document.getElementsByClassName("collapsible");
//     var i;

//     for (i = 0; i < coll.length; i++) {
//         coll[i].onclick = function() {
//             this.classList.toggle("active");
//             var content = this.nextElementSibling;
//             if (content.style.maxHeight){
//                 content.style.maxHeight = null;
//             } else {
//                 content.style.maxHeight = content.scrollHeight + "px";
//             } 
//         }
//     }
//     coll[0].onclick();
// });


// jQuery(document).ready(function(){
//     jQuery('.content').hide();
      
//     jQuery('.collapsible').click(function() {
//       if (jQuery(this).hasClass("active")) {
//         jQuery(this).removeClass("active").find(".content").slideUp();
//       } else {
//         jQuery(".content").slideUp();
//         jQuery(".collapsible.active").removeClass("active");
//         jQuery(this).addClass("active").find(".content").slideDown();
//       }
//       return false;
//     });
    
//   });


jQuery(function() {
    jQuery( "#accordion" ).accordion({
        collapsible: true,
        animate: 1000,
        heightStyle: "content"
    });
 });