visu_brand();
function visu_brand(){
    var brandOpen = document.getElementById('visu');
    var visu_display = document.getElementById('visu_brand');
    brandOpen.addEventListener('click', visu_brand);
    if (visu_display.style.display == 'none'){
        visu_display.style.display ='block';
    }else{
        visu_display.style.display = 'none';
    }
}

add_brand();
function add_brand(){
    var addOpen = document.getElementById('add');
    var add_display = document.getElementById('add_brand');
    addOpen.addEventListener('click', add_brand);
    if (add_display.style.display == 'none'){
        add_display.style.display ='block';
    }else{
        add_display.style.display = 'none';
    }
}

// mod_brand();
// function mod_brand(){
//     var modOpen = document.getElementById('mod');
//     var mod_display = document.getElementById('mod_open');
//     modOpen.addEventListener('click', mod_open);
//     if (mod_display.style.display == 'none'){
//         mod_display.style.display ='block';
//     }else{
//         mod_display.style.display = 'none';
//     }
// }

delete_brand();
function delete_brand(){
    var deleteOpen = document.getElementById('delete');
    var delete_display = document.getElementById('delete_brand');
    deleteOpen.addEventListener('click', delete_brand);
    if (delete_display.style.display == 'none'){
        delete_display.style.display ='block';
    }else{
        delete_display.style.display = 'none';
    }
}
