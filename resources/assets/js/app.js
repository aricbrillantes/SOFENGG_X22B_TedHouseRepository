
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


// Upload File
$('#btn_newfile').click(function(){ 
    $('#img_upload').trigger('click'); 
});

$('#up_save').click(function(){
    $('#submit_work').trigger('click');
});

$(function() {
    $("#img_upload").change(function (){
      var fileName = $(this).val();
      fileName = fileName.split('\\').pop().split('/').pop();
      document.getElementById("btn_newfile").innerHTML = fileName;
    });
 });

$(document).ready(function () {
    var tag = "tag_";
    var tagId = 1;

    var author = "author_";
    var authorId = 1;
    
    $('#btn_addtag').click(function () {
         var tag_value = document.getElementById("new_tag").value;
         $('#up_tags').append("<input type='text' id='" + tag + tagId + "' name='" + tag + tagId + "' style='display: none' value='" + tag_value + "'><li>" + tag_value + "<button class='del_tag'>X</button></li>");
         document.getElementById("new_tag").value = "";
         tagId++;
    });

    $('#btn_addauthor').click(function () {
        var author_value = document.getElementById("new_author").value;
        $('#up_authors').append("<li>" + author_value + "<button class='del_tag' type='button'>X</button><input type='text' id='" + author + authorId + "' name='" + author + authorId + "' style='display: none' value='" + author_value + "'></li>");
        document.getElementById("new_author").value = "";
        authorId++;
        document.getElementById("num_authors").value = authorId;
    });

    $(document).on('click','.del_tag', function () {
        $(this).closest("li").remove();
    });
});

// View Work
$(document).ready(function(){
    $("#pop_update").hide();
    $("#black").hide();
    $("#pop_del").hide();
    $("#pop_dl").hide();
    $("#pop_rqdl").hide();
    $("#pop_rqview").hide();
    $("#poster").hide();

    $("#btn_update").click(function(){
        $("#pop_update").show();
        $("#black").show();
    });

    $("#up_cancel").click(function(){
        $("#pop_update").hide();
        $("#black").hide();
    });

    $("#btn_delete").click(function(){
        $("#pop_del").show();
        $("#black").show();
    });

    $('#del_yes').click(function(){ 
        $('#delete_work').trigger('click'); 
    });

    $("#del_cancel").click(function(){
        $("#pop_del").hide();
        $("#black").hide();
    });

    $("#btndl_member").click(function(){
        $("#pop_dl").show();
        $("#black").show();
    });

    $("#dl_cancel").click(function(){
        $("#pop_dl").hide();
        $("#black").hide();
    });

    $("#btndl_guest").click(function(){
        $("#pop_rqdl").show();
        $("#black").show();
    });

    $("#dl_rqcancel").click(function(){
        $("#pop_rqdl").hide();
        $("#black").hide();
    });

    $("#req_preview").click(function(){
        $("#pop_rqview").show();
        $("#black").show();
    });

    $("#view_vcancel").click(function(){
        $("#pop_rqview").hide();
        $("#black").hide();
    });

    $("#btn_poster").click(function(){
        var btn = document.getElementById("btn_poster");
        var btn2 = document.getElementById("btn_abstract");

        if (btn.classList.contains('btn_deselect')) {
            btn.classList.remove('btn_deselect');
            btn.classList.toggle('btn_select');

            btn2.classList.remove('btn_select');
            btn2.classList.toggle('btn_deselect');

            $("#abstract").hide();
            $("#poster").show();
        }
    });

    $("#btn_abstract").click(function(){
        var btn = document.getElementById("btn_poster");
        var btn2 = document.getElementById("btn_abstract");

        if (btn2.classList.contains('btn_deselect')) {
            btn2.classList.remove('btn_deselect');
            btn2.classList.toggle('btn_select');

            btn.classList.remove('btn_select');
            btn.classList.toggle('btn_deselect');

            $("#abstract").show();
            $("#poster").hide();
        }
    });
});

// Search File
$('#search').click(function(){
    var search = document.getElementById("search_content").value;
    if(search != '') {
        var arr_search = search.split(' ').join('+');
        window.location.href = '/search/' + arr_search;
    } else {
        window.location.href = '/works';
    }
});

$('#btn_sort').click(function(){
    var sort = document.getElementById("sort").value;
});