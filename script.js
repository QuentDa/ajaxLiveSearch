$(document).ready(function () {
    $("#live_search").keyup(function () {
        var query = $(this).val();
        if (query != "") {
            $.ajax({
                url: 'process.php',
                method: 'POST',
                data: {
                    query: query
                },
                success: function (data) {
                    $('#search_result').html(data);
                    $('#search_result').css('display', 'block');

                    $("#live_search").focusout(function () {
                        $('#search_result').css('display', 'none');
                    });
                    $("#live_search").focusin(function () {
                        $('#search_result').css('display', 'block');
                    });
                }
            });
        } else {
            $('#search_result').css('display', 'none');
        }
    });







    

    $("#butsave").on('click', function() {
        var name = $('#name').val();

        if(name !=""){
            $.ajax({
                url:"save.php",
                type: "POST",
                data: {
                    name: name,
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#butsave").removeAttr("disabled");
                        $("#upForm").find('input:text').val('');
                        console.log("Enregistré avec Succès");
                    }
                    else if(dataResult.statusCode==201){
                        alert("Erreur d'enregistrement");
                    }
                }
            });
        }
        else{
            alert('Remplissez tout les champs, sérieux il y en a un seul');
        }
    });
});

