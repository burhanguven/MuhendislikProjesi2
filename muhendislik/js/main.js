$(function(){
    var editID = 0;

    login = function(username,password){
         $.ajax({
            url: 'server/index.php',
            type:'POST',
            data:{type:'login','username':username,'password':password},
            dataType:'JSON',
            success:function(ret){
                if(ret.result){
                    window.location.href = "kayitlar.php?get=1";
                }else alert("Giriş bilgileriniz yanlış!");
            }
        });
    }

    add = function(name,email,sinif,bolum,no){
        $.ajax({
            url: 'server/index.php',
            type: 'POST',
            data:{type:'add',name:name,email:email,sinif:sinif,bolum:bolum,no:no},
            dataType: 'JSON',
            success: function(ret){
                if(ret.result){
                    clear();
                    list();
                }else alert(ret.error);
            }
        });
    }

    update = function(name,email,sinif,bolum,no,id){
        $.ajax({
            url: 'server/index.php',
            type: 'POST',
            data:{type:'update',name:name,email:email,sinif:sinif,bolum:bolum,no:no,id:id},
            dataType: 'JSON',
            success: function(ret){
                if(ret.result){
                    clear();
                    list();
                }else alert(ret.error);
            }
        });
    }

    get = function(id){
         $.ajax({
            url: 'server/index.php',
            type: 'POST',
            data:{type:'get',id:id},
            dataType: 'JSON',
            success: function(ret){
                if(ret.result){
                    
                    editID = ret.get.ogrenci_id;
                    $("input[name=bilgilerim_adsoyad]").val(ret.get.ogrenci_ad);
                    $("input[name=bilgilerim_mail]").val(ret.get.ogrenci_email);
                    $("input[name=bilgilerim_sinif]").val(ret.get.ogrenci_sinif);
                    $("input[name=bilgilerim_bolum]").val(ret.get.ogrenci_bolum);
                    $("input[name=bilgilerim_no]").val(ret.get.ogrenci_no);

                }else alert(ret.error);
            }
        });
    }


    del = function(id){
         $.ajax({
            url: 'server/index.php',
            type: 'POST',
            data:{type:'delete',id:id},
            dataType: 'JSON',
            success: function(ret){
                if(ret.result){
                    list();
                }else alert(ret.error);
            }
        });
    }

    

    clear = function(){
        editID = 0;
        $("input[name=bilgilerim_adsoyad]").val("");
        $("input[name=bilgilerim_mail]").val("");
        $("input[name=bilgilerim_sinif]").val("");
        $("input[name=bilgilerim_no]").val("");
        $("input[name=bilgilerim_bolum]").val("");
    }
    
    list = function(){
        $("#kayitlar tbody").html("");
        $.ajax({
            url:'server/index.php',
            type:'POST',
            data:{type:'list'},
            dataType:'JSON',
            success: function(ret){
                if(ret.result){
                    for (var i= 0; i < ret.list.length; i++){
                        $("#kayitlar tbody").append("<tr>"+
                  "<td scope=\"row\"></td>"+
                  "<td>"+ret.list[i].ogrenci_no+"</td>"+
                  "<td>"+ret.list[i].ogrenci_ad+"</td>"+
                  "<td>"+ret.list[i].ogrenci_email+"</td>"+
                  "<td>"+ret.list[i].ogrenci_sinif+"</td>"+
                  "<td>"+ret.list[i].ogrenci_bolum+"</td>"+
                  "<td aling='center' class=\"gizle\"><button class=\"btn btn-secondary sil\" data-id='"+ret.list[i].ogrenci_id+"' style=\"width: 50px\">Sil</button></td>"+
                  "<td aling='center' class=\"gizle\"><button class=\"btn btn-secondary duzenle\" data-id='"+ret.list[i].ogrenci_id+"' style=\"width: 80px\">Düzenle</button></td>"+
                "</tr>");
                    }
                }else alert(ret.error);
            }
        });
    }


    $(".girisyap").on("click",function(e){
        var kullaniciAdi = $("input[name=username]").val();
        var sifre = $("input[name=pass]").val();

        login(kullaniciAdi,sifre);
       
        e.preventDefault();
    });

    $("button[name=insertislemi]").on("click",function(e){
        var name = $("input[name=bilgilerim_adsoyad]").val();
        var email = $("input[name=bilgilerim_mail]").val();
        var sinif = $("input[name=bilgilerim_sinif]").val();
        var bolum = $("input[name=bilgilerim_bolum]").val();
        var no = $("input[name=bilgilerim_no]").val();

        if(editID == 0)
            add(name,email,sinif,bolum,no);
        else update(name,email,sinif,bolum,no,editID);

        e.preventDefault();
    });

    $("#kayitlar").on("click",".sil",function(){
        var id = $(this).data("id") ;
        del(id);
    });

    $("#kayitlar").on("click",".duzenle",function(){
        var id = $(this).data("id") ;
        get(id);
    });

    list();

});