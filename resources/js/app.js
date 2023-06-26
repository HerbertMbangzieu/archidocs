import './bootstrap';
import './jquery';

$(document).ready(function(){

    $("#cycle").change(function(){
        let options = document.querySelectorAll("#filiere .choix")
        for(let opt of options){
            opt.remove()
        }
        $.ajax({
            type: 'GET',
            url:'/getCycle/'+ $(this).val(),
            success: function(data){
                for(let filiere of data){
                    let option = document.createElement('option')
                    option.classList.add('choix')
                    option.value = filiere.id
                    option.text = filiere.nom
                    $("#filiere").append(option)
                }
            },
        })
    })

    $("#filiere").change(function(){
        let options = document.querySelectorAll("#niveau .choix")
            for(let opt of options){
                opt.remove()
            }
        $.ajax({
            type: 'GET',
            url: '/cmessages/getFiliere/'+$(this).val(),
            success: function(data){
                console.log(data[0]);
                for(let niveau of data){
                    let option = document.createElement('option')
                    option.classList.add('choix')
                    option.value = niveau.id
                    option.text = 'niveau '+niveau.niveau
                    $("#niveau").append(option)
                }
            }
        });
        if ($("#type").val() < 4) {
            $("#niveau").removeClass('hidden')
        }
    })


});