function checkAll(){ //ไปทำการดึงตัว form จากตัวลบข้อมูล ที่เป็นตัวcheckbox
    var form_element = document.forms[1].length;  // ที่ใช้indexที่1 [1] เพราะว่า เรามีช่ิงที่เป็นindex ท่ี0อยู่นั้นก็คือ formลบที่อยู่ด้านบน  
    for(i=0;i<form_element-1;i++){ //ใช้loop -1ในforms
        document.forms[1].elements[i].checked=true;
    }
}

function uncheckAll(){ //ไปทำการดึงตัว form จากตัวลบข้อมูล ที่เป็นตัวcheckbox
    var form_element = document.forms[1].length;  // ที่ใช้indexที่1 [1] เพราะว่า เรามีช่ิงที่เป็นindex ท่ี0อยู่นั้นก็คือ formลบที่อยู่ด้านบน  
    for(i=0;i<form_element-1;i++){  //ใช้loop  -1ใน เพื่อที่จะ ลบการรวมปุ่มลบไปด้วย ให้นับเฉพาะตัวchexkbox
        document.forms[1].elements[i].checked=false;
    }
}