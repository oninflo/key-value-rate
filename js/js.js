function newRow(){
    var num = ($('input[class=val]').size());
    var element = '<div><input type="text" name="key[]" value="k' + num + '" class="key" />: <input type="text" name="val[]" value="0" class="val" /></div>';
    $('a#newrow').before(element);
}

$(document).ready(function () {
	$('form#test_form').submit(function(event) {
		$.ajax({
                    url: 'index.php', 
                    data: $(this).serialize(), 
                    type: 'post', 
                    dataType: 'json', 
                    success: function(data) {
                        $('label').empty();
			$('table#test_table tbody').empty();
                        $('span#mes').html('Right form');
                        if(data[0]!='err'){
                            $.each(data, function(key, val) {
                                $('#test_table > tbody').append('<tr><td>' + key + '</td><td>' + val + '</td></tr>');
                            });  
                        }else{

                            function checkErrors(datas){
                                $.each(datas, function(i, v){
                                    var elementStr = "input[value=" + v + "]";
                                    $(elementStr).before('<label>Hibás mező</label>');
                                });                                
                            }           
                            
                            checkErrors(data);
                            
                        }

                    }});
         return false;   
		
	});
        

});

