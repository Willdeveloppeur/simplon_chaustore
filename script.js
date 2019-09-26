brand_open();
function brand_open(){
    var brandOpen = document.getElementById('visu');
    var visu_display = document.getElementById('brand_open');
    brandOpen.addEventListener('click', brand_open);
    if (visu_display.style.display == 'none'){
        visu_display.style.display ='block';
    }else{
        visu_display.style.display = 'none';
    }
}

add_open();
function add_open(){
    var addOpen = document.getElementById('add');
    var add_display = document.getElementById('add_open');
    addOpen.addEventListener('click', add_open);
    if (add_display.style.display == 'none'){
        add_display.style.display ='block';
    }else{
        add_display.style.display = 'none';
    }
}

mod_open();
function mod_open(){
    var modOpen = document.getElementById('mod');
    var mod_display = document.getElementById('mod_open');
    modOpen.addEventListener('click', mod_open);
    if (mod_display.style.display == 'none'){
        mod_display.style.display ='block';
    }else{
        mod_display.style.display = 'none';
    }
}

delete_open();
function delete_open(){
    var deleteOpen = document.getElementById('delete');
    var delete_display = document.getElementById('delete_open');
    deleteOpen.addEventListener('click', delete_open);
    if (delete_display.style.display == 'none'){
        delete_display.style.display ='block';
    }else{
        delete_display.style.display = 'none';
    }
}
