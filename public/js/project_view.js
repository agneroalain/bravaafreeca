function show_project(params) {
    
}

function toggle_project(params) {
   if($(".project_page").hasClass(params)){
       $("."+params).toggle();
       $("#cover"+params).toggle();
   }
   else{
       alert("nothing");
   }
    
}